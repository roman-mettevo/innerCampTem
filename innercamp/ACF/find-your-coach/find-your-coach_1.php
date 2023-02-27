<?php // check if the flexible content field has rows of data
if( have_rows('find_your_coach') ):
     // loop through the rows of data
    while ( have_rows('find_your_coach') ) : the_row(); ?>
    <?php if( get_row_layout() == 'section_1' ): ?>
    
    
    <?php  $urlall = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    

    
<section class="find-your-coach">
  <div class="header-bg"></div>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <div id="map-canvas" class="none"></div>
        <h2 class="title"><?php echo the_title(); ?></h2>
        <div class="find-your-coach__columns">
          <div class="find-your-coach__filter-wrapper">
            <div class="find-your-coach__filter">
              <h3 class="heading">Filter by</h3>
              
              
         <?php // $yterms = get_sub_field('member_team');  ?> 
         
          <?php // $filter_by = get_sub_field( 'filter_by' ); ?>
					
					<?php // if ( $filter_by ) : ?>
					
						<?php $get_terms_args = array(
							'taxonomy' => 'coach_cat',
//              'post__in'          => $yterms,
//              'post_type'  => 'coach', // Post type category BLOG

//							'hide_empty' => 0,
//							'include' => $filter_by,
						); ?>
						<?php $terms = get_terms( $get_terms_args ); ?>             
             
             <ul class="coach-filter-list">
						
						<?php if ( $terms ) : ?>
						
							<?php foreach ( $terms as $term ) : ?>
							
							         <li class="coach-filter-item"><a href="?cat=<?php echo esc_html( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?>  <span>(<?php echo esc_html( $term->count ); ?>)</span></a></li>
							
							<?php endforeach; ?>
							
						<?php endif; ?>
						
              </ul>
              
					<?php // endif; ?>
 
              
            </div>
            <div class="find-your-coach__track"></div>
          </div>
          <div class="find-your-coach__content">
            <div class="find-your-coach__setings">
              <div class="find-your-coach__search">
              
          <form  action="<?php echo add_query_arg( array( 'search' => $_GET['search'] ), $urlall ); ?>">
                <input  type="text" name="search" placeholder="Search" value="<?php echo $_GET['search']; ?>">
               
                </form>
              </div>
              <div class="find-your-coach__mob-filter">Filter by</div>
              <ul class="find-your-coach__grid-map-switch">
                <li class="find-your-coach__switch-item active" data-number='1'>
                  <svg width="26" height="26" viewbox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.8333 15.1667H3.25V22.75H10.8333V15.1667Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.8333 3.25H3.25V10.8333H10.8333V3.25Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.1667 4.33331H22.75" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.1667 9.75H22.75" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.1667 16.25H22.75" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.1667 21.6667H22.75" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </li>
                <li class="find-your-coach__switch-item"  data-number='2'>
                  <svg width="26" height="26" viewbox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5712 0.369878C13.6308 -0.118035 12.3566 -0.125557 11.4088 0.361103C7.77546 2.22648 4.48 4.36528 1.59215 6.73751C1.14557 7.10435 0.828644 7.63742 0.834053 8.26487C0.839433 8.88975 1.1628 9.41569 1.60668 9.77654C4.47054 12.1043 7.76872 14.2452 11.3355 16.0957C12.2759 16.5837 13.5501 16.5912 14.498 16.1045C18.1312 14.2392 21.4267 12.1003 24.3146 9.72806C24.7612 9.36125 25.0782 8.82818 25.0727 8.20072C25.0672 7.57585 24.744 7.04989 24.3001 6.6891C21.4361 4.36122 18.138 2.22049 14.5712 0.369878ZM12.3733 2.21758C12.709 2.04517 13.2606 2.0468 13.5988 2.22221C17.0027 3.98838 20.1392 6.0203 22.8565 8.21501C20.1231 10.445 16.9958 12.4704 13.5336 14.248C13.1977 14.4204 12.6461 14.4187 12.308 14.2434C8.90396 12.4772 5.76748 10.4453 3.05022 8.25059C5.78371 6.02055 8.91086 3.99519 12.3733 2.21758Z" fill="#424F44"></path>
                    <path d="M25.8403 13.3779C26.1478 13.8673 25.9978 14.5118 25.5055 14.8174L16.948 20.1286C15.7868 20.8494 14.3461 21.1826 12.9533 21.1826C11.5606 21.1827 10.1198 20.8496 8.95841 20.1291L0.494652 14.878C0.00226715 14.5725 -0.147774 13.928 0.159525 13.4385C0.466809 12.949 1.11508 12.7998 1.60745 13.1053L10.0712 18.3565C10.8337 18.8296 11.8695 19.0933 12.9532 19.0931C14.037 19.0931 15.0726 18.8293 15.8349 18.3562L24.3925 13.045C24.8847 12.7394 25.5331 12.8884 25.8403 13.3779Z" fill="#424F44"></path>
                    <path d="M25.8403 18.6067C26.1478 19.0962 25.9978 19.7406 25.5056 20.0462L18.0947 24.647C16.6128 25.5671 14.759 25.9998 12.9533 26C11.1476 26.0001 9.29363 25.5675 7.81146 24.6477L0.494536 20.1068C0.00219328 19.8013 -0.147764 19.1568 0.159591 18.6674C0.466932 18.1779 1.11522 18.0289 1.60756 18.3344L8.92447 22.8752C10.0076 23.5474 11.4564 23.9107 12.9532 23.9105C14.4499 23.9104 15.8985 23.5471 16.9815 22.8747L24.3923 18.274C24.8846 17.9684 25.5329 18.1173 25.8403 18.6067Z" fill="#424F44"></path>
                  </svg>
                </li>
              </ul>
            </div>

            <div class="find-your-coach__list">


        <?php  // $terms = get_sub_field('member_team');  ?>
     <?php
              
       if ( !$_GET['cat'] == '' ) {
         
         $args = array(

  //             'order' => 'ASC', // order filter  last post DESC ASC
  //            'post_type'  => 'coach', // Post type category BLOG
  //
  //            's'     => $_GET['search'],
  //            'post_status' => 'publish',
  //            'orderby'     => 'date', 

  //         -----------

              'order' => 'ASC', // order filter  last post DESC ASC
              'post_type'  => 'coach', // Post type category BLOG

              'post_status' => 'publish',
              'orderby'     => 'date', 

              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'extend_where' => "(post_title like '%". $_GET['search'] ."%')",
           
//             'taxonomy'  =>  $_GET['cat'],
           
//              'tax_query' => array(
//                  array(
//                      'taxonomy' => 'coach',   // taxonomy name
////                      'field' => $_GET['cat'],          // term_id, slug or name
//                      'terms' => $_GET['cat'],                 // term id, term slug or term name
//                  )
//              ),
           
                'tax_query'             => array(
                    array(
                      
//                      'key' => 'coach_cat', 'value' => $_GET['cat'], 'compare' => 'LIKE',
                        'taxonomy'      => 'coach_cat',
                        'field' => 'slug',
                        'terms'    =>  $_GET['cat'],
                        'operator'      => 'IN'
                    )
                ),  
           
           
           
//                'tax_query' => array(
//                    array(
//                      
////                      'key' => 'coach_cat', 'value' => $_GET['cat'], 'compare' => 'LIKE',
//                        'taxonomy'      => 'coach',
////                        'field' => 'name',
//                        'terms'    =>  $_GET['cat'],
////                        'operator'      => 'IN'
//                    )
//                ),   

          );
                
        }else{
              
           $args = array(

    //             'order' => 'ASC', // order filter  last post DESC ASC
    //            'post_type'  => 'coach', // Post type category BLOG
    //
    //            's'     => $_GET['search'],
    //            'post_status' => 'publish',
    //            'orderby'     => 'date', 

    //         -----------

                'order' => 'ASC', // order filter  last post DESC ASC
                'post_type'  => 'coach', // Post type category BLOG

                'post_status' => 'publish',
                'orderby'     => 'date', 

                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
                'extend_where' => "(post_title like '%". $_GET['search'] ."%')",

            );
                
        }
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {

               $the_query->the_post(); ?>

              <div class="find-your-coach__card">
                <div class="find-your-coach__card-top">
                  <div class="img">

                <?php if(get_the_post_thumbnail_url()){ ?>

              <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'team' ); ?>" alt=''>

            <?php }else{ ?>


               <?php }  ?>



                  </div>
                  <div class="find-your-coach__card-info">
                    <div class="find-your-coach__card-name"><?php the_title(); ?></div>
                   
                        <?php if( get_field('tag_coach_location', get_the_ID())): ?><!-- if under__the -->
                          <div class="find-your-coach__card-address"><?php the_field('tag_coach_location', get_the_ID()); ?></div>
                        <?php endif; ?>
   
                  </div>
                </div>
                <div class="find-your-coach__card-links">
                   
                   

                <?php if( get_field('tag_coach_instagram_link', get_the_ID())): ?><!-- if under__the -->
                  <a class="find-your-coach__instagram" href="<?php the_field('tag_coach_instagram_link', get_the_ID()); ?>"></a>
                <?php endif; ?>


                <?php if( get_field('tag_coach_facebook_link', get_the_ID())): ?><!-- if under__the -->
                  <a class="find-your-coach__facebook" href="<?php the_field('tag_coach_facebook_link', get_the_ID()); ?>"></a>
                <?php endif; ?>



                <?php if( get_field('tag_coach_email', get_the_ID())): ?><!-- if under__the -->
                  <a class="find-your-coach__email" href="mailto:<?php the_field('tag_coach_email', get_the_ID()); ?>"><?php the_field('tag_coach_email', get_the_ID()); ?></a>
                <?php endif; ?>
                   

                </div>
              </div>

          <?php  }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    
    <?php // elseif( get_row_layout() == 'section_2' ): ?>
    
    
    
    
    
    <script>


