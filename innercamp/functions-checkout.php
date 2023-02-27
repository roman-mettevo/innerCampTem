<?php
function innercamp_scripts_checkout() {
	if(is_page_template('tpl-checkout-page.php')){
		wp_enqueue_style('intlTelInput-css', get_template_directory_uri() . '/css/intlTelInput.min.css' );
		wp_enqueue_script( 'intlTelInput-js', get_template_directory_uri() . '/js/intlTelInput.min.js', array(), _S_VERSION, true );
		wp_enqueue_style('checkout-css', get_template_directory_uri() . '/css/checkout.css' );
		wp_enqueue_script( 'checkout-js', get_template_directory_uri() . '/js/checkout.js', array(), _S_VERSION, true );
	  }
}
add_action( 'wp_enqueue_scripts', 'innercamp_scripts_checkout' );
// WooCommerce Checkout Fields add placeholder
add_filter( 'woocommerce_checkout_fields', 'add_placeholder_checkout_fields', 20 );
function add_placeholder_checkout_fields( $fields ) {
   foreach ( $fields as $section => $section_fields ) {
      foreach ( $section_fields as $section_field => $section_field_settings ) {
		 $fields[$section][$section_field]['placeholder'] = $fields[$section][$section_field]['label'];
      }
   }
   $fields['billing']['billing_email']['priority'] = 1;
   $fields['billing']['billing_email']['placeholder'] = "Your email";
   $fields['billing']['billing_first_name']['placeholder'] = "Your first name";
   $fields['billing']['billing_last_name']['placeholder'] = "Your last name";
   $fields['billing']['billing_address_1']['placeholder'] = "Adress (ex: 12 Main Street)";
   $fields['billing']['billing_postcode']['placeholder'] = "Postal code (7 digits)";

   return $fields;
}



//Change the string on woocommerce
add_filter( 'gettext', 'change_field_strings', 20, 3 );
function change_field_strings( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Billing details' :
			$translated_text = __( 'Contact information', 'woocommerce' );
			break;
		case 'Returning customer?' :
			$translated_text = __( 'Already have an account?', 'woocommerce' );
			break;
		case 'Click here to login' :
			$translated_text = __( 'Log in', 'woocommerce' );
			break;
	}
	return $translated_text;
}



//Create field type to WooCommerce form field 
add_filter( 'woocommerce_form_field_heading','create_title_checkout_field', 10, 4 );
function create_title_checkout_field($field, $key, $args, $value) {
    $output = '<h3 class="form-row form-row-wide billing_heading_field">'.__( $args['label'], 'woocommerce' ).'</h3>';
    echo $output;
}

// Add field type to WooCommerce form field 
add_filter( 'woocommerce_checkout_fields','add_title_checkout_field' );
function add_title_checkout_field( $fields ) {
    $fields['billing']['billing_heading_name'] = array(
        'type'      => 'heading',
        'label'     => 'Please fill in your contact details',
		'priority' => 2
    );
	return $fields;
}

// Add VAT field to checkout
add_action( 'woocommerce_after_checkout_billing_form', 'add_vat_field' );
function add_vat_field( $checkout ) {
	$current_user = wp_get_current_user();
	$vat = $current_user ? $current_user->vat_field : " ";
    woocommerce_form_field( 'vat_field', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'placeholder'   => __('VAT VIES (optional)'),
		'label'   => __('?'),
		'default' => $vat,  
        ), $checkout->get_value( 'vat_field' ));
}


//Update the user meta with VAT
add_action('woocommerce_checkout_update_user_meta', 'update_user_meta_vat_field');
function update_user_meta_vat_field( $user_id ) {
	if ($user_id && $_POST['vat_field']) update_user_meta( $user_id, 'vat_field', esc_attr($_POST['vat_field']) );
}

// Update the order meta with VAT
add_action( 'woocommerce_checkout_update_order_meta', 'update_order_meta_vat_field' );

function update_order_meta_vat_field( $order_id ) {
    if ( !empty( $_POST['vat_field'] ) ) {
        update_post_meta( $order_id, 'vat_field', esc_attr($_POST['vat_field']));
    }
}

// Show VAT value in admin panel
add_action( 'woocommerce_admin_order_data_after_billing_address', 'show_vat_checkout_field_order', 10, 1 );
function show_vat_checkout_field_order( $order ) {    
   $order_id = $order->get_id();
   if ( get_post_meta( $order_id, 'vat_field', true ) ){
		echo '<p><strong>VAT:</strong> ' . get_post_meta( $order_id, 'vat_field', true ) . '</p>';
   } 
}
 