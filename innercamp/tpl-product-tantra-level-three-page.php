<?php
/**
 * Template Name: -- PRODUCT --  2.5 Tantra Level Three Page* 
 * Template Post Type: product, page, post
 */
get_header(); ?>

<!--R-->

<?php $product = wc_get_product( $post->ID ); // Works for any product type ?>
             
             
    <?php // check if the flexible content field has rows of data
    if( have_rows('product_tantra_level_three') ):
         // loop through the rows of data
        while ( have_rows('product_tantra_level_three') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
 
<section class="tantra3__1" data-menuscroll  <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
  <div class="container">
    <div class="row">

     
   <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
    <div class="sub"><?php the_sub_field('sub_text'); ?></div> 
  <?php endif; ?>
      
 <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h1 class="title"><?php the_sub_field('title'); ?></h1>
  <?php endif; ?>
     
     
      <div class="box__content">

           
           
      <?php if( have_rows('box_list') ): ?>
        <div class="row-links">
            <?php while( have_rows('box_list') ): the_row();
                // vars  ?>

               <p class="<?php if(get_row_index() == '1'){ ?>breathwork 
                <?php } else if(get_row_index() == '2'){ ?> level
                <?php } else if(get_row_index() == '3'){ ?> date 
                <?php } else if(get_row_index() == '4'){ ?> status
                <?php } ?>"><?php the_sub_field('title'); ?></p>


              <?php endwhile; ?>
         </div>
      <?php endif; ?>


       <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
          <p class="bundle-apply"><?php the_sub_field('paragraph'); ?></p>
        <?php endif; ?>

            
            
      </div>
      

          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Apply now</a>
                
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>
          

      
    </div>
  </div>
</section>

  
   
          <?php endif;
          endwhile;
      endif; ?>
    
    
    <div class="left__menu__scroll">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl3">
            <div class="box__">
             
           <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Book now</a>
                
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>

              <ul>
                <li class="active"><a href="javascript:;">Course basics</a></li>
                <li><a href="javascript:;">Accreditations</a></li>
                <li><a href="javascript:;">Benefits</a></li>
                <li><a href="javascript:;">About the course</a></li>
                <li><a href="javascript:;">The Program</a></li>
                <li><a href="javascript:;">Facilitators</a></li>
                <li><a href="javascript:;">Certification</a></li>
                <li><a href="javascript:;">Optional retreat</a></li>
                <li><a href="javascript:;">Live sessions</a></li>
                <li><a href="javascript:;">Book a free call</a></li>
                <li><a href="javascript:;">Testimonials</a></li>
                <li><a href="javascript:;">Why we are loved</a></li>
                <li><a href="javascript:;">Book now</a></li>
                <li><a href="javascript:;">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
