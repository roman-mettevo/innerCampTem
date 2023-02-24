<!-- Block 2 -->

<section class="reviews__2">
  <div class="container">
    <div class="row about-trainings-row">
      <div class="col m12 s12 l12 xl12">
        <div class="review-header-wrapper">
          <div class="review-header">
          
    <?php if( have_rows('testimonial_2_top_slider') ): ?>

        <?php while( have_rows('testimonial_2_top_slider') ): the_row();
            // vars  ?>
            
       <?php if( get_sub_field('top_slider_testimonial_2_sup_title')): ?><!-- if under__the -->
    <p class="sub"><?php the_sub_field('top_slider_testimonial_2_sup_title'); ?></p>
  <?php endif; ?>       
            
            
             <?php if( get_sub_field('top_slider_testimonial_2_title')): ?><!-- if under__the -->
              <h2 class="title"><?php the_sub_field('top_slider_testimonial_2_title'); ?></h2>
            <?php endif; ?>

            

          <?php endwhile; ?>

      <?php endif; ?>
          

          </div>
          <div class="arrows"><a class="left_a previous-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
              </svg></a><a class="right_a next-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
              </svg></a></div>
        </div>
        
        
          
    <?php if( have_rows('testimonial_2_top_slider') ): ?>

        <?php while( have_rows('testimonial_2_top_slider') ): the_row();
            // vars  ?>
        
        <div class="splide-wrapper">
          <div class="splide about-training-slider" id="about-training-slider">
            <div class="splide__track">
              <div class="splide__list">

               
    <?php if( have_rows('top_slider_testimonial_2_list') ): ?>

        <?php while( have_rows('top_slider_testimonial_2_list') ): the_row();
            // vars  ?>
            
                <div class="splide__slide text-rewiev-splide">
                 
  <?php if( get_sub_field('top_slidet_testimonial2_text_item')): ?><!-- if under__the -->
       <p class="review-text">
    <?php the_sub_field('top_slidet_testimonial2_text_item'); ?>
       </p>
  <?php endif; ?>

                  <div class="author-review">
                   
    <?php $image = get_sub_field('top_slider_testimonial_2_photo'); ?>

    <?php if( !empty( $image ) ): ?>
       <div class="img"><img  src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></div>
    <?php endif; ?>    
                   
                   
                   
                   
                    <div class="about-author">
                     
  <?php if( get_sub_field('top_slider_testimonial_2_name')): ?><!-- if under__the -->
    <div class="author-name"><?php the_sub_field('top_slider_testimonial_2_name'); ?></div>
  <?php endif; ?>
                     
                     
    <?php $link = get_sub_field('top_slider_testimonial_2_tag'); ?>
 
    <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

     <span class="author-mark"><?php echo esc_html( $link_title ); ?></span>
    <?php endif; ?>  
                     
                      
                      
                    </div>
                  </div>
                </div>

          <?php endwhile; ?>

      <?php endif; ?>
               
               

                
                
                
              </div>
            </div>
          </div>
          <div class="see-more-wrapper">
            <button class="see-more-button" type="button">See more</button>
          </div>
        </div>
        

          <?php endwhile; ?>

      <?php endif; ?>
        
      </div>
    </div>
    
    
    <div class="row about-retreats-row">
      <div class="col m12 s12 l12 xl12">
        <div class="review-header-wrapper">
          <div class="review-header">
           

             <?php if( have_rows('testimonial_2_bottom_slider') ): ?>

                  <?php while( have_rows('testimonial_2_bottom_slider') ): the_row();
                      // vars ?>

            <?php if( get_sub_field('bottom_slider_testimonial_2_sup_title')): ?><!-- if under__the -->
                      <p class="sub"><?php the_sub_field('bottom_slider_testimonial_2_sup_title'); ?></p>
            <?php endif; ?>

             <?php if( get_sub_field('bottom_slider_testimonial_2_title')): ?><!-- if under__the -->
              <h2 class="title"><?php the_sub_field('bottom_slider_testimonial_2_title'); ?></h2>
            <?php endif; ?>


                    <?php endwhile; ?>

                <?php endif; ?>
         
   
          </div>
          <div class="arrows"><a class="left_a previous-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
              </svg></a><a class="right_a next-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
              </svg></a></div>
        </div>
        <div class="splide-wrapper">
         
         
   <?php if( have_rows('testimonial_2_bottom_slider') ): ?>

        <?php while( have_rows('testimonial_2_bottom_slider') ): the_row();
            // vars ?>
            
            

         
         
         
          <div class="splide about-retreats-slider" id="about-retreats-slider">
            <div class="splide__track">
              <div class="splide__list">
               
     <?php if( have_rows('bottom_slider_testimonial_2_list') ): ?>

        <?php while( have_rows('bottom_slider_testimonial_2_list') ): the_row();
            // vars ?>
            
                <div class="splide__slide text-rewiev-splide">
 
  <?php if( get_sub_field('bottom_slidet_testimonial2_text_item')): ?><!-- if under__the -->
   <p class="review-text"><?php the_sub_field('bottom_slidet_testimonial2_text_item'); ?></p>
  <?php endif; ?>
                  
                  <div class="author-review">
                   
    <?php $image = get_sub_field('bottom_slider_testimonial_2_photo'); ?>

    <?php if( !empty( $image ) ): ?>
        <div class="img"><img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></div>
    <?php endif; ?>     
                   
                 
                    <div class="about-author">

  <?php if( get_sub_field('bottom_slider_testimonial_2_name')): ?><!-- if under__the -->
    <div class="author-name"><?php the_sub_field('bottom_slider_testimonial_2_name'); ?></div>
  <?php endif; ?>
  
    <?php $link = get_sub_field('bottom_slider_testimonial_2_tag'); ?>
 
    <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <span class="author-mark"><?php echo esc_html( $link_title ); ?></span>
    <?php endif; ?>
                      
                    </div>
                  </div>
                </div>


          <?php endwhile; ?>

      <?php endif; ?>
               

                
              </div>
            </div>
          </div>
          

          <?php endwhile; ?>

      <?php endif; ?>  
          
          <div class="see-more-wrapper">
            <button class="see-more-button" type="button">See more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
