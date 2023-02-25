<?php
/**
 * Template Name: -- PRODUCT --  2.6 Bodywork Level One*
 * Template Post Type: product, page, post
 */
get_header(); 
$product = wc_get_product( $post->ID );
$product_id = $post->ID;
?>

<?php if ( have_rows( 'product_bodywork_level_one' ) ): ?>
	<?php while ( have_rows( 'product_bodywork_level_one' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'section_1' ) : ?>
      <section class="bodywork-first__1" data-menuscroll  <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <?php 
                if(get_sub_field('sub_title')) { ?>
                  <p class="sub"><?php the_sub_field( 'sub_title' ); ?></p>
                <?php }

                if(get_sub_field('title')) { ?>
                  <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                <?php }
              ?>
              <ul class="short-info-list">
                <li class="short-info-item name-item"><?php the_field( 'category', $product_id ); ?></li>
                <li class="short-info-item level-item"><?php the_field( 'course_level', $product_id); ?></li>
                <li class="short-info-item calendar-item"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></li>
                <li class="short-info-item check-item"><?php the_field( 'format', $product_id ); ?></li>
              </ul>
              <?php 
                if(get_sub_field('paragraph')) { ?>
                  <p class="description">
                    <?php the_sub_field( 'paragraph' ); ?>
                  </p>
                <?php }
              ?>
              <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                <input type="hidden" name="action" value="addcart_prod">
                  <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php the_sub_field( 'button_name' ); ?></a>
                <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
              </form>
            </div>
          </div>
        </div>
      </section>
    <?php endif;
  endwhile;
endif; ?>

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
                <?php if ( have_rows( 'product_bodywork_level_one' ) ): 
                  while ( have_rows( 'product_bodywork_level_one' ) ) : the_row();
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
                    } elseif( get_row_layout() == 'section_6' ) {
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

  <?php if ( have_rows( 'product_bodywork_level_one' ) ): ?>
    <?php while ( have_rows( 'product_bodywork_level_one' ) ) : the_row(); ?>
      <?php if ( get_row_layout() == 'section_2' ) : ?>
        <?php if ( have_rows( 'navigation' ) ) : ?>
          <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
            <section class="bodywork-first__2 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
          <?php endwhile; ?>
        <?php else : ?>
          <section class="bodywork-first__2">
        <?php endif; ?>
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <div class="basic-course-card">
                <?php $post_image = get_sub_field( 'post_image' ); ?>
                  <div class="couse-img" style="background: url(<?php echo $post_image['url']; ?>);background-size: cover; background-position: 50%; background-repeat: no-repeat;"></div>
                  <div class="course-info">
                    <div class="course-price-wrapper">
                      <div class="course-price">
                        <span class="price-label"><?php echo __('Price:'); ?></span>
                        <span class="price-quantity"><?= $product->get_price_html(); ?></span>
                      </div>
                      <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                        <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                        <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                        <input type="hidden" name="action" value="addcart_prod">
                          <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php the_sub_field( 'button_name' ); ?></a>
                        <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                      </form>
                    </div>
                    <?php if ( have_rows( 'list_of_parameters' ) ) : ?>
                      <ul class="course-short-info">
                        <?php while ( have_rows( 'list_of_parameters' ) ) : the_row(); ?>
                          <li class="course-short-info-item course-duration"><?php the_sub_field( 'course_period' ); ?></li>
                          <li class="course-short-info-item course-video"><?php the_sub_field( 'video_qty' ); ?></li>
                          <li class="course-short-info-item course-hours"><?php the_sub_field( 'total_course_hours' ); ?></li>
                        <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>     
                    <span class="course-status"><?php the_field( 'format', $product_id ); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php elseif ( get_row_layout() == 'section_3' ) : ?>
        <?php $background_image = get_sub_field( 'background_image' );   
        if ( have_rows( 'navigation' ) ) : ?>
          <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <section class="bodywork-first__3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>" style="background: linear-gradient(0deg,rgba(0,0,0,.5),rgba(0,0,0,.5)),url(<?php echo esc_url( $background_image['url'] ); ?>); background-position: 50%; background-repeat: no-repeat; background-size: cover;">
          <?php endwhile; ?>
        <?php else : ?>
            <section class="bodywork-first__3">
        <?php endif; ?>
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <div class="text-wrapper">
                  <p class="small-description">
                    <?php the_sub_field( 'left_text_block_1' ); ?>
                  </p>
                  <p class="big-description">
                    <?php the_sub_field( 'left_text_block_2' ); ?>
                  </p>
                </div>
                <div class="banner-wrapper">
                  <h3 class="heading"><?php the_sub_field( 'banner_title' ); ?></h3>
                  <?php if ( have_rows( 'banner_labels' ) ) : ?>
                    <ul class="keywords-list">
                      <?php while ( have_rows( 'banner_labels' ) ) : the_row(); ?>
                        <li class="keywords-item"><?php the_sub_field( 'label' ); ?></li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endif;
    endwhile;
  endif; ?>

  <section class="bodywork-first__4">
    <div class="container">
      <?php if ( have_rows( 'product_bodywork_level_one' ) ): ?>
        <?php while ( have_rows( 'product_bodywork_level_one' ) ) : the_row(); ?>
          <?php if ( get_row_layout() == 'section_4' ) : ?>
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <section class="accreditation scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="accreditation">
                <?php endif; ?>
                  <div class="first-text-part grid-text-item">
                    <?php 
                      if(get_sub_field('sub_title')) { ?>
                        <p class="sub"><?php the_sub_field( 'sub_title' ); ?></p>
                      <?php }
                      if(get_sub_field('text')) {
                        the_sub_field('text');
                      }
                    ?>
                  </div>
                  <div class="sec-text-part grid-text-item">
                    <?php 
                      if(get_sub_field('text_secondary')) {
                        the_sub_field('text_secondary');
                      }
                    ?>
                  </div>
                  <div class="cma-logo-wrapper grid-img-item">
                    <?php $company_logo_1 = get_sub_field( 'company_logo_1' ); ?>
                    <?php if ( $company_logo_1 ) : ?>
                      <img src="<?php echo esc_url( $company_logo_1['url'] ); ?>" alt="<?php echo esc_attr( $company_logo_1['alt'] ); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="ibf-logo-wrapper grid-img-item">
                    <?php $company_logo_2 = get_sub_field( 'company_logo_2' ); ?>
                    <?php if ( $company_logo_2 ) : ?>
                      <img src="<?php echo esc_url( $company_logo_2['url'] ); ?>" alt="<?php echo esc_attr( $company_logo_2['alt'] ); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="cpd-logo-wrapper grid-img-item">
                    <?php $company_logo_3 = get_sub_field( 'company_logo_3' ); ?>
                    <?php if ( $company_logo_3 ) : ?>
                      <img src="<?php echo esc_url( $company_logo_3['url'] ); ?>" alt="<?php echo esc_attr( $company_logo_3['alt'] ); ?>" />
                    <?php endif; ?>
                  </div>
                </div>
              </div>
          <?php elseif ( get_row_layout() == 'section_5' ) : ?>
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="benefits scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="benefits">
                <?php endif; ?>
                  <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <div class="tahuma-recovery">
                    <?php if ( have_rows( 'checkboxes_list' ) ) : ?>
                      <ul class="tahuma-recovery-list">
                        <?php while ( have_rows( 'checkboxes_list' ) ) : the_row(); ?>
                          <li class="tahuma-recovery-item"><?php the_sub_field( 'list_item_text' ); ?></li>
                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                    <div class="img">
                      <?php $image = get_sub_field( 'image' ); ?>
                      <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php elseif ( get_row_layout() == 'section_6' ) : ?>
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="about-course scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="about-course">
                <?php endif; ?>
                  <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <div class="about">
                    <div class="img">
                      <?php $post_image = get_sub_field( 'post_image' ); ?>
                      <?php if ( $post_image ) : ?>
                        <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="about-description">
                      <h3 class="heading"><?php the_sub_field( 'dotted_box_title' ); ?></h3>
                      <?php the_sub_field( 'dotted_box_text' ); ?>
                      <?php $dotted_box_download_button = get_sub_field( 'dotted_box_download_button' ); ?>
                      <?php if ( $dotted_box_download_button ) : ?>
                        <a class="download-button" href="<?php echo esc_url( $dotted_box_download_button['url'] ); ?>"><?php echo esc_html( $dotted_box_download_button['title'] ); ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php elseif ( get_row_layout() == 'section_7' ) : ?>
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'level_blocks' ) ) : ?>
                  <?php while ( have_rows( 'level_blocks' ) ) : the_row(); ?>
                    <div class="level-1 level">
                      <h3 class="level-label"><?php the_sub_field( 'level_title_1' ); ?></h3>
                      <?php the_sub_field( 'level_text' ); ?>
                    </div>
                    <div class="level-2 level">
                    <h3 class="level-label"> <?php the_sub_field( 'level_title_2' ); ?></h3>
                    <span class="published-soon"><?php the_sub_field( 'level_notice' ); ?></span>
                      <?php the_sub_field( 'level_text_2' ); ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                <div class="img">
                  <?php $image = get_sub_field( 'image' ); ?>
                  <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                  <?php endif; ?>
                </div>
                <div class="about-dropdown">
                  <div class="dropdown">
                  <?php the_sub_field( 'read_more_text' ); ?>
                    <button class="read-more"><?php echo __('Read more') ?><img src="<?= get_template_directory_uri(); ?>/img/corporate/bottom-arrow.svg" alt=""></button>
                  </div>
                </div>
              </div>
            </div>
          <?php endif;
        endwhile;
      endif; ?>
    </div>
  </section>
  
  <?php if ( have_rows( 'product_bodywork_level_one' ) ): ?>
    <?php while ( have_rows( 'product_bodywork_level_one' ) ) : the_row(); ?>
      <?php if ( get_row_layout() == 'section_8' ) : ?>
        <?php if ( have_rows( 'navigation' ) ) : ?>
          <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
            <section class="bodywork-first__5 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
          <?php endwhile; ?>
        <?php else : ?>
          <section class="bodywork-first__5">
        <?php endif; ?>
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

                            <?php while( have_rows('calendar') ): the_row(); ?>

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
        </section>
      <?php elseif ( get_row_layout() == 'section_9' ) : ?>
        <section class="breathwork__2-7">
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
        </section>
      <?php elseif ( get_row_layout() == 'section_10' ) : ?>
          <section class="breathwork__2-8">
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
          </section>
      <?php elseif ( get_row_layout() == 'section_11' ) : ?>
        <section class="tantra__2-9">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php if ( have_rows( 'navigation' ) ) : 
                  while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <article class="tantra-optional-retreat scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                <?php else : ?>
                  <article class="tantra-optional-retreat">
                <?php endif; ?>
                  <?php 
                    if(get_sub_field('title')) { ?>
                      <h2 class="title"><?php the_sub_field('title') ?></h2>
                    <?php }
                  ?>
                  <div class="content-wrap">
                    <?php if ( have_rows( 'post' ) ) :
                      while ( have_rows( 'post' ) ) : the_row(); ?>
                        <div class="tantra-optional-post">
                          <div class="tantra-optional-post-img">
                            <?php $post_image = get_sub_field( 'post_image' ); ?>
                            <?php if ( $post_image ) : ?>
                                <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                            <?php endif; ?>
                          </div>
                          <div class="tantra-optional-post-content">
                            <?php 
                              if(get_sub_field('location')) { ?>
                                <div class="location">
                                  <?php the_sub_field( 'location' ); ?></div>
                              <?php }
                            ?>
                            <?php the_sub_field( 'post_content' ); ?>
                            <?php $download_link = get_sub_field( 'download_link' ); ?>
                            <?php if ( $download_link ) : ?>
                              <a class="bundle-download" href="<?php echo esc_url( $download_link['url'] ); ?>"><?php echo esc_html( $download_link['title'] ); ?></a>
                            <?php endif; ?>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
      <?php elseif ( get_row_layout() == 'section_12' ) : ?>
        <section class="bodywork-first__6">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <?php if ( have_rows( 'navigation' ) ) : 
                  while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="live-sessions scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="live-sessions">
                <?php endif; ?>
                    <div class="live-sessions-body">
                      <div class="session-top">
                      <div class="live-sessions-text">
                        <ul class="schedule-list">
                          <li class="schedule-item schedule-time">
                            <?php if ( have_rows( 'live_sessions', $product_id ) ) : ?>
                              <?php while ( have_rows( 'live_sessions', $product_id ) ) : the_row(); ?>
                              <p><?php the_sub_field( 'time_from', $product_id ); ?> - <?php the_sub_field( 'time_to', $product_id ); ?></p>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            <span><?php the_sub_field( 'timezone' ); ?></span>
                          </li>
                          <li class="schedule-item schedule-date">
                            <p><?php the_sub_field( 'day' ); ?></p>
                            <?php if ( have_rows( 'course_date_list' ) ) : ?>
                              <?php while ( have_rows( 'course_date_list' ) ) : the_row(); ?>
                                <?php if ( have_rows( 'dates_per_month' ) ) : ?>
                                  <?php while ( have_rows( 'dates_per_month' ) ) : the_row(); ?>
                                    <span><?php the_sub_field( 'month_item' ); ?></span>
                                  <?php endwhile; ?>
                                <?php endif; ?>
                                <span><strong>(<?php the_sub_field( 'year' ); ?>)</strong></span>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          </li>
                        </ul>
                        <div data-start="<?php the_sub_field( 'time_from', $product_id ); ?>" data-end="<?php the_sub_field( 'time_to', $product_id ); ?>" class="bundle-check get-time_js"><?php echo __('Check my local time here'); ?></div>
                        <?php if ( have_rows( 'benefit' ) ) : ?>
                          <ul class="about-schedule-list">
                            <?php while ( have_rows( 'benefit' ) ) : the_row(); ?>
                              <li class="about-schedule-item"><?php the_sub_field( 'benefit_item' ); ?></li>
                            <?php endwhile; ?>
                          </ul>
                        <?php endif; ?>
                      </div>
                      <div class="sessions-img">
                        <?php $post_image = get_sub_field( 'post_image' ); ?>
                        <?php if ( $post_image ) : ?>
                          <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                        <?php endif; ?>
                        <?php $download_time_table = get_sub_field( 'download_time_table' ); ?>
                        <?php if ( $download_time_table ) : ?>
                          <a class="download-button" href="<?php echo esc_url( $download_time_table['url'] ); ?>"><?php echo esc_html( $download_time_table['title'] ); ?></a>
                        <?php endif; ?>
                    </div>
                      </div>
                      
                    <div class="live-sessions-footer">
                      <?php the_sub_field( 'bottom_content' ); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </section>


      <?php elseif ( get_row_layout() == 'section_13' ) : ?>
            <section class="tantra__2-11">
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
              </section>
      <?php elseif ( get_row_layout() == 'section_14' ) : ?>  
        <?php if ( have_rows( 'navigation' ) ) : 
            while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <section class="breathwork__2-12 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
            <?php endwhile; ?>
            <?php else : ?>
              <section class="breathwork__2-12">
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
        </section>
      <?php elseif (get_row_layout() == 'section_15') : ?>
        <section class="tantra__2-13">
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
        </section>
      <?php elseif (get_row_layout() == 'section_16') : ?>  
          <section class="bodywork-first__10">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                  <h2 class="title"><?php the_sub_field('title'); ?></h2>
                  <span class="date-range"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></span>
                  <div class="bodywork-somatic-table">
                    <div class="bodywork-somatic-column">
                      <div class="bodywork-somatic-th"></div>
                      <div class="bodywork-somatic-td">Duration</div>
                      <div class="bodywork-somatic-td">LIVE Group sessions with Master Trainers</div>
                      <div class="bodywork-somatic-td">High-quality curated videos, access forever</div>
                      <div class="bodywork-somatic-td">Articles, access forever</div>
                      <div class="bodywork-somatic-td">Weekly assignments</div>
                      <div class="bodywork-somatic-td">Personal counselling</div>
                      <div class="bodywork-somatic-td">Access to all InnerCamp workshops</div>
                      <div class="bodywork-somatic-td">Essential and recommended reading list</div>
                      <div class="bodywork-somatic-td">Members Hub</div>
                      <div class="bodywork-somatic-td">Enrolment In Our Affiliate system</div>
                      <div class="bodywork-somatic-td">Discounts to Our Events, Retreats, and New Products</div>
                      <div class="bodywork-somatic-td">Lifetime Access to All Online Training Materials</div>
                    </div>
                    <div class="bodywork-somatic-column">
                      <div class="bodywork-somatic-th">Level 1<span>Self-journey diploma</span></div>
                      <div class="bodywork-somatic-td">125 hours, 3 months</div>
                      <div class="bodywork-somatic-td">6 biweekly sessions</div>
                      <div class="bodywork-somatic-td">100+ videos</div>
                      <div class="bodywork-somatic-td">50+ articles</div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                      <div class="bodywork-somatic-td">for 3 months</div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                      <div class="bodywork-somatic-td"><img
                            src="<?= get_template_directory_uri(); ?>/img/bodywork-1/check-mark.svg" alt=""></div>
                    </div>
                    <div class="bodywork-somatic-column">
                      <div class="bodywork-somatic-th gold-color">Levels 1 + 2<span>Bodywork &amp; Somatic therapies Facilitator</span></div>
                      <div class="bodywork-somatic-td-column"><span>*will be published soon</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <?php elseif (get_row_layout() == 'section_17') : ?>  
        <section class="bodywork-first__10">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
              <?php if ( have_rows( 'navigation' ) ) : ?>
                <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                  <div class="book-your-trading scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                <?php endwhile; ?>
                <?php else : ?>
                  <div class="book-your-trading">
              <?php endif; ?>
              <h3 class="heading"><?php the_sub_field( 'title' ); ?></h3>   
                  <div class="book-your-trading-columns">
                  <?php if ( have_rows( 'left_block' ) ) : ?>  
                    <div class="book-your-trading-level-1 book-your-trading-item">
                  <?php while ( have_rows( 'left_block' ) ) : the_row(); ?>
                    
                  
                      <h4 class="column-heading"><?php the_sub_field( 'left_block_title' ); ?></h4>
                      <?php if ( have_rows( 'left_block_list' ) ) : ?>
                        <ul class="column-level-info-list">
						<?php while ( have_rows( 'left_block_list' ) ) : the_row(); ?>
            <li class="column-level-info-item"><?php the_sub_field( 'left_item' ); ?></li>
						<?php endwhile; ?>
            </ul>
					<?php endif; ?>

                      <?php if ( have_rows( 'price_block' ) ) : ?>
                        <ul class="column-price-nav-list">
                          <?php while ( have_rows( 'price_block' ) ) : the_row(); ?>
                          <li class="column-price-nav-item"><?php the_sub_field( 'first_price_value' ); ?><span><?php the_sub_field( 'first_price_name' ); ?></span></li>
                          <li class="column-price-nav-item active"><?php the_sub_field( 'second_price_value' ); ?><span><?php the_sub_field( 'second_price_name' ); ?></span></li>	
                          <li class="column-price-nav-item"><?php the_sub_field( 'last_price_value' ); ?><span><?php the_sub_field( 'last_price_name' ); ?></span></li>	
							
						<?php endwhile; ?>
            </ul>
					<?php endif; ?>
          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">
                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Enroll now'); ?></a>
                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                </form>           
                       
                       
                        
                      
                    
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>
                <?php if ( have_rows( 'middle_block' ) ) : ?>
                  <div class="book-your-trading-level-2 book-your-trading-item">
				<?php while ( have_rows( 'middle_block' ) ) : the_row(); ?>
                      <h4 class="column-heading"><?php the_sub_field( 'middle_block_title' ); ?></h4>
                      <span><?php the_sub_field( 'centered_text' ); ?></span>
                    
                    <?php endwhile; ?>
                    </div>
			<?php endif; ?>
      <?php if ( have_rows( 'right_block' ) ) : ?>
        <?php $background_image = get_sub_field( 'background_image' ); ?>
        <div class="book-your-trading-join book-your-trading-item" style="background: linear-gradient(0deg,rgba(0,0,0,.5),rgba(0,0,0,.5)),url(<?php echo esc_url( $background_image['url'] ); ?>); background-position: 50%; background-repeat: no-repeat; background-size: cover;">
				<?php while ( have_rows( 'right_block' ) ) : the_row(); ?>
					
					

          <h4 class="column-heading"><?php the_sub_field( 'right_block_title' ); ?></h4>
                      <span class="column-calendar"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></span>
                      <ul class="column-level-info-list">
                        <li class="column-level-info-item"><?php the_sub_field( 'text' ); ?></li>
                      </ul>
					
					
          <button class="book-your-trading-update" data-fancybox="" data-src="#modal__update" type="button">
                        Upgrade
                      </button>
				<?php endwhile; ?>
        </div>
			<?php endif; ?>
                    
                      
                      
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php elseif (get_row_layout() == 'section_18') : ?>
          <section class="breathwork__2-16">
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
          </section>
      <?php endif;
    endwhile;
  endif; ?>

  
  
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
<style>
  .bodywork-first__1 {
    position: relative;
  }
  
  .bodywork-first__1::after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background: linear-gradient(0deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
    top: 0;
    left: 0;
  }

  section.bodywork-first__2 .course-price {
    margin-bottom: 23px;
  }

  section.bodywork-first__4 .row:first-child {
    margin-bottom: 174px;
  }

  section.bodywork-first__4 .row:nth-child(2) .title {
    margin-bottom: 57px;
  }

  article.facilitators #facilitator-slider-list .splide__slide .coach-item .coach-content .coach-description {
    height: 340px;
    padding-right: 0;
}
.product-template-tpl-product-bodywork-level-one article.facilitators {
  padding: 180px 0 86px;
}
.product-template-tpl-product-bodywork-level-one article.certificate {
  margin-bottom: 173px;
}

