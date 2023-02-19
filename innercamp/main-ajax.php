<?php 



function custom_login(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['custom_login_nonce'], 'custom_login') ){
        print 'Sorry, the verification data does not match.';
        exit;
    } else {
        $log = sanitize_text_field($_POST['login_username']);
        $pwd = sanitize_text_field($_POST['login_pwd']);
        $creds = array();
        $creds['user_login'] = $log;
        $creds['user_password'] = $pwd;
        $creds['remember'] = false;
        $user = wp_signon( $creds );
        if ( is_wp_error($user) ) {
            echo '<span class="error-login">'. $user->get_error_message() . '</span>';
        }else{
            echo '<script> window.location.href = "/my-account/orders/"; </script>';
        }
    }
    die;
}

add_action( 'wp_ajax_custom_login', 'custom_login' );
add_action( 'wp_ajax_nopriv_custom_login', 'custom_login' );


function custom_register(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['custom_register_nonce'], 'custom_register') ){
        print 'Sorry, the verification data does not match.';
        exit;
    } else {
        $register_username = sanitize_text_field($_POST['register_username']);
        $register_first_name = sanitize_text_field($_POST['register_first_name']);
        $register_last_name = sanitize_text_field($_POST['register_last_name']);
        $register_email = sanitize_email($_POST['register_email']);
        $register_password = sanitize_text_field($_POST['register_pwd']);
        $register_password_confirm = sanitize_text_field($_POST['confirm_register_pwd']);

        $billing_country = sanitize_text_field($_POST['billing_country']);
        $billing_city = sanitize_text_field($_POST['billing_city']);
        $billing_postcode = sanitize_text_field($_POST['billing_postcode']);
        $billing_adress_1 = sanitize_text_field($_POST['billing_adress_1']);

        if (strlen(preg_replace('/\s+/u', '', $register_username)) == 0) {
            echo '<span class="error-register" >Incorrect username</span>';
        } else {
            if (!is_email($register_email)) {
                echo '<span class="error-register">Incorrect email</span>';
            } else {

                if ($register_password === $register_password_confirm){
                    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $register_password)){
                        $userdata = array(
                            'user_pass' => $register_password,
                            'user_login' => $register_username,
                            'first_name' => $register_first_name,
                            'last_name' => $register_last_name,
                            'user_email' => $register_email,

                        );
                        $user_id = wp_insert_user($userdata);



                        if (is_wp_error($user_id)) {
                            echo '<span class="error-register">' . $user_id->get_error_message() . '</span>';
                        } else {




                            echo '<span class="error-register" ">' . 'User was created.' . '</span>';
                            wp_set_auth_cookie($user_id);

                            update_user_meta($user_id, 'billing_country', $billing_country);
                            update_user_meta($user_id, 'billing_city', $billing_city);
                            update_user_meta($user_id, 'billing_address_1', $billing_adress_1);
                            update_user_meta($user_id, 'billing_postcode', $billing_postcode);


                            wp_mail( $register_email, 'Registration', 'Congratulations ! Your account has been registered.');
                            echo '<script> window.location.href = "/my-account/"; </script>';
                        }
                    } else {
                        echo '<span class="error-register" ><b>Your password is not safe.</b> <br> Your password must have at least one lowercase letter, one uppercase letter, a number and a symbol, and be at least 8 characters long</span>';
                    }
                }else{
                    echo '<span class="error-register" >Passwords do not match</span>';
                }
            }
        }
    }
    die;
}

add_action( 'wp_ajax_custom_register', 'custom_register' );
add_action( 'wp_ajax_nopriv_custom_register', 'custom_register' );



function prod_couponcode(){

  if ( empty($_POST) || ! wp_verify_nonce( $_POST['coupon_post_nonce'], 'coupon_post') ){
        print 'Sorry, the verification data does not match 1111.';
        exit;
    }else{

      $coupon_code = sanitize_text_field($_POST['coupon_code']);

          WC()->cart->apply_coupon( $coupon_code );
          wc_print_notices();

  }
}