<section class="tantra3__2">     
     
    <?php // check if the flexible content field has rows of data
    if( have_rows('product_tantra_level_three') ):
         // loop through the rows of data
        while ( have_rows('product_tantra_level_three') ) : the_row(); ?>
        
        <?php if( get_row_layout() == 'section_2' ): ?>

  <div class="tantra3__2-1">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="course-basics" id="course-basics">
            <div class="top-content">
              <div class="basics-img">
              
    <?php $image = get_sub_field('image'); ?>

    <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>        

               
              <?php if( get_sub_field('label_under_image')): ?><!-- if under__the -->
                  <div class="level"><?php the_sub_field('label_under_image'); ?></div>
            <?php endif; ?>
            
                
              </div>
              <div class="basics-content">
                <div class="top-row">
                  <div class="training-price"><span>Price: </span><span><?= $product->get_price_html(); ?></span></div>
                  
                   <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                      <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                      <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                      <input type="hidden" name="action" value="addcart_prod">
                        <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Start my journey</a>
                      <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                  </form>

                </div>
                
                <div class="bottom-row">
  
               
  <?php if( get_sub_field('up_to_8_months')): ?><!-- if under__the -->
   <div class="date"><?php the_sub_field('up_to_8_months'); ?></div>
  <?php endif; ?>               
  <?php if( get_sub_field('video')): ?><!-- if under__the -->
   <div class="video-qty"><?php the_sub_field('video'); ?></div>
  <?php endif; ?>               
  <?php if( get_sub_field('clock')): ?><!-- if under__the -->
   <div class="clock"><?php the_sub_field('clock'); ?></div>
  <?php endif; ?>               
  <?php if( get_sub_field('status')): ?><!-- if under__the -->
   <div class="status online"><?php the_sub_field('status'); ?></div>
  <?php endif; ?>
 
                </div>
                
              </div>
            </div>
            <div class="bottom-content">

               <?php if( get_sub_field('footer_text')): ?><!-- if under__the -->
                  <div class="bottom-content-descriptions">
                    <p><?php the_sub_field('footer_text'); ?></p>
                  </div>
              <?php endif; ?>

            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  
        <?php elseif( get_row_layout() == 'section_3' ): ?>
  
  <div class="tantra3__2-2">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="accreditations" id="accreditations">
            <div class="accreditations-content">
            
      <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
    <h3 class="sub"><?php the_sub_field('sub_text'); ?></h3>
  <?php endif; ?>

              
        <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
              
            
            </div> 

                <?php $ima_img_goq = get_sub_field('logo_1'); ?>
                <?php $ima_img_gow = get_sub_field('logo_2'); ?>
                <?php $ima_img_goe = get_sub_field('logo_3'); ?>


            <ul class="list_img">
            
           <?php if( !empty( $ima_img_goq ) ): ?>
        <li><img src="<?php echo esc_url($ima_img_goq['url']); ?>"  alt="<?php echo esc_attr($ima_img_goq['alt']); ?>"></li>
    <?php endif; ?>     
                 <?php if( !empty( $ima_img_gow ) ): ?>
       <li> <img src="<?php echo esc_url($ima_img_gow['url']); ?>"  alt="<?php echo esc_attr($ima_img_gow['alt']); ?>"></li>
    <?php endif; ?>     
                 <?php if( !empty( $ima_img_goe ) ): ?>
        <li><img src="<?php echo esc_url($ima_img_goe['url']); ?>"  alt="<?php echo esc_attr($ima_img_goe['alt']); ?>"></li>
    <?php endif; ?>     

            </ul>
          </article>
        </div>
      </div>
    </div>
  </div>
  
        <?php elseif( get_row_layout() == 'section_4' ): ?>
  
  <div class="tantra3__2-3">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="tantra3-about" id="about-course">
            <div class="about-img">
             
    <?php $image = get_sub_field('images'); ?>

    <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>   
   
            </div>
            <div class="about-wrap">
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
  
  <?php if( get_sub_field('quote')): ?><!-- if under__the -->
              <div class="about-content">
                <p><?php the_sub_field('quote'); ?></p>
              </div>
  <?php endif; ?> 
              
              

              
  <?php if( get_sub_field('text_after_quote')): ?><!-- if under__the -->
    <p><?php the_sub_field('text_after_quote'); ?></p>
  <?php endif; ?>
              
              
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  
      <?php elseif( get_row_layout() == 'section_5' ): ?>
  
  <div class="tantra3__2-4">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="levels-roadmap">
           
    <?php $image_ke = get_sub_field('images'); ?> 

    <?php if( !empty( $image_ke ) ): ?> 
        <img src="<?php echo esc_url($image_ke['url']); ?>"  alt="<?php echo esc_attr($image_ke['alt']); ?>">
    <?php endif; ?>   
          
            
  <?php if( get_sub_field('text_box_1')): ?><!-- if under__the -->
    <div class="level-button first-level"><?php the_sub_field('text_box_1'); ?></div>
  <?php endif; ?>          
            
  <?php if( get_sub_field('text_box_2')): ?><!-- if under__the -->
    <div class="level-button second-level"><?php the_sub_field('text_box_2'); ?></div>
  <?php endif; ?>          
            
  <?php if( get_sub_field('text_box_3')): ?><!-- if under__the -->
    <div class="level-button last-level"><?php the_sub_field('text_box_3'); ?></div>
  <?php endif; ?>
 
          </div>
        </div>
      </div>
    </div>
  </div>
  
      <?php elseif( get_row_layout() == 'section_6' ): ?>
  
  <div class="tantra3__2-5">
    <div class="container" style="background: url('<?= get_template_directory_uri(); ?>/img/tantra/tantra3-global.svg') no-repeat top -80px center">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="access-map">
            <div class="access-map-img">
    <?php $image = get_sub_field('images'); ?>

    <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>        

            </div>
            <div class="access-map-content">
             
             
             
  <?php if( get_sub_field('text_block_1')): ?><!-- if under__the -->
       <div class="top-content">
    <?php the_sub_field('text_block_1'); ?>
               </div>
  <?php endif; ?>
  
  
    <?php if( have_rows('box_list') ): ?>
              <div class="bottom-content">
                <ul>
        <?php while( have_rows('box_list') ): the_row();
            // vars
            $image = get_sub_field('imag');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
                  <li>   <?php the_sub_field('text'); ?></li><!-- if under__the -->

          <?php endwhile; ?>
                </ul>
              </div>
      <?php endif; ?>
 

              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
      <?php elseif( get_row_layout() == 'section_7' ): ?>
  
  <div class="tantra3__2-6">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="program" id="program">
            <div class="top-program-row">
            
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>   

              
              <div class="coaches-img-list">
  <?php if( get_sub_field('faciliated_label')): ?><!-- if under__the -->
    <span><?php the_sub_field('faciliated_label'); ?></span>
  <?php endif; ?>   
               
               