.product-template-tpl-product-bodywork-level-one .tantra-optional-post-content p strong {
  font: 700 18px/32px var(--ob);
}

section.bodywork-first__6 {
  padding: 0;
}

section.bodywork-first__6 .title {
  margin-bottom: 60px;
}



.bodywork-first__6 .session-top {
  display: flex;
  justify-content: space-between;
}

@media(max-width: 992px) {
  .bodywork-first__6 .live-sessions-body .session-top {
    flex-direction: column-reverse;
  }
}

.live-sessions-text {
  width: 100%;
  padding: 50px 69px;
  background: #fff;
  border-radius: 34px 0 0 0;
  box-shadow: 18px 41px 71px rgba(0, 0, 0, 0.14), inset 5px 6px 14px rgba(0, 0, 0, 0.13);
}

@media(max-width: 992px) {
  .live-sessions-text {
    border-radius: 0;
  }
}

@media(max-width: 768px) {
  .session-top .live-sessions-text {
    padding: 30px 22px;
  }
}

.schedule-list {
  margin-bottom: 36px;
}

.schedule-item {
  position: relative;
  padding-left: 45px;
  margin-bottom: 18px;
}
.schedule-item p {
  font: 700 24px/36px var(--ob);
  letter-spacing: 0.005em;
  color: #444F43;
}

