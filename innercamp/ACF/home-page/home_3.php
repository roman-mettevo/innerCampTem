
<section class="home__3">
  <div class="splide" id="info__brand">
    <div class="splide__track">
      <ul class="splide__list">
       

    <?php if( have_rows('home_3_slider') ): ?>

        <?php while( have_rows('home_3_slider') ): the_row();   ?>
            
            <li class="splide__slide">
              <div class="box__con">
               
              <?php if( get_sub_field('hero_3_slide_title')): ?><!-- if under__the -->
               <h3 class="sub"> <?php the_sub_field('hero_3_slide_title'); ?></h3>
              <?php endif; ?>
              
              <?php if( get_sub_field('home_3_slide_text')): ?><!-- if under__the -->
               <h3 class="sub"> <?php the_sub_field('home_3_slide_text'); ?></h3>
              <?php endif; ?>

                <ul class="list_img">

                      
    <?php if( have_rows('home_3_images_list') ): ?>

        <?php while( have_rows('home_3_images_list') ): the_row();   ?>
                       
                           <?php $image = get_sub_field('home_3_image_item'); ?>

    <?php if( !empty( $image ) ): ?>
       <li><img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></li>
    <?php endif; ?>        
       
                <?php endwhile; ?>

      <?php endif; ?>
                 
                  
                </ul>
                
              <?php if( get_sub_field('home_3_text_after_img')): ?><!-- if under__the -->
               <h3 class="sub"> <?php the_sub_field('home_3_text_after_img'); ?></h3>
              <?php endif; ?>

              </div>
            </li>

          <?php endwhile; ?>

      <?php endif; ?>
      </ul>
    </div>
  </div>
</section>