var MY_MAPTYPE_ID = 'custom_style';




  var mapOptions = {
      zoom: 3.5,
    center: new google.maps.LatLng(47.8548177, -3.150655),
    
    
    mapTypeControl: false,
    scrollwheel: false,
    zoomControl: true,
    mapTypeId: MY_MAPTYPE_ID,
    


  scaleControl: false,
  streetViewControl: false,
  rotateControl: false,
  fullscreenControl: false,
    
    
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);



    // Specify features and elements to define styles.
  var featureOpts = [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f1efe8"
            },
            {
                "lightness": 17
            }
        ]
    }
];


//  const iconBase = "https://developers.google.com/maps/documentation/javascript/examples/full/images/";






  const icons = {
    
     <?php  if ( !$_GET['cat'] == '' ) {
         
         $args = array(

              'order' => 'ASC', // order filter  last post DESC ASC
              'post_type'  => 'coach', // Post type category BLOG

              'post_status' => 'publish',
              'orderby'     => 'date', 

              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'extend_where' => "(post_title like '%". $_GET['search'] ."%')",

                'tax_query'             => array(
                    array(
                      
//                      'key' => 'coach_cat', 'value' => $_GET['cat'], 'compare' => 'LIKE',
                        'taxonomy'      => 'coach_cat',
                        'field' => 'slug',
                        'terms'    =>  $_GET['cat'],
                        'operator'      => 'IN'
                    )
                ),  

          );
                
        }else{
              
           $args = array(

                'order' => 'ASC', // order filter  last post DESC ASC
                'post_type'  => 'coach', // Post type category BLOG

                'post_status' => 'publish',
                'orderby'     => 'date', 

                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
                'extend_where' => "(post_title like '%". $_GET['search'] ."%')",
            );    
        }
        // The Query
        $the_query = new WP_Query( $args );
    
    
    $numb = 1;

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {

               $the_query->the_post(); ?>
    
                    icon_<?php echo $numb++; ?>: {
                      icon: "<?php echo get_template_directory_uri(); ?>/img/mark_map.png",
                    },

          <?php  }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>
    
    
  };

  const features = [


     <?php  if ( !$_GET['cat'] == '' ) {
         
         $args = array(

              'order' => 'ASC', // order filter  last post DESC ASC
              'post_type'  => 'coach', // Post type category BLOG

              'post_status' => 'publish',
              'orderby'     => 'date', 

              'update_post_meta_cache' => false,
              'update_post_term_cache' => false,
              'extend_where' => "(post_title like '%". $_GET['search'] ."%')",

                'tax_query'             => array(
                    array(
                      
//                      'key' => 'coach_cat', 'value' => $_GET['cat'], 'compare' => 'LIKE',
                        'taxonomy'      => 'coach_cat',
                        'field' => 'slug',
                        'terms'    =>  $_GET['cat'],
                        'operator'      => 'IN'
                    )
                ),  

          );
                
        }else{
              
           $args = array(

                'order' => 'ASC', // order filter  last post DESC ASC
                'post_type'  => 'coach', // Post type category BLOG

                'post_status' => 'publish',
                'orderby'     => 'date', 

                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
                'extend_where' => "(post_title like '%". $_GET['search'] ."%')",
            );    
        }
        // The Query
        $the_query = new WP_Query( $args );

    $rnumb = 1;
        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {

               $the_query->the_post(); ?>

                {
                  position: new google.maps.LatLng(<?php echo get_field('lat', get_the_ID()); ?>, <?php echo get_field('lng', get_the_ID()); ?>),
                  type: "icon_<?php echo $rnumb++; ?>",
              
                },

          <?php  }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>

  ];

  // Create markers.
  for (let i = 0; i < features.length; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icons[features[i].type].icon,
      map: map,
    });
  };

  var customMapType = new google.maps.StyledMapType(featureOpts);

  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
  

</script>
    
    

    <?php endif;
    endwhile;
endif; ?>