@media(max-width: 1600px) {
  .schedule-item p {
    font: 700 18px/36px var(--ob);
  }
}

@media(max-width: 768px) {
  .schedule-item p {
    font: 700 14px/21px var(--ob)!important;
  }
}

@media(max-width: 576px) {
  .schedule-item p {
    margin-bottom: 2px;
  }
}

.schedule-item span {
  font: 400 14px/21px var(--o);
  letter-spacing: 0.005em;
  color: #444F43;
}

.schedule-item span strong {
  font: 700 14px/21px var(--ob);
  letter-spacing: 0.005em;
  color: #444F43;
}

.schedule-item.schedule-time::before {
  position: absolute;
  top: 8px;
  left: 1px;
  content: '';
  background: url("<?= get_template_directory_uri(); ?>/img/clock.svg") no-repeat;
  width: 32px;
  height: 32px;
  background-size: contain;
}

.schedule-item.schedule-date::before {
  position: absolute;
  top: 8px;
  left: 2px;
  content: '';
  background: url("<?= get_template_directory_uri(); ?>/img/calendar.svg") no-repeat;
  width: 32px;
  height: 32px;
  background-size: contain;
}
.live-sessions-text .bundle-check {
  color: #fff;
  font: 700 18px/30px var(--ob);
  background: #B68742;
  border-radius: 35px;
  position: relative;
  display: flex;
  padding: 12px 18px 12px 7px;
  width: fit-content;
  align-items: center;
  margin-bottom: 36px;
}