<?php
$featured_posts = get_sub_field('faciliated_imgs');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <li>
        <?php if(get_the_post_thumbnail_url()){ ?>  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="user_<?php echo get_row_index(); ?>"> <?php } ?>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
               

              </div>
            </div>
            <div class="tabs-row">
         
             
    <?php if( have_rows('tabs_nav') ): ?>
              <div class="tabs-list">
        <?php while( have_rows('tabs_nav') ): the_row();
            // vars  ?>
            
         <button class="tab-item <?php if(get_row_index() == '1'){ echo 'active'; } ?>"><?php echo get_sub_field('tab_name'); ?></button>

          <?php endwhile; ?>
              </div>
      <?php endif; ?>
    
              <div class="event-date">
               
                 <?php if( get_sub_field('clock')): ?><!-- if under__the -->
    <div class="clock"><?php the_sub_field('clock'); ?></div>
  <?php endif; ?>

                
    <?php if( have_rows('calendar') ): ?>

        <?php while( have_rows('calendar') ): the_row();
            // vars  ?>
  
             <div class="date"><?php the_sub_field('to_data'); ?> - <?php the_sub_field('do_data'); ?></div>

          <?php endwhile; ?>

      <?php endif; ?>
                
              </div>
            </div>
            <div class="program-content-wrap">
             
             
              <div class="program-content active">
                <ul class="program-list">
                 
    <?php if( have_rows('tabs_content') ): ?>

        <?php while( have_rows('tabs_content') ): the_row();
            // vars  ?>
            
                  <li class="program-item">

                   
   <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h4 class="item-title"><?php the_sub_field('title'); ?></h4>
  <?php endif; ?> 
   
   <?php if( get_sub_field('hours_quantity')): ?><!-- if under__the -->
    <span class="item-time"><?php the_sub_field('hours_quantity'); ?></span>
  <?php endif; ?>             

                     
                     
                      <?php if( get_sub_field('main_text')): ?><!-- if under__the -->
    <?php the_sub_field('main_text'); ?>
  <?php endif; ?>

                  </li>

          <?php endwhile; ?>

      <?php endif; ?>
    
                </ul>
              </div>
              
              
            </div>
          </article>
          
       <?php endif;
          endwhile;
      endif; ?>
          
          
    <?php // check if the flexible content field has rows of data
    if( have_rows('product_tantra_level_three') ):
         // loop through the rows of data
        while ( have_rows('product_tantra_level_three') ) : the_row(); ?>
          
            <?php if( get_row_layout() == 'section_8' ): ?>
          
          <article class="facilitators" id="facilitators">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9">
                  
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
                  
                </div>
                <div class="col m12 s12 l3 xl3 facilitator-arrow-nav">
                  <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                      <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                      </svg></a><a class="right_a next-button" href="javascript:;">
                      <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="facilitators-slider">
     
             
                  
 <?php