add_action( 'wp_ajax_couponcode_prod', 'prod_couponcode' );
add_action( 'wp_ajax_nopriv_couponcode_prod', 'prod_couponcode' );


  function prod_addcart(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['addcart_post_nonce'], 'addcart_post') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
      
    global $woocommerce;
        $woocommerce->cart->add_to_cart( $product_id = sanitize_text_field($_POST['postid']), $quantity = sanitize_text_field($_POST['quantity']), $variation_id = 0, $variation = array(), $cart_item_data = array() );
        $woocommerce->cart->add_to_cart(sanitize_text_field($_POST['postid']), );
        $pid = sanitize_text_field($_POST['postid']);
//echo get_price_html($product_id);
        
        
             $get_cart_contents_count =  WC()->cart->get_cart_contents_count();


        
            $return = array(
                'quantity'   => $get_cart_contents_count,
              
              
            );

            wp_send_json( $return );
        
 
      }
      die;
  }

add_action( 'wp_ajax_addcart_prod', 'prod_addcart' );
add_action( 'wp_ajax_nopriv_addcart_prod', 'prod_addcart' );



  function prod_delete(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['delete_post_nonce'], 'delete_post') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
      
//      echo 'remove_cart_item';

       // WC_Cart::remove_cart_item( sanitize_text_field($_POST['postid']) );
      
         $product_id = sanitize_text_field($_POST['postid']);
         $product_cart_id = WC()->cart->generate_cart_id( $product_id );
         $cart_item_key = WC()->cart->find_product_in_cart( $product_cart_id );
         if ( $cart_item_key ) WC()->cart->remove_cart_item( $cart_item_key );
        
        
             $get_cart_contents_count =  WC()->cart->get_cart_contents_count(); 

//             $get_cart_subtotalrrr = strip_tags(  WC()->cart->get_cart_subtotal() , '<ins><ins/>');

//             $get_cart_subtotal = str_replace("&nbsp;&#107;&#114;", "", $get_cart_subtotalrrr);
        
        
//         global $woocommerce;
//           $items = $woocommerce->cart->get_cart();
//          $total = $woocommerce->cart->get_cart_total();
//
//        foreach ($items as $item => $values) {
//            
//                  $iditems = $values['product_id']; 
//            
//                            $rrrvalues = wc_get_product( $iditems );
//
//                         $sum_regular_price = $rrrvalues->get_regular_price();
//                   
//                        $sum_quantity = $values['quantity'];
//                   
//                        $summm  =  $sum_regular_price * $sum_quantity;
//                   
//                   $sum+= $summm;
//        }
//           $notsale = number_format($sum , 2, ',', '.') . ' kr';
        
        

            $return = array(
                'quantity'   => $get_cart_contents_count,
//                'total'        => $get_cart_subtotal .' kr',
//                'notsale'        =>  $notsale,
            );

            wp_send_json( $return );
        
      
      }
      die;
  }

add_action( 'wp_ajax_delete_prod', 'prod_delete' );
add_action( 'wp_ajax_nopriv_delete_prod', 'prod_delete' );



if(0){

  function search_chang_post(){
      if ( empty($_POST) || ! wp_verify_nonce( $_POST['search_change_nonce'], 'search_change') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{



        if(sanitize_text_field($_POST['s']) !== ''){

            $options = array(
                'posts_per_page' => -1,
                'suppress_filters' => false, // important!
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby'     => 'title', 
                'order'       => 'ASC'  
            );
            $keyword = sanitize_text_field($_POST['s']);

            add_filter( 'posts_where', function ($where) use ($keyword) {
                global $wpdb;
                $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
                return $where;
            });
            $posts = get_posts( $options );


              echo '<ul class="list open">';
              foreach( $posts as $post ){   ?>
                  <li><a href="<?php echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
                  <?php
              }
              echo '</ul>';
          }
      }
      die;
  }

add_action( 'wp_ajax_search_post_change', 'search_chang_post' );
add_action( 'wp_ajax_nopriv_search_post_change', 'search_chang_post' );


  
  
}