@media(max-width: 1366px) {
  .live-sessions-text .bundle-check {
    font: 700 14px/23px var(--ob); 
  }
}

@media(max-width: 992px) {
  .live-sessions-text .bundle-check {
    padding: 7px 10px;
    height: 37px;
  }
}
@media(max-width: 576px) {
  .live-sessions-text .bundle-check {
    order: 5;
  }
}

.live-sessions-text .bundle-check::before {
  background: url("<?= get_template_directory_uri(); ?>/img/tantra/globe.svg") no-repeat;
  width: 32px;
  height: 32px;
  margin-right: 11px;
  position: relative;
  content: '';
  display: block;
  background-size: contain;
  margin-left: 12px;
}
  
@media(max-width: 1366px) {
  .live-sessions-text .bundle-check::before {
    width: 20px;
    height: 20px; 
  }
}

.about-schedule-list {
  border: 1px dashed #424F44;
  border-radius: 17px;
  padding: 22px!important;
  width: 100%;
  max-width: 421px;
}

@media(max-width: 992px) {
  .about-schedule-list {
    max-width: 100%;
  }
} 

@media(max-width: 768px) {
  .about-schedule-list {
    padding: 17px;
  }
}

.about-schedule-list li {
  font: 700 18px/30px var(--ob);
  letter-spacing: 0.005em;
  color: #424F44;
  margin-bottom: 27px;
  position: relative;
  padding-left: 47px;
}