$featured_posts = get_sub_field('team');
if( $featured_posts ): ?>
            <div class="splide" id="facilitator-slider" aria-roledescription="carousel">
                <div class="splide__track">
                  <ul class="splide__list">
    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo">
                         
               <?php if(get_the_post_thumbnail_url( )){ ?>
           
              <img src="<?= get_the_post_thumbnail_url( ); ?>" alt='user_<?php  echo get_row_index(); ?>'>

            <?php } ?>
                        
                          
                        
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name"><?php the_title(); ?></h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <?php $rtitlett = get_the_content();
                            
                            $tmt = substr($rtitlett, 0, 565 );
                            echo $tmt; ?>
                          </div>
                        </div>
                      </div>
                    </li>

    <?php endforeach; ?>
             </ul>
                </div>
              </div>
              
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
                                    

                    
                    
                    <?php if(0){ ?>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp" alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that power into their lives and the world. Alexis&rsquo; work revolves around people coaching in different spheres of life. He has worked with different companies across Europe, Africa and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp" alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that power into their lives and the world. Alexis&rsquo; work revolves around people coaching in different spheres of life. He has worked with different companies across Europe, Africa and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp" alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that power into their lives and the world. Alexis&rsquo; work revolves around people coaching in different spheres of life. He has worked with different companies across Europe, Africa and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp" alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that power into their lives and the world. Alexis&rsquo; work revolves around people coaching in different spheres of life. He has worked with different companies across Europe, Africa and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp" alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that power into their lives and the world. Alexis&rsquo; work revolves around people coaching in different spheres of life. He has worked with different companies across Europe, Africa and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
     
            </div>
          </article>
      
           <?php elseif( get_row_layout() == 'section_9' ): ?>

          <article class="certificate" id="certificate">
            <div class="certificate-photo">
            
    <?php $image = get_sub_field('image'); ?>

    <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>    
            
              
            
            
            </div>
            <div class="certificate-content">
             
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <?php the_sub_field('title'); ?>
  <?php endif; ?>

              
              <div class="requirements-list">

  <?php if( get_sub_field('list_title')): ?><!-- if under__the -->
    <p><?php the_sub_field('list_title'); ?></p>
  <?php endif; ?>

                
    <?php if( have_rows('list') ): ?>
               <ul>
        <?php while( have_rows('list') ): the_row();
            // vars  ?>
            
               <li> <?php the_sub_field('list_item'); ?></li>
               
               
          <?php endwhile; ?>
                </ul>
      <?php endif; ?>

                
             
           <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Apply now</a>
                
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>
                
                
              </div>
              <div class="hint">
               
               
  <?php if( get_sub_field('after_text')): ?><!-- if under__the -->
   <p> <?php the_sub_field('after_text'); ?></p>
  <?php endif; ?>

              </div>
            </div>
          </article>
          
           <?php elseif( get_row_layout() == 'section_10' ): ?>
          
          
          <div class="session-wrap">
   
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"> <?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
           
           
           
           
            
            <article class="session" id="session">
              <div class="top-row">
                <div class="session-content-wrap">
                  <div class="session-schedule">
                  
                  
                  

      <!-- if under__the -->
<!--      <div class="clock">6:00 pm — 8:00 pm CET</div>-->
      <div class="clock">  <?php if( get_sub_field('data_time__to')): ?><!-- if under__the -->
      <?php the_sub_field('data_time__to'); ?>
      <?php endif; ?> — <?php if( get_sub_field('data_time__do')): ?><!-- if under__the -->
      <?php the_sub_field('data_time__do'); ?>
      <?php endif; ?></div>
      <!-- if under__the -->
      <span>*<?php if( get_sub_field('timezone')): ?><!-- if under__the -->
      <?php the_sub_field('timezone'); ?>
      <?php endif; ?></span>
      <!-- if under__the -->
      <div class="calen"><?php if( get_sub_field('calendar_day')): ?><!-- if under__the -->
      <?php the_sub_field('calendar_day'); ?>
      <?php endif; ?></div>
      <!-- if under__the -->
      <span class="schedule-date"><?php if( get_sub_field('data_day')): ?><!-- if under__the -->
      <?php the_sub_field('data_day'); ?>
      <?php endif; ?></span>


      
      
      <?php //   date_default_timezone_set('UTC+1:00'); ?>
  <?php // echo $date = new DateTimeZone('Europe/Paris'); ?>
                   <?php // echo date('l jS \of F Y h:i:s A'); 
//date_default_timezone_set('Europe/Paris');
//echo date_default_timezone_get() . ' => ' . date('l jS \of F Y h:i:s A') . ' => ' . date('T');
                    
                    
//                     date('l jS \of F Y h:i:s A') . ' => ' . date('T');
                    
                 $date = new DateTime();
                    
                    echo '<br>';
                    
                    echo date('h:i A', $date->format('U')); 
                    
                    echo '<br>';
                    
                    echo "The current timezone is <b>" . date_default_timezone_get() . "</b><br/>";
                    
                    ?>
                    
                    <a class="bundle-check" href="#">Check my local time here</a>
                  </div>
                  
               

                  
    <?php if( have_rows('check_list') ): ?>
        <ul class="session-benefit">
          <?php while( have_rows('check_list') ): the_row();
            // vars  ?>
            
              <li><?php the_sub_field('list_text'); ?></li>

          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
               
                  
                  
                  
                </div>
                <div class="session-img"><img src="<?= get_template_directory_uri(); ?>/img/tantra/tantra-sessions.png" alt=""><a class="bundle-download" href="#">Download the Timetable</a></div>
              </div>
              <div class="bottom-row">
                <p>We plan to launch only one course per year, live sessions are optional but each missed session will require a completion of an additional assignment.</p>
              </div>
            </article>
          </div>
          
       <?php endif;
          endwhile;
      endif; ?>
          
          
          
          
          
    <?php // check if the flexible content field has rows of data
    if( have_rows('product_tantra_level_three') ):
         // loop through the rows of data
        while ( have_rows('product_tantra_level_three') ) : the_row(); ?>
          
      <?php if( get_row_layout() == 'section_7' ): ?>
          
          
        </div>
      </div>
    </div>
  </div>
  
       <?php endif;
          endwhile;
      endif; ?>
  
  
  
    <?php // check if the flexible content field has rows of data
    if( have_rows('product_tantra_level_three') ):
         // loop through the rows of data
        while ( have_rows('product_tantra_level_three') ) : the_row(); ?>
  
  
     <?php  if( get_row_layout() == 'section_12' ): ?>
  
  
  <div class="tantra3__2-7">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="book-call" id="book-call">
            <h2 class="title">Got questions?</h2>
            <div class="subtitle">
              <p>Schedule a <strong>free</strong> consultation call with one of our experts.</p>
            </div><a class="bundle" href="#">Schedule now</a>
          </article>
        </div>
      </div>
    </div>
  </div>
  
     <?php elseif( get_row_layout() == 'section_13' ): ?>
  
  <div class="tantra3__2-8">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="level-exposition">
            <div class="exposition-top-row">
              <h2 class="title">Tantric Embodiment Teacher Training</h2><a class="bundle-request" href="#">Prerequisite: to have completed Tantra Levels 1+2</a>
            </div>
            <div class="levels-variants">
              <ul class="exposition-list">
                <li class="header-item">
                  <div class="first-item"></div>
                  <div class="level-item">
                    <h3>Level 3</h3>
                    <div class="list-description">
                      <p>Coach diploma</p>
                    </div>
                  </div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Duration</div>
                  <div class="level-item">125 hours, up to 8 months</div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">LIVE Group sessions with Master Trainers</div>
                  <div class="level-item">6 biweekly sessions</div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">High-quality curated videos, <strong>access forever</strong></div>
                  <div class="level-item">25+ videos</div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Articles</div>
                  <div class="level-item">25+ articles</div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Weekly assignments</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Personal counselling</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Access to all InnerCamp virtual workshops</div>
                  <div class="level-item">for 3 months</div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Essential and recommended reading list</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Members Hub</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Enrolment In Our Affiliate system</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Discounts to Our Events, Retreats, and New Products</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Lifetime Access to All Online Training Materials</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Access to Tantra Music Playlists</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Access to Guided Breathwork Journey Scripts</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Contracts &amp; Legal Documents to launch your Tantra business</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Monthly Mentoring calls forever</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Study Buddy meetings</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Unlimited Access To Our Private InnerCamp Community</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Diploma &amp; License to Guide InnerCamp Breathwork Sessions</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Appear on InnerCamp Facilitators Map</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
                <li class="exposition-item-row">
                  <div class="first-item">Access our Exclusive MasterMind Platform for Ongoing Business Training</div>
                  <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""></div>
                </li>
              </ul>
              <div class="prev-levels">
                <div class="top-block">
                  <h3>Level 1 + 2</h3>
                  <div class="list-description">
                    <p>Facilitator diploma (InnerCamp Tantric Embodiment Facilitator)</p>
                  </div>
                </div>
                <div class="center-block"><img src="<?= get_template_directory_uri(); ?>/img/tantra/level1.png" alt=""></div>
                <div class="bottom-block">
                  <div class="training-price"><span>Price: </span><span>2200&euro;</span></div><a class="bundle" href="#">Enroll now</a>
                  <div class="description">
                    <p>Payment plans available 4 months of 600 EUR</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="levels-mobile">
              <h3 class="title">Level 3</h3>
              <ul>
                <li>125 hours, up to 8 months</li>
                <li>6 biweekly sessions LIVE Group sessions with Master Trainers</li>
                <li>25+ videos high-quality curated videos, access forever</li>
                <li>25+ articles access forever</li>
                <li>Weekly assignments</li>
                <li>Personal counselling</li>
                <li>Access to all InnerCamp workshops for 3 months</li>
                <li>Essential and recommended reading list</li>
                <li>Members Hub</li>
                <li>Enrolment In Our Affiliate system</li>
                <li>Discounts to Our Events, Retreats, and New Products</li>
                <li>Lifetime Access to All Online Training Materials</li>
                <li>Access to Tantra Music Playlists</li>
                <li>Access to Guided Breathwork Journey Scripts</li>
                <li>Contracts &amp; Legal Documents to launch your Tantra business</li>
                <li>Monthly Mentoring calls forever</li>
                <li>Study Buddy meetings</li>
                <li>Unlimited Access To Our Private InnerCamp Community</li>
                <li>Diploma &amp; License to Guide InnerCamp Breathwork Sessions</li>
                <li>Appear on InnerCamp Facilitators Map</li>
                <li>Access our Exclusive MasterMind Platform for Ongoing Business Training</li>
              </ul>
              <div class="price-item active"><span class="price">1200&euro;</span><span class="price-type">full price</span></div><a class="bundle" href="#">Apply now</a>
            </div>
          </article>
          <article class="book-training" id="book-now">
            <h2 class="title">Book your training</h2>
            <div class="book-training-wrap">
              <div class="left-big-block"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/part-img.png" alt="">
                <div class="content-block">
                  <h3>Level 3</h3>
                  <div class="top-row">
                    <ul class="left-list">
                      <li>125 hours, up to 8 months</li>
                      <li>6 biweekly sessions</li>
                      <li>25+ videos</li>
                      <li>Weekly assignments</li>
                    </ul>
                    <ul class="right-list">
                      <li>Members Hub</li>
                      <li>Monthly Mentoring calls forever</li>
                      <li>
                        Appear on InnerCamp
                        Facilitators Map
                      </li>
                    </ul>
                  </div>
                  <div class="choose-price">
                    <div class="price-item active"><span class="price">1200&euro;</span><span class="price-type">full price</span></div>
                  </div><a class="bundle" href="#">Apply now</a>
                </div>
              </div>
              <div class="right-small-block" style="background: url('../img/breathwork-teacher/book-now.png') no-repeat top/cover;">
                <div class="top-block">
                  <h3>Join the InnerCamp Retreat</h3>
                  <div class="calen">Jun 24 - Jun 27, 2023</div>
                  <div class="add-feature">
                    <p>Upgrade your experience with a retreat</p>
                  </div>
                </div>
                <div class="upgrade">Upgrade +</div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  
      <?php elseif( get_row_layout() == 'section_14' ): ?>
  
  <div class="tantra3__2-9">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="breathwork-faq" id="faq">
            <h2 class="title">Frequently asked questions</h2>
            <div class="faq-item">
              <button class="faq-questions">How does the pricing work?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Can I have more flexibility with the payment plan?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">What happens if I cannot come to the optional retreat (as part of TTC) due to COVID-19 restrictions?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">My training program has not started yet; can I cancel and get a refund?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">My training program has started; can I cancel and get a refund?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">My training program has finished but I didn&apos;t participate; can I get a refund?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">I have booked a retreat together with the online program, until when can I use that credit?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">How does the pricing work?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">In the past, I confirmed my participation in a retreat. Can I still cancel?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">How much effort is required per week?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Should I attend all live sessions?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Who is a study buddy?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">What happens if I fail the quizzes and exams?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Will I continue to have access to the course even after I complete it?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Will I receive a certification?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Will I be able to run workshops and retreats after I am certified?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">What will you find when you join one of our programs?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">How do the live sessions work? What is the difference between the program live sessions and the InnerCamp workshops?</button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>

          <?php endif;
          endwhile;
      endif; ?>
      
      
</section>




<div class="modal-wrap">
  <div class="shadow"></div>
  <div class="modal-upgrade-block">
    <button class="upgrade-close"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/x-circle.svg" alt=""></button>
    <div class="upgrade-top-row">
      <h2 class="title">Upgrade your experience with a retreat?</h2>
      <div class="calen">June 2023</div>
    </div>
    <div class="modal-upgrade-content">
      <div class="left-side">
        <h3 class="block-title">Choose Date</h3>
        <div class="choose-calen">Jun 24, 2023 - Jun 27, 2023</div>
      </div>
      <div class="right-side">
        <h3 class="block-title">Choose Type of Accommodation</h3>
        <ul class="apartments-list">
          <li class="apartment-item">
            <ul class="img-list">
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
            </ul>
            <h3>Single room</h3>
            <div class="apartment-item-bottom-row">
              <div class="actual">Available</div>
              <div class="price">1200&euro;</div>
            </div>
          </li>
          <li class="apartment-item">
            <ul class="img-list">
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
            </ul>
            <h3>Shared double room</h3>
            <div class="apartment-item-bottom-row">
              <div class="actual">Available</div>
              <div class="price">800&euro;</div>
            </div>
          </li>
          <li class="apartment-item">
            <ul class="img-list">
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
            </ul>
            <h3>Shared glamping</h3>
            <div class="apartment-item-bottom-row">
              <div class="actual">Available</div>
              <div class="price">600&euro;</div>
            </div>
          </li>
        </ul>
        <div class="modal-bottom-row"><a class="bundle" href="#">Yes, upgrade with a Retreat</a><a class="disclaimer" href="#">No, thanks</a></div>
      </div>
    </div>
  </div>
</div>



<?php
get_footer();