<?php
/**
 * Template Name: -- PRODUCT -- 2.3 Breathwork Levels 1+2*
 * Template Post Type: product, page, post
 *
 */

get_header(); ?>


<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
// do_action('woocommerce_before_main_content');
?>

<?php 

  global $product;

  /**
   * Hook: woocommerce_before_single_product.
   *
   * @hooked woocommerce_output_all_notices - 10
   */
  do_action('woocommerce_before_single_product');

  if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
  }

  $product = wc_get_product();
  $product_id = $product->get_id();

  ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
	<?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_1' ) : ?>
      <section class="breathwork-levels-one-two__1" data-menuscroll <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <p class="sub"><?php the_sub_field( 'sub_text' ); ?></p>
              <h1 class="title scroll__init"><?php the_sub_field( 'title' ); ?></h1>
              <div class="box__">
                <ul>
                  <li><span class="breathwork"><?php the_field( 'category', $product_id ); ?></span></li>
                  <li><span class="level"><?php the_field( 'course_level', $product_id ); ?></span></li>
                  <li><span class="calendar"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></span></li>
                  <li><span class="check"><?php the_field( 'where', $product_id ); ?></span></li>
                </ul>
                <?php the_sub_field( 'content' ); ?>
                <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">
                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<div class="left__menu__scroll" >
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l3 xl3">
        <div class="box__" data-scroll>
          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
            <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
            <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
            <input type="hidden" name="action" value="addcart_prod">
            <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
            <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>
          </form>
          <ul>
            <?php if ( have_rows( 'product__breathwork_levels_1' ) ):
              while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row();
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
                  } elseif( get_row_layout() == 'section_11' ) {
                    if ( have_rows( 'navigation' ) ) :
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                      <?php endwhile;
                    endif;
                  } elseif( get_row_layout() == 'section_12' ) {
                    if ( have_rows( 'navigation' ) ) :
                      while ( have_rows( 'navigation' ) ) : the_row(); ?>
                        <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                      <?php endwhile;
                    endif;
                  } elseif( get_row_layout() == 'section_13' ) {
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
                  } ?>
              <?php endwhile;
            endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="breathwork-levels-one-two__2">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
          <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'section_2' ) : ?>
              <?php if ( have_rows( 'navigation' ) ) :
                while ( have_rows( 'navigation' ) ) : the_row(); ?>
                  <div class="block__top scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                <?php endwhile; ?>
              <?php else : ?>
                <div class="block__top">
              <?php endif; ?>
                <div class="box__img">
                  <?php $post_image = get_sub_field( 'post_image' ); ?>
                  <?php if ( $post_image ) : ?>
                    <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                  <?php endif; ?>
                  <div class="info"><?php the_field( 'course_level', $product_id ); ?></div>
                </div>
                <div class="box__content">
                  <div class="price__">
                    <span class="top_price"><?php echo __('Price:'); ?></span>
                    <span class="prise"><?= $product->get_price_html(); ?></span>
                  </div>
                  <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                    <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                    <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                    <input type="hidden" name="action" value="addcart_prod">
                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php echo __('Start my journey'); ?></a>
                    <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>
                  </form>
                  <hr>
                  <span class="calendar"><?php the_sub_field( 'course_duration' ); ?></span>
                  <span class="video"><?php the_sub_field( 'number_of_videos' ); ?></span>
                  <span class="clock"><?php the_sub_field( 'course_total_hourse' ); ?></span>
                  <span class="status online"><?php the_field( 'where', $product_id ); ?></span>
                </div>
                <div class="box__bottom">
                  <?php the_sub_field( 'bottom_text' ); ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
          <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'section_3' ) : ?>
              <?php if ( have_rows( 'navigation' ) ) :
                while ( have_rows( 'navigation' ) ) : the_row(); ?>
                  <div class="block__green scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                <?php endwhile; ?>
              <?php else : ?>
                <div class="block__green">
              <?php endif; ?>
                <div class="box__">
                  <p class="sub"><?php the_sub_field( 'sub_title' ); ?></p>
                  <?php the_sub_field( 'text_top' ); ?>
                  <ul class="list-img-mobile">
                    <li>
                      <?php $logo_image_1 = get_sub_field( 'logo_image_1' ); ?>
                      <?php if ( $logo_image_1 ) : ?>
                          <img src="<?php echo esc_url( $logo_image_1['url'] ); ?>" alt="<?php echo esc_attr( $logo_image_1['alt'] ); ?>" />
                      <?php endif; ?>
                    </li>
                    <li>
                      <?php $logo_image_2 = get_sub_field( 'logo_image_2' ); ?>
                      <?php if ( $logo_image_2 ) : ?>
                        <img src="<?php echo esc_url( $logo_image_2['url'] ); ?>" alt="<?php echo esc_attr( $logo_image_2['alt'] ); ?>" />
                      <?php endif; ?>
                    </li>
                  </ul>
                  <div class="bottom-row">
                    <?php the_sub_field( 'text_bottom' ); ?>
                    <?php $logo_image_3 = get_sub_field( 'logo_image_3' ); ?>
                    <?php if ( $logo_image_3 ) : ?>
                      <img src="<?php echo esc_url( $logo_image_3['url'] ); ?>" alt="<?php echo esc_attr( $logo_image_3['alt'] ); ?>" />
                    <?php endif; ?>
                  </div>
                </div>
                <div class="img__">
                  <?php $logo_image_1 = get_sub_field( 'logo_image_1' ); ?>
                  <?php if ( $logo_image_1 ) : ?>
                    <img src="<?php echo esc_url( $logo_image_1['url'] ); ?>" alt="<?php echo esc_attr( $logo_image_1['alt'] ); ?>" />
                  <?php endif; ?>
                  <?php $logo_image_2 = get_sub_field( 'logo_image_2' ); ?>
                  <?php if ( $logo_image_2 ) : ?>
                    <img src="<?php echo esc_url( $logo_image_2['url'] ); ?>" alt="<?php echo esc_attr( $logo_image_2['alt'] ); ?>" />
                  <?php endif; ?>
                  <?php $logo_image_3 = get_sub_field( 'logo_image_3' ); ?>
                  <?php if ( $logo_image_3 ) : ?>
                    <img src="<?php echo esc_url( $logo_image_3['url'] ); ?>" alt="<?php echo esc_attr( $logo_image_3['alt'] ); ?>" />
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
          <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'section_4' ) : ?>
              <?php if ( have_rows( 'navigation' ) ) : ?>
                <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                  <div class="block__help scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                <?php endwhile; ?>
              <?php else :?>
                <div class="block__help">
              <?php endif; ?>
                <div class="cont__">
                  <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <?php if ( have_rows( 'checkboxes_list' ) ) : ?>
                    <ul>
                      <?php while ( have_rows( 'checkboxes_list' ) ) : the_row(); ?>
                        <li class="cheked"><?php the_sub_field( 'text_item' ); ?></li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
                </div>
                <div class="img__">
                  <?php $post_image = get_sub_field( 'post_image' ); ?>
                  <?php if ( $post_image ) : ?>
                    <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
          <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'section_5' ) : ?>
              <h2 class="title scroll__init"><?php the_sub_field( 'title' ); ?></h2>
              <?php if ( have_rows( 'navigation' ) ) : ?>
                <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                  <div class="block__next scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                <?php endwhile; ?>
              <?php else: ?>
                <div class="block__next">
              <?php endif; ?>
                <div class="img__">
                  <?php $post_image = get_sub_field( 'post_image' ); ?>
                  <?php if ( $post_image ) : ?>
                    <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                  <?php endif; ?>
                </div>
                <div class="cont__">
                  <div class="box__">
                    <?php the_sub_field( 'text' ); ?>
                    <?php $download_button = get_sub_field( 'download_button' ); ?>
                    <?php if ( $download_button ) : ?>
                      <a class="download" href="<?php echo esc_url( $download_button['url'] ); ?>"><?php echo esc_html( $download_button['title'] ); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
          <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'section_6' ) : ?>
              <div class="block__wrap scroll__init">
                <div class="cont__">
                  <?php if ( have_rows( 'levels' ) ) : ?>
                    <?php while ( have_rows( 'levels' ) ) : the_row(); ?>
                      <h3 class="title__back"><?php the_sub_field( 'level_title' ); ?></h3>
                      <?php the_sub_field( 'level_text' ); ?>
                      <hr class="section__">
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
                <div class="img__">
                  <?php $post_image = get_sub_field( 'image_post' ); ?>
                  <?php if ( $post_image ) : ?>
                    <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_7' ) : ?>
      <section class="breathwork-levels-one-two__3">
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
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="user_<?php echo get_row_index(); ?>"> <?php } ?>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="tabs-row">
                            <?php if( have_rows('tabs') ): 
                              $counter=1;
                              ?>
                              <div class="tabs-list">
                              <?php while( have_rows('tabs') ): the_row(); ?>
                                <button class="tab-item" name="tab-<?php echo $counter; ?>"><?php echo get_sub_field('tab_name'); ?></button>
                              <?php
                              $counter++;
                              endwhile; ?>
                              </div>
                            <?php endif; ?>
                            <div class="event-date">
                            <?php if( get_sub_field('course_hours')): ?>
                              <div class="clock"><?php the_sub_field('course_hours'); ?></div>
                            <?php endif; ?>
                            <div class="date"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></div>

                              
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
                              <?php if ( have_rows( 'program_list' ) ) : ?>
                                <ul class="program-list">
                                  <?php while ( have_rows( 'program_list' ) ) : the_row(); ?>
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
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_8' ) : ?>
      <section class="breathwork-levels-one-two__4">
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
                                    <?php 
                                      echo get_the_content();
                                    ?>
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
      <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_9' ) : ?>
  <section class="breathwork-levels-one-two__5">
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
            <?php the_sub_field( 'text' ); ?>
            <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">
                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php the_sub_field( 'link_name' ); ?></a>
                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>
                </form>                
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_10' ) : ?>
  <section class="breathwork-levels-one-two__6">
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
                  <?php if ( have_rows( 'post' ) ) : ?>
                    
                      <?php while ( have_rows( 'post' ) ) : the_row(); ?>
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
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_11' ) : ?>
  <section class="breathwork-levels-one-two__7">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="session-wrap">
          <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <?php if ( have_rows( 'navigation' ) ) : 
                  while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="session scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="session">
                <?php endif; ?>
              <div class="top-row">
                <div class="session-content-wrap">
                  <div class="session-schedule">
                  <?php if ( have_rows( 'time_of_the_event' ) ) : ?>
                    <?php while ( have_rows( 'time_of_the_event' ) ) : the_row(); ?>
                    <div class="clock"><?php the_sub_field( 'data_start' ); ?> - <?php the_sub_field( 'date_end' ); ?></div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                    
                    
                    <span><?php the_sub_field( 'timezone' ); ?></span>
                    <div class="calen"><?php the_sub_field( 'day' ); ?></div>
                      <?php if ( have_rows( 'course_date_list' ) ) : ?>
                        <div class="day-list">
                        <?php while ( have_rows( 'course_date_list' ) ) : the_row(); ?>
                          <?php if ( have_rows( 'dates_per_month' ) ) : ?>
                                  <?php while ( have_rows( 'dates_per_month' ) ) : the_row(); ?>
                                    <span class="schedule-date"><?php the_sub_field( 'month_item' ); ?></span>
                                  <?php endwhile; ?>
                                <?php endif; ?>
                                <span><strong>(<?php the_sub_field( 'year' ); ?>)</strong></span>
                                
                              <?php endwhile; ?>
                              </div>
                            <?php endif; ?>
                            <?php if ( have_rows( 'check_local_time' ) ) : ?>
				<?php while ( have_rows( 'check_local_time' ) ) : the_row(); ?>
        <div data-start="<?php the_sub_field( 'd_date_start' ); ?>" data-end="<?php the_sub_field( 'd_date_end' ); ?>" class="bundle-check get-time_js"><?php echo __('Check my local time here'); ?></div>
					
					
				<?php endwhile; ?>
			<?php endif; ?>
                            
                  </div>
                  <?php if ( have_rows( 'benefit' ) ) : ?>
                          <ul class="session-benefit">
                            <?php while ( have_rows( 'benefit' ) ) : the_row(); ?>
                              <li><?php the_sub_field( 'benefit_item' ); ?></li>
                            <?php endwhile; ?>
                          </ul>
                        <?php endif; ?>
                </div>
                <div class="session-img">
                <?php $post_image = get_sub_field( 'post_image' ); ?>
                        <?php if ( $post_image ) : ?>
                          <img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
                        <?php endif; ?>
                        <?php $download_time_table = get_sub_field( 'download_time_table' ); ?>
                        <?php if ( $download_time_table ) : ?>
                          <a class="bundle-download" href="<?php echo esc_url( $download_time_table['url'] ); ?>"><?php echo esc_html( $download_time_table['title'] ); ?></a>
                        <?php endif; ?>
                       
                </div>
              </div>
              <div class="bottom-row">
              <?php the_sub_field( 'bottom_content' ); ?>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_12' ) : ?>
  <section class="breathwork-levels-one-two__8">
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
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_13' ) : ?>
      <?php if ( have_rows( 'navigation' ) ) : 
          while ( have_rows( 'navigation' ) ) : the_row(); ?>
            <section class="breathwork-levels-one-two__9 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
          <?php endwhile; ?>
          <?php else : ?>
            <section class="breathwork-levels-one-two__9">
        <?php endif; ?>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl9 offset-xl3">
              <div class="testimonials-header">
                <?php 
                  if(get_sub_field('title')) { ?>
                            <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                          <?php  }
                ?>
                <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z"
                          fill="#B9B9B9"></path>
                    </svg>
                  </a><a class="right_a next-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z"
                          fill="#B68742"></path>
                    </svg>
                  </a></div>
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
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_14' ) : ?>
      <section class="breathwork-levels-one-two__10">
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
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_15' ) : ?>
      <section class="breathwork-levels-one-two__11">
        <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <article class="level-exposition">
                  <div class="exposition-top-row">
                    <?php 
                      if(get_sub_field('title')) { ?>
                        <h2 class="title"><?php the_sub_field('title') ?></h2>
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
                  
                  <?php if ( have_rows( 'levels' ) ) : ?>
                    <ul class="exposition-list">
                    <?php while ( have_rows( 'levels' ) ) : the_row(); ?>
                      <?php if ( have_rows( 'top_row' ) ) : ?>
                        <?php while ( have_rows( 'top_row' ) ) : the_row(); ?>
                          <li class="header-item">
                            <div class="first-item"></div>
                            <div class="level-item"> 
                              <h3><?php the_sub_field( 'first_top_item' ); ?></h3>
                              <div class="list-description">
                                <p><?php the_sub_field( 'first_item_subtitle' ); ?></p>
                              </div>
                            </div>
                            <div class="level-item full-program">
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
                            <div class="first-item"><?php the_sub_field( 'first_item' ); ?></div>
                            <div class="level-item"><?php the_sub_field( 'second_item' ); ?></div>
                            <div class="level-item full-program"><?php the_sub_field( 'last_item' ); ?></div>
                          </li>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>   
                </article>
              </div>
            </div>
          </div>
      </section>
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php
$params = [ 'param1' => $product_id, 'param2' => [ 1, 2 ] ];

get_template_part( '/template-parts/variable-blok', null, $params );
?>
<?php if ( have_rows( 'product__breathwork_levels_1' ) ): ?>
  <?php while ( have_rows( 'product__breathwork_levels_1' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'section_16' ) : ?>
  <section class="breathwork-levels-one-two__13">
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
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>
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
  section.breathwork-levels-one-two__1 {
    min-height: 100vh;
  }
  section.breathwork-levels-one-two__2 {
    padding: 90px 0 179px;
    min-width: 100%;
    position: relative;
  }
  .block__wrap .cont__ .section__:last-child {
    display: none;
  }

  section.breathwork-levels-one-two__4 article.facilitators #facilitator-slider-list .splide__slide .coach-item .coach-content .coach-description {
    height: 340px;
  }

  @media(max-width: 1200px) {
    section.breathwork-levels-one-two__4 article.facilitators #facilitator-slider-list .splide__slide .coach-item .coach-photo {
      height: 480px;
    }
    section.breathwork-levels-one-two__4 article.facilitators #facilitator-slider-list .splide__slide .coach-item .coach-photo img {
      height: 100%;
      object-fit: cover;
    }
  }

  @media(max-width: 576px) {
    section.breathwork-levels-one-two__4 article.facilitators #facilitator-slider-list .splide__slide .coach-item .coach-photo {
    height: 170px!important;
    max-width: 146px;
    align-self: center;
  }
}
.breathwork-levels-one-two__13 .breathwork-faq {
  margin-bottom: 180px;
}
.faq-panel p {
  font: 400 24px/40px var(--o);
}
@media(max-width: 600px) {
  .faq-panel p {
    font: 400 14px/22px var(--o);
  }
}
</style>
<?php get_footer();