@media(max-width: 768px) {
  .about-schedule-list li {
    font: 400 14px/23px var(--ob);
    margin-bottom: 32px;
  }
}

.about-schedule-list li:last-child {
  margin-bottom: 5px;
} 

@media(max-width: 768px) {
  .about-schedule-list li:last-child {
    margin-bottom: -3px;
  }
}  

.about-schedule-list li::before {
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 34px;
  content: '';
  background: url("<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg");
  background-size: cover;
  background-repeat: no-repeat;
}

@media(max-width: 768px) {
  .about-schedule-list li::before {
    width: 30px;
    height: 30px;
    top: -3px;
    left: -3px;
  }
}

.bodywork-first__6 .sessions-img { 
  max-width: 581px;
  position: relative;
}
@media(max-width: 992px) {
  .bodywork-first__6 .sessions-img { 
    width: 100%!important;
    max-width: 100%;
  }
}

@media(max-width: 400px) {
  .bodywork-first__6 .sessions-img { 
    height: 189px;
  }
}
.bodywork-first__6 .sessions-img::after {
  position: absolute;
  top: 0;
  right: 0;
  content: '';
  width: 100%;
  height: 100%;
  background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.0677083) 63.02%, #000000 100%);
}

.bodywork-first__6 .sessions-img img {
  border-radius: 0px 34px 0px 0px;
  height: 100%;
  object-fit: cover;
}

