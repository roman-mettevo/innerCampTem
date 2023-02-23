<?php
/**
 * Template Name: -- PRODUCT --  2.4 Onsite Breathwork(Levels 1+2) Page* 
 * Template Post Type: product, page, post
 */
get_header(); 
$product = wc_get_product( $post->ID );
?>

<?php if ( have_rows( 'onsite_breathwork_teacher_pages' ) ): ?>
	<?php while ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'section_1' ) : ?>
      <section class="breathwork-tt__1" data-menuscroll  <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
        <div class="container">
          <div class="row">
            <?php 
            if (get_sub_field('sub_text')) { ?>
              <p class="sub"><?php the_sub_field( 'sub_text' ); ?></p>
            <?php }
            if (get_sub_field('title')) { ?>
              <h1 class="title"><?php the_sub_field( 'title' ); ?></h1>
            <?php }

            if ( have_rows( 'box_list' ) ) : ?>
              <div class="box__content">
              <?php while ( have_rows( 'box_list' ) ) : the_row(); ?>
              <p class="<?php if(get_row_index() == '1'){ ?>breathwork 
                <?php } else if(get_row_index() == '2'){ ?> level
                <?php } else if(get_row_index() == '3'){ ?> location 
                <?php } else if(get_row_index() == '4'){ ?> date
                <?php } ?>"><?php the_sub_field('item_title'); ?></p>
              <?php endwhile; ?>?
              </div>
            <?php endif; ?>
            <?php 
            if(get_sub_field('content')) { ?>
              <div class="retreats__1-description">
              <?php the_sub_field( 'content' ); ?>
            </div>
            <?php } ?>          
            <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">
                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
            </form>  
          </div>
        </div>
      </section>

    <?php endif;
    endwhile;
  endif;
  ?>
      <div class="left__menu__scroll" data-scroll>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl3">
            <div class="box__">
            <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">
                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
            </form>         
              <ul>
                <?php if ( have_rows( 'onsite_breathwork_teacher_pages' ) ): 
                  while ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : the_row();
                    if( get_row_layout() == 'section_2' ){  
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif; 
                    }  elseif( get_row_layout() == 'section_3' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_4' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_5' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_7' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_8' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_9' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_10' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_14' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_15' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_16' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_17' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_19' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_20' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } ?>
                  <?php endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <section class="breathwork__2">
    <?php if ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : 
      while ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : the_row(); 
      if ( get_row_layout() == 'section_2' ) : ?>
        <div class="breathwork__2-1">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : 
                  while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <article class="course-basics scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <article class="course-basics">
                <?php endif; ?>
                  <div class="basics-img">
                    <?php $image = get_sub_field( 'image' );
                    if ( $image ) : ?>
                      <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; 
                    if(get_sub_field('label_on_image')) { ?>
                      <p class="level" href="#"> <?php the_sub_field( 'label_on_image' ); ?></p>
                    <?php } ?>
                  </div>
                  <div class="basics-content">
                    <div class="top-row">
                      <div class="training-price">
                        <span><?php echo __('Price:'); ?> </span>
                        <span><?= $product->get_price_html(); ?></span>
                      </div>
                      <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                        <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                          <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                          <input type="hidden" name="action" value="addcart_prod">
                            <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php echo __('Start my journey'); ?></a>
                            <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button> 
                      </form>
                    </div>
                    <?php if ( have_rows( 'list_of_parameters' ) ) : ?>
                      <div class="bottom-row">
                        <?php while ( have_rows( 'list_of_parameters' ) ) : the_row(); 
                          if(get_sub_field('period')) { ?>
                            <div class="date"><?php the_sub_field( 'period' ); ?></div>
                          <?php }
                          if(get_sub_field('video_quantity')) { ?>
                            <div class="video-qty"><?php the_sub_field( 'video_quantity' ); ?></div>
                          <?php }
                          if(get_sub_field('course_total_hours')) { ?>
                            <div class="clock"><?php the_sub_field( 'course_total_hours' ); ?></div>
                          <?php }
                          if(get_sub_field('status')) { ?>
                            <div class="status online"><?php the_sub_field( 'status' ); ?></div>
                          <?php } 
                        endwhile; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      <?php elseif( get_row_layout() == 'section_3' ) : ?>
        <div class="breathwork__2-2">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : 
                  while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <article class="accreditations scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <article class="accreditations">
                <?php endif; ?>
                
                  <div class="accreditations-content">
                    <?php 
                      if(get_sub_field('sub_title')) { ?>
                        <h3 class="sub"><?php the_sub_field( 'sub_title' ); ?></h3>
                      <?php } 
                      if(get_sub_field('text_top')) {
                        the_sub_field( 'text_top' );
                      }                  
                    ?>
                    <ul class="list-img-mobile">
                      <?php 
                        $logo_1 = get_sub_field( 'logo_1' ); 
                        $logo_2 = get_sub_field( 'logo_2' ); 
                        $logo_3 = get_sub_field( 'logo_3' );
                      ?>
                      <?php if ( $logo_1 ) : ?>
                        <li><img src="<?php echo esc_url( $logo_1['url'] ); ?>" alt="<?php echo esc_attr( $logo_1['alt'] ); ?>" /></li>
                      <?php endif;      
                      if ( $logo_2 ) : ?>
                        <img src="<?php echo esc_url( $logo_2['url'] ); ?>" alt="<?php echo esc_attr( $logo_2['alt'] ); ?>" />
                      <?php endif;  ?>     
                    </ul>
                    <div class="bottom-row">
                    <?php 
                    if(get_sub_field('text-bottom')) {
                      the_sub_field( 'text_bottom' );
                    }
                    
                    if ( $logo_3 ) : ?>
                      <img src="<?php echo esc_url( $logo_3['url'] ); ?>" alt="<?php echo esc_attr( $logo_3['alt'] ); ?>" />  
                    <?php endif; ?>
                    </div>
                  </div>
                  <ul class="list_img">
                    <?php if ( $logo_1 ) : ?>
                      <li><img src="<?php echo esc_url( $logo_1['url'] ); ?>" alt="<?php echo esc_attr( $logo_1['alt'] ); ?>" /></li>
                    <?php endif;     
                    if ( $logo_2 ) : ?>
                      <img src="<?php echo esc_url( $logo_2['url'] ); ?>" alt="<?php echo esc_attr( $logo_2['alt'] ); ?>" />
                    <?php endif; 
                    if ( $logo_3 ) : ?>
                      <img src="<?php echo esc_url( $logo_3['url'] ); ?>" alt="<?php echo esc_attr( $logo_3['alt'] ); ?>" />
                    <?php endif; ?>
                  </ul>
                </article>
              </div>
            </div>
          </div>
        </div>
      <?php elseif( get_row_layout() == 'section_4' ) : ?>
        <div class="breathwork__2-3">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : 
                  while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <article class="benefits scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <article class="benefits">
                <?php endif; ?>
                  <div class="benefits-content">
                    <?php 
                      if(get_sub_field('title')) { ?>
                        <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                      <?php } 

                      if ( have_rows( 'checkboxes_list' ) ) : ?>
                        <ul class="benefits-list">
                        <?php while ( have_rows( 'checkboxes_list' ) ) : the_row(); ?>
                          <li><?php the_sub_field( 'text_item' ); ?></li>
                        <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                    <div class="benefits-img">
                    <?php $images = get_sub_field( 'image' ); ?>
                      <?php if ( $images ) : ?>
                        <img src="<?php echo esc_url( $images['url'] ); ?>" alt="<?php echo esc_attr( $images['alt'] ); ?>" />
                    <?php endif; ?></div>
                  </article>
                </div>
              </div>
            </div>
        </div>
      <?php elseif( get_row_layout() == 'section_5' ) : ?>
            <div class="breathwork__2-4">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l12 xl9 offset-xl3">
                  <?php if ( have_rows( 'navigation' ) ) : 
                    while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <article class="breathwork-about scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <article class="breathwork-about">
                  <?php endif; ?>
                      <?php 
                        if(get_sub_field('title')) { ?>
                          <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                        <?php }
                      ?>
                      <div class="about-wrap">
                        <div class="about-img">
                        <?php $image = get_sub_field( 'image' ); 
                          if ( $image ) : ?>
                          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="about-content">
                          <?php
                          if(get_sub_field('text')) { ?>
                            <h3><?php the_sub_field( 'text' ); ?></h3>
                          <?php } ?>
                          <?php $download_button = get_sub_field( 'download_button' ); 
                            if ( $download_button ) : ?>
                              <a  class="bundle-download" href="<?php echo esc_url( $download_button['url'] ); ?>"><?php echo __('Download Brochure'); ?></a>
                          <?php endif; ?>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
      <?php elseif( get_row_layout() == 'section_6' ) : ?>
              <div class="breathwork__2-5">
                <div class="container">
                  <div class="row">
                    <div class="col m12 s12 l12 xl9 offset-xl3">
                      <article class="breathwork-about-program">
                        <div class="breathwork-about-program-content">
                        <?php if ( have_rows( 'levels' ) ) : ?>
                          <div class="breathwork-about-program-post">
                            <?php while ( have_rows( 'levels' ) ) : the_row(); ?>
                            <?php 
                            if(get_sub_field('level_title')) { ?>
                              <h3 class="title"><?php the_sub_field( 'level_title' ); ?></h3>
                            <?php }

                            if(get_sub_field('level_text')) {
                              the_sub_field( 'level_text' );
                            }
                            ?>
                            <?php endwhile; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="breathwork-about-program-img">
                        <?php $image_post = get_sub_field( 'image_post' ); ?>
                          <?php if ( $image_post ) : ?>
                            <img src="<?php echo esc_url( $image_post['url'] ); ?>" alt="<?php echo esc_attr( $image_post['alt'] ); ?>" />
                          <?php endif; ?>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
      <?php elseif( get_row_layout() == 'section_7' ) : ?>
          <div class="breathwork__2-6">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                  <?php if ( have_rows( 'navigation' ) ) : 
                    while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <article class="program scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <article class="program">
                  <?php endif; ?>
                  <div class="top-program-row">
                    <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 class="title"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>  
                    <div class="coaches-img-list">
                      <?php if( get_sub_field('faciliated_label')): ?>
                        <span><?php the_sub_field('faciliated_label'); ?></span>
                      <?php endif; ?>
                      <?php
                        $featured_posts = get_sub_field('faciliated_imgs');
                        if( $featured_posts ): ?>
                          <ul>
                            <?php foreach( $featured_posts as $post ): 
                              setup_postdata($post); ?>
                              <li>
                                <?php if(get_the_post_thumbnail_url()){ ?> 
                                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="user_<?php echo get_row_index(); ?>"> 
                                <?php } ?>
                              </li>
                            <?php endforeach; ?>
                          </ul>
                          <?php 
                            wp_reset_postdata(); ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="tabs-row">
                      <?php if( have_rows('tabs') ): 
                        $counter=1; ?>
                          <div class="tabs-list">
                            <?php while( have_rows('tabs') ): the_row(); ?>
                              <button class="tab-item" name="tab-<?php echo $counter; ?>"><?php echo get_sub_field('tab_name'); ?></button>
                              <?php $counter++;
                            endwhile; ?>
                          </div>
                        <?php endif; ?>
                            <div class="event-date">
                            <?php if( get_sub_field('course_hours')): ?>
                              <div class="clock"><?php the_sub_field('course_hours'); ?></div>
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
                          <?php if ( have_rows( 'tabs' ) ) :
                            $counter=1;
                            ?>
                            <?php while ( have_rows( 'tabs' ) ) : the_row(); ?>


                            <div class="program-content" id="tab-<?php echo $counter; ?>">
                              <?php 
                              if(get_sub_field('tab_title')) { ?>
                                <h3 class="content-title"><?php the_sub_field( 'tab_title' ); ?></h3>
                              <?php }
                              ?>
                              <?php if ( have_rows( 'progtam_list' ) ) : ?>
                                <ul class="program-list">
                                  <?php while ( have_rows( 'progtam_list' ) ) : the_row(); ?>
                                  <?php 
                                    if(get_sub_field('program_item_title')) { ?>
                                      <li class="program-item">
                                        <h4 class="item-title"><?php the_sub_field( 'program_item_title' ); ?></h4>
                                        <span class="item-time"><?php the_sub_field( 'hours' ); ?></span>
                                        <?php if ( have_rows( 'program_item_list' ) ) : ?>
                                          <ul class="subitem-list">
                                            <?php while ( have_rows( 'program_item_list' ) ) : the_row(); ?>
                                              <li><?php the_sub_field( 'item' ); ?></li>
                                              <?php endwhile; ?>
                                          </ul> 
                                        
                                        <?php endif; ?>
                                      </li>
                                    <?php }
                                  ?>
                                <?php endwhile; ?>
                                </ul>
                              <?php endif; ?>
                            </div>
                            <?php 
                          $counter++;
                          endwhile; ?>
                            <?php endif; ?>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
          </div>
      <?php elseif( get_row_layout() == 'section_8' ) : ?>  
        <div class="breathwork__2-7">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
              <?php if ( have_rows( 'navigation' ) ) : 
                while ( have_rows( 'navigation' ) ) : the_row(); ?>
                  <article class="facilitators scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                <?php endwhile; ?>
                <?php else : ?>
                  <article class="facilitators">
                <?php endif; ?>
                  <div class="container">
                    <div class="row">
                      <div class="col m12 s12 l9 xl9">
                      <?php 
                        if(get_sub_field('title')) { ?>
                          <h2 class="title"><?php the_sub_field('title'); ?></h2>
                        <?php }
                      ?>
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
                    <?php $facilitators_slider = get_sub_field( 'facilitators_slider' ); ?>
                    <?php if ( $facilitators_slider ) : ?>
                      <div class="splide" id="facilitator-slider" aria-roledescription="carousel">
                        <div class="splide__track">
                          <ul class="splide__list">				
                          <?php foreach ( $facilitators_slider as $post ) :  ?>
                            <?php setup_postdata( $post ); ?>
                            <li class="splide__slide">
                              <div class="coach-item">
                                <div class="coach-photo">
                                  <?php
                                  if(get_the_post_thumbnail_url(get_the_ID())){ ?>
                                    <img src="<?= get_the_post_thumbnail_url( get_the_ID() ); ?>" alt=''>
                                  <?php } 
                                  $posttags = get_the_tags();
                                    if ($posttags) {
                                      $count = 1;
                                        foreach($posttags as $tag) {
                                          echo'<div class="single-category">' . $tag->name . '</div>';
                                          $count++;
                                          if($count >1 ) {
                                            break;
                                          } 
                                        }
                                      }
                                    ?>
                                </div>
                                <div class="coach-content">
                                  <h2 class="coach-name"><?php the_title(); ?></h2>
                                  <div class="categories">
                                  <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                      foreach($posttags as $tag) {
                                        echo'<div>' . $tag->name . '</div>'; 
                                      }
                                    }
                                  ?>
                                  </div>
                                  <div class="coach-description">
                                    <?php the_content(); ?>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                          </ul>
                        </div>
                      </div>
                      <?php endif; ?>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      <?php elseif( get_row_layout() == 'section_9' ) : ?>
          <div class="breathwork__2-8">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                  <?php if ( have_rows( 'navigation' ) ) : 
                    while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <article class="certificate scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                    <article class="certificate">
                  <?php endif; ?>
                    <div class="certificate-photo">
                      <?php $certificate_photo = get_sub_field( 'certificate_photo' ); ?>
                      <?php if ( $certificate_photo ) : ?>
                        <img src="<?php echo esc_url( $certificate_photo['url'] ); ?>" alt="<?php echo esc_attr( $certificate_photo['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="certificate-content">
                      <?php 
                      if(get_sub_field('text')) { ?>
                        <h2> <?php the_sub_field( 'text' ); ?></h2>
                      <?php }
                      // $button_link = get_sub_field( 'button_link' ); ?>
                      <?php //if ( $button_link ) : ?>
                        <!-- <a class="bundle" href="<?php //echo esc_url( $button_link['url'] ); ?>" target="<?php //echo esc_attr( $button_link['target'] ); ?>"><?php echo esc_html( $button_link['title'] ); ?></a> -->
                      <?php //endif;
                       ?>
                      <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">
                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Enroll now'); ?></a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
            </form>  
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
    <?php endwhile;
    endif; ?>

  <div class="breathwork__2-9">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <?php if ( have_rows( 'onsite_breathwork_teacher_pages' ) ): ?>
            <?php while ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : the_row(); ?>
              <?php if ( get_row_layout() == 'section_10' ) : ?>
                <?php if ( have_rows( 'navigation' ) ) : 
                    while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <article class="optional-retreat scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <article class="optional-retreat">
                  <?php endif; ?>
                      <div class="content-wrap">
                        <?php 
                          if(get_sub_field('title')) { ?>
                            <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                          <?php }
                        ?>
                        <div class="subtitle">
                          <?php 
                            if(get_sub_field('after_title')):
                              the_sub_field( 'after_title' ); 
                            endif;
                          ?>
                        </div>
                        <div class="content">
                          <?php 
                            if(get_sub_field('dotted_block_text')) {
                              the_sub_field( 'dotted_block_text' );
                            }
                          ?>
                        </div>
                        <?php 
                          if(get_sub_field('address')) { ?>
                            <div class="location"><?php the_sub_field( 'address' ); ?></div>
                          <?php }
                        ?>
                      </div>
                      <div class="optional-retreat-img">
                        <?php $photo_1 = get_sub_field( 'photo_1' );
                        if ( $photo_1 ) : ?>  
                          <img src="<?php echo esc_url( $photo_1['url'] ); ?>" alt="<?php echo esc_attr( $photo_1['alt'] ); ?>" />
                        <?php endif; 
                        $photo_2 = get_sub_field( 'photo_2' ); 
                        if ( $photo_2 ) : ?>
                          <img src="<?php echo esc_url( $photo_2['url'] ); ?>" alt="<?php echo esc_attr( $photo_2['alt'] ); ?>" />
                        <?php endif; ?>
                      </div>
                    </article>

              <?php elseif ( get_row_layout() == 'section_11' ) : ?>
                <article class="optional-retreat-slider">
                  <div class="splide" id="optional-slider" aria-roledescription="carousel">
                    <div class="splide__track">
                      <?php if ( have_rows( 'image_and_map_slider' ) ) : ?>
                        <ul class="splide__list">
                          <?php while ( have_rows( 'image_and_map_slider' ) ) : the_row(); ?>
                          <li class="splide__slide">
                            <div class="slide-img">
                              <?php $slide_image = get_sub_field( 'slide_image' ); 
                                if ( $slide_image ) : ?>
                                <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />
                              <?php endif; ?>
                              <div class="map-block">
                                <iframe src="<?php the_sub_field( 'coordinates' ); ?>" width="347" height="190" style="border:0;border-radius:34px;" allowfullscreen="" loading="lazy"></iframe>
                              </div>
                            </div>
                          </li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="slider-navigation">
                    <div class="col m12 s12 l3 xl3 optional-retreat-arrow-nav">
                      <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                          <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                          </svg></a><a class="right_a next-button" href="javascript:;">
                          <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                          </svg></a></div>
                    </div>
                  </div>
                </article>
              <?php elseif ( get_row_layout() == 'section_12' ) : ?>
                <article class="onsite-training">
                  <?php 
                  if(get_sub_field('title')) { ?>
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <?php }
                  ?>
                  <div class="onsite-training-content">
                    <?php $post_image = get_sub_field( 'post_image' ); 
                      if ( $post_image ) : ?>
                        <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                      <?php endif; ?>
                      <div class="training-info">
                        <?php if ( have_rows( 'training_info' ) ) : ?>
                          <?php while ( have_rows( 'training_info' ) ) : the_row(); 
                            if(get_sub_field('location')) {?>
                            <div class="location"><?php the_sub_field( 'location' ); ?></div>
                            <?php }
                            if(get_sub_field('period_hours')) { ?>
                              <div class="clock"><?php the_sub_field( 'period_hours' ); ?></div>
                            <?php }
                            if(get_sub_field('period_days')) { ?>
                              <div class="calen"><?php the_sub_field( 'period_days' ); ?></div>
                            <?php }
                            ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                  </div>
                </article>
              <?php elseif ( get_row_layout() == 'section_13' ) : ?>
                <article class="follow-up">
                  <?php 

                    if(get_sub_field('title')) { ?>
                      <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                    <?php }

                    ?>
                    <div class="follow-up-wrap">
                      <div class="follow-up-content">
                      <?php if ( have_rows( 'calendar' ) ) : ?>
                        <div class="calen">
                          <?php while ( have_rows( 'calendar' ) ) : the_row(); ?>
                            <?php the_sub_field( 'to_data' ); ?> - <?php the_sub_field( 'do_data' ); ?>
                          <?php endwhile; ?>
                          </div>
                        <?php endif; 
                        if(get_sub_field('status')) { ?>
                          <div class="status online"><?php the_sub_field( 'status' ); ?></div>
                        <?php }
                        if(get_sub_field('post_content')) {
                          the_sub_field( 'post_content' );
                        } ?>
                      </div>
                      <div class="follow-up-img">
                      <?php $image_post = get_sub_field( 'post_image' ); ?>
                      <?php if ( $image_post ) : ?>
                        <img src="<?php echo esc_url( $image_post['url'] ); ?>" alt="<?php echo esc_attr( $image_post['alt'] ); ?>" />
                      <?php endif; ?>
                      </div>
                    </div>
                  </article>
              <?php endif; ?>
            <?php endwhile;
            endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php if ( have_rows( 'onsite_breathwork_teacher_pages' ) ): ?>
      <?php while ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'section_14' ) : ?>
          <?php $background_image = get_sub_field( 'background_image' );           
          if($background_image ) { ?>
            <div class="breathwork__2-10" style="background: url(<?php echo esc_url( $background_image['url'] ); ?>) no-repeat top/cover">
          <?php } else { ?>
            <div class="breathwork__2-10" style="background: <?php ?>url('../img/breathwork-teacher/sessions.png') no-repeat top/cover">
          <?php } ?>          
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                  <div class="session-wrap">
                    <?php 
                      if(get_sub_field('sub_title')) { ?>
                        <div class="sub"><?php the_sub_field( 'sub_title' ); ?></div>
                      <?php }
                      if(get_sub_field('title')) { ?>
                        <h2 class="title"></h2>
                      <?php }
                    ?>
                    <?php if ( have_rows( 'navigation' ) ) : 
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <article class="session scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                      <?php endwhile; ?>
                      <?php else : ?>
                        <article class="session">
                    <?php endif; ?>
                      <div class="session-content-wrap">
                      <?php 
                        if(get_sub_field('text')) {
                          the_sub_field( 'text' );
                        } 
                        $button_link = get_sub_field( 'button_link' );

                        if ( $button_link ) : ?>
                          <a class="bundle" href="<?php echo esc_url( $button_link['url'] ); ?>"><?php echo esc_html( $button_link['title'] ); ?></a>
                        <?php endif; ?>
                      </div>
                      <div class="session-img">
                      <?php $image_post = get_sub_field( 'image_post' ); ?>
                      <?php if ( $image_post ) : ?>
                        <img src="<?php echo esc_url( $image_post['url'] ); ?>" alt="<?php echo esc_attr( $image_post['alt'] ); ?>" />
                      <?php endif; ?>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php elseif ( get_row_layout() == 'section_15' ) : ?>
            <div class="breathwork__2-11">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php if ( have_rows( 'navigation' ) ) : 
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <article class="book-call scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                      <?php endwhile; ?>
                      <?php else : ?>
                        <article class="book-call">
                    <?php endif; ?>
                      <?php 
                        if(get_sub_field('title')) { ?>
                          <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                        <?php }
                      ?>
                      <div class="subtitle">
                        <?php 
                        if(get_sub_field('text')) {
                          the_sub_field( 'text' );
                        }
                        ?>
                      </div>
                      <?php $link_button = get_sub_field( 'link_button' ); ?>
                      <?php if ( $link_button ) : ?>
                        <a class="bundle" data-fancybox data-src="#modal-3"><?php echo esc_html( $link_button['title'] ); ?></a>
                      <?php endif; ?>                      
                    </article>
                  </div>
                </div>
              </div>
            </div>
        <?php elseif ( get_row_layout() == 'section_16' ) : ?>
          <?php if ( have_rows( 'navigation' ) ) : 
            while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <article class="breathwork__2-12 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
            <?php endwhile; ?>
            <?php else : ?>
              <div class="breathwork__2-12">
          <?php endif; ?>
                <div class="container">
                  <div class="row bodywork-testimonials">
                    <div class="col m12 s12 l12 xl9 offset-xl3">
                      <div class="testimonials-header">
                        <?php 
                          if(get_sub_field('title')) { ?>
                            <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                          <?php  }
                        ?>
                        <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                            <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                            </svg></a><a class="right_a next-button" href="javascript:;">
                            <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                            </svg></a></div>
                      </div>
                      <div class="testimonials-slider splide" id="bodywork-testimonials-slider">
                        <div class="splide__track">
                          <div class="splide__list">
                            <?php if ( have_rows( 'testimonials_slider' ) ) : ?>
                              <?php while ( have_rows( 'testimonials_slider' ) ) : the_row(); ?>
                              <div class="splide__slide testimonials-item">
                              <?php 
                                $placeholder_image = get_sub_field( 'placeholder_image' );
                                if($placeholder_image && get_sub_field('testimonials_url')) { ?>
                                  <a class="testimonials-link" data-fancybox="" href="<?php the_sub_field( 'testimonials_url' ); ?>">
                                  <img src="<?php echo esc_url( $placeholder_image['url'] ); ?>" alt="<?php echo esc_attr( $placeholder_image['alt'] ); ?>">
                                </a>
                                <?php }
                              ?>
                                </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php elseif ( get_row_layout() == 'section_17' ) : ?>  
              <div class="breathwork__2-13">
                <div class="container">
                  <div class="row">
                    <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php if ( have_rows( 'navigation' ) ) : 
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <article class="why-us scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                      <?php endwhile; ?>
                      <?php else : ?>
                        <article class="why-us">
                    <?php endif; ?>                      
                      <?php 
                        if(get_sub_field('title')) { ?>
                          <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                        <?php }
                      ?>
                        <div class="feature-list">
                          <?php if ( have_rows( 'checkbox_list' ) ) : ?>
                            <?php while ( have_rows( 'checkbox_list' ) ) : the_row(); ?>
                              <?php if ( have_rows( 'left_list' ) ) : ?>
                                <ul class="left-list">
                                  <?php while ( have_rows( 'left_list' ) ) : the_row(); ?>
                                    <li><?php the_sub_field( 'left_item' ); ?></li>
                                  <?php endwhile; ?>
                                </ul>
                              <?php endif; ?>
                              <div class="read-more"><?php echo __('Read more'); ?></div>
                              <?php if ( have_rows( 'right_list' ) ) : ?>
                                <ul class="right-list">
                                  <?php while ( have_rows( 'right_list' ) ) : the_row(); ?>
                                  <li><?php the_sub_field( 'right_item' ); ?></li>
                                  <?php endwhile; ?>
                                </ul>
                              <?php endif; ?>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </div>
                        <div class="why-us-content-wrap">
                          <?php if ( have_rows( 'bottom_block' ) ) : ?>
                            <?php while ( have_rows( 'bottom_block' ) ) : the_row(); ?>
                              <div class="why-us-content">
                                <?php 
                                  if(get_sub_field('small_title')) { ?>
                                    <h3><?php the_sub_field( 'small_title' ); ?></h3>
                                  <?php }

                                if(get_sub_field('content')) { 
                                  the_sub_field( 'content' ); 
                                } ?>
                              </div>
                              <div class="why-us-img">
                                <?php $bottom_image = get_sub_field( 'bottom_image' ); ?>
                                <?php if ( $bottom_image ) : ?>
                                  <img src="<?php echo esc_url( $bottom_image['url'] ); ?>" alt="<?php echo esc_attr( $bottom_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
        <?php elseif ( get_row_layout() == 'section_18' ) : ?>
              <div class="breathwork__2-14">
                <div class="container">
                  <div class="row">
                    <div class="col m12 s12 l12 xl9 offset-xl3">
                      <article class="level-exposition">
                        <div class="exposition-top-row">
                          <?php 
                          if(get_sub_field('title')) { ?>
                            <h2 class="title"><?php the_sub_field('title') ?></h2>
                          <?php }
                          ?>                        
                          <div class="event-period">
                            <?php 
                            if(get_sub_field('location')) { ?>
                              <div class="location"><?php the_sub_field( 'location' ); ?></div>
                            <?php }
                            if ( have_rows( 'calendar' ) ) : ?>
                              <div class="calen">
                                <?php while ( have_rows( 'calendar' ) ) : the_row(); ?>
                                  <?php the_sub_field( 'start_date' ); ?> - 
                                  <?php the_sub_field( 'end_date' ); ?>
                                <?php endwhile; ?>
                              </div>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="exposition-list">
                          <?php if ( have_rows( 'levels' ) ) : ?>
                            <ul>
                            <?php while ( have_rows( 'levels' ) ) : the_row(); ?>
                              <?php if ( have_rows( 'top_row' ) ) : ?>
                                <?php while ( have_rows( 'top_row' ) ) : the_row(); ?>
                                <li class="header-item">
                                  <div class="left-list"> 
                                    <h3><?php the_sub_field( 'first_top_item' ); ?></h3>
                                    <div class="list-description">
                                      <p><?php the_sub_field( 'first_item_subtitle' ); ?></p>
                                    </div>
                                  </div>
                                  <div class="right-list">
                                    <h3><?php the_sub_field( 'second_top_item' ); ?></h3>
                                    <div class="list-description">
                                      <p><?php the_sub_field( 'second_item_subtitle' ); ?></p>
                                    </div>
                                  </div>
                                </li> 
                                <?php endwhile; ?>
                              <?php endif; ?>
                              <?php if ( have_rows( 'main_list' ) ) : ?>
                                <?php while ( have_rows( 'main_list' ) ) : the_row(); ?>
                                  <li class="exposition-item-row">
                                    <div class="left-list"> 
                                      <h4><?php the_sub_field( 'first_item' ); ?></h4>
                                    </div>
                                    <div class="right-list"> 
                                      <h4><?php the_sub_field( 'second_item' ); ?></h4>
                                    </div>
                                  </li>
                                <?php endwhile; ?>
                              <?php endif; ?>
                            <?php endwhile; ?>
                            </ul>
                          <?php endif; ?>                         
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
        <?php elseif ( get_row_layout() == 'section_19' ) : ?>
            <div class="breathwork__2-15">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php if ( have_rows( 'navigation' ) ) : 
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <article class="book-training scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                      <?php endwhile; ?>
                      <?php else : ?>
                        <article class="book-training">
                    <?php endif; ?> 
                      <?php 
                        if(get_sub_field('title')) { ?>
                          <h2 class="title"><?php the_sub_field('title') ?></h2> 
                        <?php }
                      ?>
                      <div class="book-training-wrap">
                        <?php if ( have_rows( 'left_block' ) ) : ?>
                          <div class="left-big-block">
                            <?php while ( have_rows( 'left_block' ) ) : the_row(); ?>
                              <?php $block_image = get_sub_field( 'block_image' ); ?>
                              <?php if ( $block_image ) : ?>
                                <img src="<?php echo esc_url( $block_image['url'] ); ?>" alt="<?php echo esc_attr( $block_image['alt'] ); ?>" />
                              <?php endif; ?>
                              <div class="content-block">
                                <?php 
                                  if(get_sub_field('left_block_title')) { ?>
                                    <h3><?php the_sub_field( 'left_block_title' ); ?></h3>
                                  <?php }
                                ?>
                                <div class="top-row">
                                  <?php if ( have_rows( 'leftside_list' ) ) : ?>
                                    <ul class="left-list">
                                      <?php while ( have_rows( 'leftside_list' ) ) : the_row(); ?>
                                      <li><?php the_sub_field( 'left_item' ); ?> </li>
                                      <?php endwhile; ?>
                                    </ul>
                                  <?php endif; ?>                              
                                  <?php if ( have_rows( 'rightside_list' ) ) : ?>
                                    <ul class="right-list">
                                      <?php while ( have_rows( 'rightside_list' ) ) : the_row(); ?>
                                        <li><?php the_sub_field( 'right_item' ); ?> </li>
                                      <?php endwhile; ?>
                                    </ul>
                                  <?php endif; ?>
                                </div>					
                                <?php if ( have_rows( 'price_block' ) ) : ?>
                                  <div class="choose-price">
                                    <?php while ( have_rows( 'price_block' ) ) : the_row(); ?>
                                      <div class="price-item active">
                                        <span class="price"><?php the_sub_field( 'firsrt_price_value' ); ?></span>
                                        <span class="pice-type"><?php the_sub_field( 'first_price_name' ); ?></span>
                                      </div>
                                      <div class="price-item">
                                        <span class="price"><?php the_sub_field( 'second_price_value' ); ?></span>
                                        <span class="pice-type"><?php the_sub_field( 'second_price_name' ); ?></span>
                                      </div>
                                    <?php endwhile; ?>
                                  </div>
                                <?php endif; ?>
                                <?php //$action_link = get_sub_field( 'action_link' ); ?>
                                <?php // if ( $action_link ) : ?>
                                  <!-- <a class="bundle" href="<?php // echo esc_url( $action_link['url'] ); ?>"><?php // echo esc_html( $action_link['title'] ); ?></a> -->
                                <?php // endif; ?>
                                <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                                  <input type="hidden" name="action" value="addcart_prod">
                                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Enroll now'); ?></a>
                                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                                </form>
                              </div>
                            <?php endwhile; ?>
                          </div>
                        <?php endif; ?>
                        <?php if ( have_rows( 'right_block' ) ) : 
                          $background_image = get_sub_field( 'background_image' ); 
                          if ( $background_image ) { ?>
                            <div class="right-small-block" style="background: url('<?php echo $background_image['url']; ?>') no-repeat top/cover;">
                          <?php } else { ?>
                            <div class="right-small-block" style="background: url('<?= get_template_directory_uri(); ?>/img/breathwork-teacher/book-now.png') no-repeat top/cover;">
                          <?php }
                          while ( have_rows( 'right_block' ) ) : the_row(); ?>
					
                            <div class="top-block">
                              <?php 
                              if(get_sub_field('right_block_title')) { ?>
                                <h3><?php the_sub_field( 'right_block_title' ); ?></h3>
                              <?php }

                            if ( have_rows( 'calendar' ) ) : ?>
                              <div class="calen">
                                <?php while ( have_rows( 'calendar' ) ) : the_row(); ?>
                                  <?php the_sub_field( 'start_date' ); ?> - 
                                  <?php the_sub_field( 'end_date' ); ?>
                                <?php endwhile; ?>
                              </div>
                            <?php endif; ?>
                            <div class="add-feature">
                              <?php
                              if(get_sub_field('text')) { ?>
                                <p><?php the_sub_field('text'); ?></p>
                              <?php }
                              ?>
                            </div>
                          </div>
                          <div class="upgrade" data-fancybox="" data-src="#modal__update"><?php echo __('Upgrade +'); ?></div>
                        <?php endwhile; ?>
                        </div>
                      <?php endif; ?>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <?php elseif ( get_row_layout() == 'section_20' ) : ?>
              <div class="breathwork__2-16">
                <div class="container">
                  <div class="row">
                    <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php if ( have_rows( 'navigation' ) ) : 
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <article class="breathwork-faq scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                      <?php endwhile; ?>
                      <?php else : ?>
                        <article class="breathwork-faq">
                    <?php endif; ?> 
                        <?php
                          if(get_sub_field('title')) { ?>
                            <h2 class="title"><?php the_sub_field('title');?></h2>
                          <?php }
                          if ( have_rows( 'accordion_list' ) ) : ?>
                            <?php while ( have_rows( 'accordion_list' ) ) : the_row(); 
                              if(get_sub_field('accordion_title') && get_sub_field('accordion_content')) { ?>
                                <div class="faq-item">
                                  <button class="faq-questions"><?php the_sub_field( 'accordion_title' ); ?></button>
                                  <div class="faq-panel">
                                    <?php the_sub_field( 'accordion_content' ); ?>
                                  </div>
                                </div>
                              <?php }
                            endwhile; ?>
                          <?php endif; ?>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
        <?php endif; ?>
      <?php endwhile;
    endif; ?>
    </section>
    
    <?php if(0){ ?>
  <?php if ( have_rows( 'onsite_breathwork_teacher_pages' ) ): ?>
    <?php while ( have_rows( 'onsite_breathwork_teacher_pages' ) ) : the_row(); ?>
      <?php if ( get_row_layout() == 'modal_window' ) : ?>
        <div class="modal-wrap">
          <div class="shadow"></div>
          <div class="modal-upgrade-block">
            <button class="upgrade-close"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/x-circle.svg" alt=""></button>
            <div class="upgrade-top-row">
              <?php 
                if(get_sub_field('title')) { ?>
                  <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                <?php } 
                if(get_sub_field('month')) {?>
                  <div class="calen"><?php the_sub_field( 'month' ); ?></div>
                <?php }
              ?>
            </div>
            <div class="modal-upgrade-content">
              <div class="left-side">
                <h3 class="block-title"><?php echo __('Choose Date'); ?></h3>
                <?php if ( have_rows( 'calendar' ) ) : ?>
                  <div class="choose-calen">
                  <?php while ( have_rows( 'calendar' ) ) : the_row(); ?>
                    <?php the_sub_field( 'start_date' ); ?> - 
                    <?php the_sub_field( 'end_date' ); ?>
                  <?php endwhile; ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="right-side">
                <h3 class="block-title"><?php echo __('Choose Type of Accommodation'); ?></h3>
                <ul class="apartments-list">
                  <li class="apartment-item">
                    <ul class="img-list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
                    </ul>
                    <h3><?php echo __('Single room'); ?></h3>
                    <div class="apartment-item-bottom-row">
                      <div class="actual"><?php echo __('Available'); ?></div>
                      <?php 
                        if(get_sub_field('single_room_price')) { ?>
                          <div class="price"><?php the_sub_field( 'single room_price' ); ?></div>
                        <?php }
                      ?>
                    </div>
                  </li>
                  <li class="apartment-item">
                    <ul class="img-list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
                    </ul>
                    <h3><?php echo __('Shared double room'); ?></h3>
                    <div class="apartment-item-bottom-row">
                      <div class="actual"><?php echo __('Available'); ?></div>
                      <?php 
                      if(get_sub_field('double_room_price')) { ?>
                        <div class="price"><?php the_sub_field( 'double_room_price' ); ?></div>
                      <?php }
                      ?>
                    </div>
                  </li>
                  <li class="apartment-item">
                    <ul class="img-list">
                      <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
                      <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
                    </ul>
                    <h3><?php echo __('Shared glamping'); ?></h3>
                    <div class="apartment-item-bottom-row">
                      <div class="actual"><?php echo __('Available'); ?></div>
                      <?php 
                      if(get_sub_field('glamping')) { ?>
                        <div class="price"><?php the_sub_field( 'glamping' ); ?></div>
                      <?php }
                      ?>
                    </div>
                  </li>
                </ul>
                <div class="modal-bottom-row">
                <?php $action_link = get_sub_field( 'action__link' ); ?>
                <?php if ( $action_link ) : ?>
                  <a class="bundle" href="<?php echo esc_url( $action_link['url'] ); ?>" target="<?php echo esc_attr( $action_link['target'] ); ?>"><?php echo esc_html( $action_link['title'] ); ?></a>
                <?php endif; 
                $disclaimer_link = get_sub_field( 'disclaimer_link' ); ?>
                <?php if ( $disclaimer_link ) : ?>
                  <a class="disclaimer" href="<?php echo esc_url( $disclaimer_link['url'] ); ?>" target="<?php echo esc_attr( $disclaimer_link['target'] ); ?>"><?php echo esc_html( $disclaimer_link['title'] ); ?></a>
                <?php endif; ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile;
  endif; ?>
    <?php } ?>
    
  <style>
    article.facilitators #facilitator-slider-list .splide__slide .coach-item .coach-content .coach-description {
      height: 340px;
    }
  </style>
  
  
  
    <div class="modal bodywork-first__11" id="modal__update" style="display: none;">
    <div class="bodywork-modal-header">
      <h3 class="heading">Upgrade your experience with a retreat?</h3><span>June 2023</span>
    </div>
    <div class="bodywork-modal-content">
      <div class="choose-date">
        <h4 class="choose-title">Choose Date</h4>
        <ul class="chose-date-list">
          <li class="chose-date-item">
            <input type="radio" name="chose-date" id=""> Jun 24, 2023 - Jun 27, 2023
          </li>
        </ul>
      </div>
      <div class="choose-type">
        <h4 class="choose-title">Choose Type of Accommodation</h4>
        <ul class="choose-appartaments-list">
          <li class="choose-appartaments-item">
            <ul class="bags-list">
              <li class="bags-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/bag.svg" alt=""></li>
            </ul>
            <p class="room-name">Single room</p>
            <div class="room-footer"><span class="room-available">Available</span><span
                  class="room-price">1200&euro;</span></div>
          </li>
          <li class="choose-appartaments-item">
            <ul class="bags-list">
              <li class="bags-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/bag.svg" alt=""></li>
            </ul>
            <p class="room-name">Single room</p>
            <div class="room-footer"><span class="room-available">Available</span><span
                  class="room-price">1200&euro;</span></div>
          </li>
          <li class="choose-appartaments-item">
            <ul class="bags-list">
              <li class="bags-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/bag.svg" alt=""></li>
            </ul>
            <p class="room-name">Single room</p>
            <div class="room-footer"><span class="room-available">Available</span><span
                  class="room-price">1200&euro;</span></div>
          </li>
        </ul>
        <div class="choose-type-buttons"><a class="bundle" href="#">Yes, upgrade with a Retreat</a><a class="cancel"
                                                                                                      href="#">No,
            thanks</a></div>
      </div>
    </div>
  </div>


  <!-- //// MODAL ////-->
  <div class="modal__style modal" id="modal-3" style="display: none;">
      <div class="content_modal">
          <!-- Calendly inline widget begin -->
          <div class="calendly-inline-widget" data-url="https://calendly.com/d/dpg-9q6-b4v/call-with-innercamp" style="min-width:550px;height:850px;"></div>
          <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
          <!-- Calendly inline widget end -->
      </div>
    </div>
<?php
get_footer();