@media(max-width: 992px) {
  .bodywork-first__6 .sessions-img img {
    border-radius: 34px 34px 0 0;
  }
}

section.bodywork-first__6 .download-button {
  position: absolute;
  content: '';
  bottom: 30px;
  left: 29px;
  z-index: 1;
  display: inline-block;
  max-width: 324px;
  padding: 8px 42px 8px 21px;
  text-align: left;
  width: 100%;
}

@media(max-width: 600px) {
  section.bodywork-first__6 .download-button {
    max-width: 235px!important;
  }
}

section.bodywork-first__6 .download-button::after {
  right: 13px;
}

.live-sessions-footer {
  background: #424F44;
  padding: 39px;
  border-radius: 0 0 34px 34px;
}

.live-sessions-footer p {
  color: #fff;
  font: 400 20px/33px var(--o);
  letter-spacing: 0.005em;
  text-align: center;  
  margin-bottom: 21px;
}

.live-sessions-footer p:last-child {
  margin-bottom: 0;
}

.live-sessions-footer p strong {
  font: 700 20px/33px var(--ob);
}

.product-template-tpl-product-bodywork-level-one .testimonials-link {
  height: 365px;
}

.product-template-tpl-product-bodywork-level-one .testimonials-link img {
  height: 100%;
  object-fit: cover;
}
@media(max-width: 600px) {
  .product-template-tpl-product-bodywork-level-one .testimonials-link {
    height: 223px;
  }
}

@media(max-width: 768px) {
  .product-template-tpl-product-bodywork-level-one .book-call .bundle {
    margin: 0 auto;
  }
}

section.bodywork-first__10 .row:first-child .bodywork-somatic-table {
  margin-bottom: 0;
}

.book-your-trading {
  background: #F1EFE8;
  box-shadow: 18px 41px 71px rgba(0, 0, 0, 0.25), inset 5px 6px 14px rgba(0, 0, 0, 0.12);
  border-radius: 34px;
  padding: 34px 33px;
}

.book-your-trading  .heading {
  letter-spacing: -0.035em;
  color: #424F44;
  font: 400 36px/94px var(--p);
}
.book-your-trading-columns {
  display: flex;
}
.book-your-trading-level-1 {
  max-width: 363px;
    background: #fff;
    border-radius: 17px;
    position: relative;
    padding: 35px 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-bottom: 30px;
}
@media(max-width: 992px) {
  .book-your-trading-level-1 { 
    max-width: 100%;
  }
}

@media(max-width: 600px) {
  .book-your-trading-level-1 { 
    padding: 25px 27px;
  }
}    

.column-heading {
  color: #424F44;
  font: 700 18px/35px var(--ob);
}

@media(max-width: 600px) {
  .column-heading {
    font: 700 18px/25px var(--ob);
    margin-bottom: 15px;
  }
}      

.column-level-info-item {
  font: 700 14px/23px var(--ob);
  align-items: center;
  letter-spacing: .005em;
  color: #424f44;
  position: relative;
  margin-bottom: 3px;
}


/* В кінці видалити */
@media only screen and (min-width: 1201px){
  .row .col.offset-xl3 {
    margin-left: 25.5%;
  }
}
</style>

<?php
get_footer();
