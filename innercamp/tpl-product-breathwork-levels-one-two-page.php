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
do_action('woocommerce_before_main_content');
?>

<?php while (have_posts()) : ?>
  <?php the_post();

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
                        <a class="download" href="<?php echo esc_url( $download_button['url'] ); ?>"><?php echo esc_html( $download_button['filename'] ); ?></a>
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
                  
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>





      <?php //if ( get_row_layout() == 'section_5' ) : ?>
  <section class="breathwork-levels-one-two__3">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="program" id="program">
            <div class="top-program-row">
              <h2 class="title">The Program</h2>
              <div class="coaches-img-list"><span>Facilitated by </span>
                <ul>
                  <li><img src="<?= get_template_directory_uri(); ?>/img/team/coach_1.webp" alt=""></li>
                  <li><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp" alt=""></li>
                  <li><img src="<?= get_template_directory_uri(); ?>/img/team/coach_11.webp" alt=""></li>
                  <li><img src="<?= get_template_directory_uri(); ?>/img/team/coach_12.webp" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="tabs-row">
              <div class="tabs-list">
                <button class="tab-item" name="tab-1">Level 1</button>
                <button class="tab-item" name="tab-2">Level 2</button>
              </div>
              <div class="event-date">
                <div class="clock">150 hours</div>
                <div class="date">Jan 12, 2023 - Feb 16, 2023</div>
              </div>
            </div>
            <div class="program-content-wrap">
              <div class="program-content active" id="tab-1">
                <h3 class="content-title">Level 1: Specialist certificate</h3>
                <ul class="program-list">
                  <li class="program-item">
                    <h4 class="item-title">Science of breathwork</h4><span class="item-time">40 hours</span>
                    <ul class="subitem-list">
                      <li>Breathwork through history and today</li>
                      <li>The science of the breath</li>
                      <li>Healing symptoms and diseases with breathwork</li>
                      <div class="read-more">Read more</div>
                      <ul class="bottom-block">
                        <li>Breathwork and Alpha, Theta and Delta Waves</li>
                        <li>The Vagus nerve & breathwork</li>
                      </ul>
                    </ul>
                  </li>
                  <li class="program-item">
                    <h4 class="item-title">Your breath journey</h4><span class="item-time">30 hours</span>
                    <ul class="subitem-list">
                      <li>How to discover your breathing pattern</li>
                      <li>Corrections to your breath</li>
                      <li>Spiritual purification</li>
                      <li>Perinatal influences</li>
                      <li>Energy system</li>
                    </ul>
                  </li>
                  <li class="program-item">
                    <h4 class="item-title">Breathwork for self-healing </h4><span class="item-time">60 hours</span>
                    <ul class="subitem-list">
                      <li>Breathwork to heal birth traumas, the inner child and the inner teenager</li>
                      <li>Breathwork for Ancestral Healing (shamanic path)</li>
                      <li>How to rewire your brain with breathwork</li>
                      <li>Breathwork to heal diseases and release traumas</li>
                    </ul>
                  </li>
                  <li class="program-item">
                    <h4 class="item-title">Customise your own breathwork sessions</h4><span
                        class="item-time">20 hours</span>
                    <ul class="subitem-list">
                      <li>Customise your own breathwork sessions</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="program-content" id="tab-2">
                <h3 class="content-title">Level 2: Self-healing journey</h3>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__4">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="facilitators" id="facilitators">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9">
                  <h2 class="title">The training is facilitated by</h2>
                </div>
                <div class="col m12 s12 l3 xl3 facilitator-arrow-nav">
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
              </div>
            </div>
            <div class="facilitators-slider">
              <div class="splide" id="facilitator-slider" aria-roledescription="carousel">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_1.webp"
                                                      alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute; 1</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a
                                href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who
                              intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that
                              power into their lives and the world. Alexis&rsquo; work revolves around people coaching
                              in different spheres of life. He has worked with different companies across Europe, Africa
                              and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an
                              astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_5.webp"
                                                      alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a
                                href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who
                              intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that
                              power into their lives and the world. Alexis&rsquo; work revolves around people coaching
                              in different spheres of life. He has worked with different companies across Europe, Africa
                              and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an
                              astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_2.webp"
                                                      alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a
                                href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who
                              intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that
                              power into their lives and the world. Alexis&rsquo; work revolves around people coaching
                              in different spheres of life. He has worked with different companies across Europe, Africa
                              and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an
                              astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_2.webp"
                                                      alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a
                                href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who
                              intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that
                              power into their lives and the world. Alexis&rsquo; work revolves around people coaching
                              in different spheres of life. He has worked with different companies across Europe, Africa
                              and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an
                              astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_2.webp"
                                                      alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a
                                href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who
                              intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that
                              power into their lives and the world. Alexis&rsquo; work revolves around people coaching
                              in different spheres of life. He has worked with different companies across Europe, Africa
                              and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an
                              astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="coach-item">
                        <div class="coach-photo"><img src="<?= get_template_directory_uri(); ?>/img/team/coach_2.webp"
                                                      alt="">
                          <div class="single-category">InnerCamp founder</div>
                        </div>
                        <div class="coach-content">
                          <h2 class="coach-name">Alexis Alcal&aacute;</h2>
                          <div class="categories"><a href="#">InnerCamp founder</a><a href="#">Holistic coach</a><a
                                href="#">Breathwork master</a><a href="#">Tantra teacher</a></div>
                          <div class="coach-description">
                            <p>Certified executive and personal coach, breathwork master and tantra teacher who
                              intuitively uncovers peoples&rsquo; potential so that they feel empowered to unleash that
                              power into their lives and the world. Alexis&rsquo; work revolves around people coaching
                              in different spheres of life. He has worked with different companies across Europe, Africa
                              and Asia as a trainer, mentor, manager and coach. He is someone whose life graph took an
                              astounding turnaround when he changed his own life with the method he created.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__5">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="certificate" id="certificate">
            <div class="certificate-photo"><img
                  src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/certificate-without-shadow1.png"
                  alt=""></div>
            <div class="certificate-content">
              <h2>Become <strong>a Breathwork Teacher</strong> that utilises a holistic approach to change people&apos;s
                lives</h2><a class="bundle" href="#">Enroll now</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__6">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="tantra-optional-retreat" id="optional-retreat">
            <h2 class="title">Exotic International Tantra Retreat</h2>
            <div class="content-wrap">
              <div class="tantra-optional-post">
                <div class="tantra-optional-post-img"><img
                      src="<?= get_template_directory_uri(); ?>/img/tantra/tantra-6.png" alt=""></div>
                <div class="tantra-optional-post-content">
                  <div class="location">Spain</div>
                  <div class="description">
                    <p>Upgrade your InnerCamp Bodywork experience with our one-of-a-kind retreat that blends 3 holistic
                      dominants &ndash; Breathwork, Tantra, and Bodywork.</p>
                  </div>
                  <a class="bundle-download" href="#">Download our Retreat Brochure</a>
                </div>
              </div>
              <div class="tantra-optional-post">
                <div class="tantra-optional-post-img"><img
                      src="<?= get_template_directory_uri(); ?>/img/tantra/tantra-4.png" alt=""></div>
                <div class="tantra-optional-post-content">
                  <p>Over the course of four days, InnerCamp will gently guide you along your own healing journey.</p>
                  <p>Each day will unlock new tools and techniques to help you free your body and mind from toxic
                    patterns and limiting beliefs, tap into your inherent wisdom, and connect more authentically with
                    the people who matter.</p>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__7">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="session-wrap">
            <h2 class="title">Live Sessions</h2>
            <article class="session" id="session">
              <div class="top-row">
                <div class="session-content-wrap">
                  <div class="session-schedule">
                    <div class="clock">6:00 pm &mdash; 8:00 pm CET</div>
                    <span>*Amsterdam / Paris time zone</span>
                    <div class="calen">Thursdays (biweekly)</div>
                    <span
                        class="schedule-date">Sep 13, Sep 27, Oct 11, Oct 25, Nov 8, Nov 22<strong>(2023)</strong></span><a
                        class="bundle-check" href="#">Check my local time here</a>
                  </div>
                  <ul class="session-benefit">
                    <li>Live sessions via Zoom</li>
                    <li>Q&A calls with master facilitators</li>
                  </ul>
                </div>
                <div class="session-img"><img src="<?= get_template_directory_uri(); ?>/img/tantra/tantra-sessions.png"
                                              alt=""><a class="bundle-download" href="#">Download the Timetable</a>
                </div>
              </div>
              <div class="bottom-row">
                <p><strong>Please note:</strong></p>
                <p>During the Level 2 (Facilitator training), we will ask you to bring a friend or a few friends at home
                  to practice how to facilitate breathwork. This part of the course is the most important one as you
                  will start doing the "real" work. For us it is crucial to see you facilitating and guide you during
                  this process.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__8">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="book-call" id="book-call">
            <h2 class="title">Got questions?</h2>
            <div class="subtitle">
              <p>Schedule a <strong>free</strong> consultation call with one of our experts.</p>
            </div>
            <a class="bundle" href="#">Schedule now</a>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__9">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="testimonials-header">
            <h2 class="title">Testimonials</h2>
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
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="./img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="./img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="./img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="./img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="./img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="./img/bodywork-1/testimonials.jpg" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__10">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="why-us" id="why-us">
            <h2 class="title">Why students like InnerCamp</h2>
            <div class="feature-list">
              <ul class="left-list">
                <li>Access to the InnerCamp App.</li>
                <li>Flexibility to complete the course at your own pace.</li>
                <li>Live Zoom sessions.</li>
                <li>&quot;Study buddy&quot; during the course.</li>
                <li>Lifelong membership in our global community.</li>
                <li>Individual feedback on assessments.</li>
              </ul>
              <div class="read-more">Read more</div>
              <ul class="right-list">
                <li>Exclusive downloadable materials.</li>
                <li>Free access to our regular online sessions.</li>
                <li>Unlimited video replays on our eLearning platform.</li>
                <li>Discount for your future InnerCamp experiences.</li>
                <li>Study on your laptop or mobile with the InnerCamp App.</li>
              </ul>
            </div>
            <div class="why-us-content-wrap">
              <div class="why-us-content">
                <h3>The moment you enroll, you connect with our fast-growing community of conscious people
                  worldwide.</h3>
                <p>We show you the way to self-transformation through psychological, emotional and spiritual <strong>
                    growth and fulfillment.</strong></p>
                <p>We equally honor modern and classical lineages of Tantra, and teach you how <strong>to implement them
                    in your life.</strong></p>
                <div class="read-more">Read more</div>
                <div class="why-us-bottom-content">
                  <p>Our assignments are thoughtfully designed to initiate introspection, personal development and
                    growth as <strong>an individual.</strong></p>
                  <p>We help you enhance the intimacy and connection first and foremost with <strong>yourself and then
                      with others.</strong></p>
                  <p><strong>We guide you to find your natural sexual essence in order to attract or maintain meaningful
                      and compatible relationships.</strong></p>
                </div>
              </div>
              <div class="why-us-img"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/why-we.png"
                                           alt=""></div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="breathwork-levels-one-two__11">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <article class="level-exposition">
            <div class="exposition-top-row">
              <h2 class="title">Tantric Embodiment Teacher Training</h2>
              <div class="calen">Jan 12, 2023 - Apr 13, 2023</div>
            </div>
            <ul class="exposition-list">
              <li class="header-item">
                <div class="first-item"></div>
                <div class="level-item">
                  <h3>Level 1</h3>
                  <div class="list-description">
                    <p>Self-journey diploma (Self-healing journey)</p>
                  </div>
                </div>
                <div class="level-item full-program">
                  <h3>Levels 1 + 2</h3>
                  <div class="list-description">
                    <p>Facilitator diploma (InnerCamp Multi-style Breathwork Facilitator)</p>
                  </div>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Duration</div>
                <div class="level-item">150 hours, 2 months</div>
                <div class="level-item full-program">300 hours, 4 months</div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">LIVE Group sessions with Master Trainers</div>
                <div class="level-item">6 weekly sessions</div>
                <div class="level-item full-program">12 weekly sessions</div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">High-quality curated videos, <strong>access forever</strong></div>
                <div class="level-item">40+ videos</div>
                <div class="level-item full-program">60+ videos</div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Articles, <strong>access forever</strong></div>
                <div class="level-item">30+ articles</div>
                <div class="level-item full-program">60+ articles</div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Weekly assignments</div>
                <div class="level-item"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Personal counselling</div>
                <div class="level-item"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Access to all InnerCamp virtual workshops</div>
                <div class="level-item">for 2 months</div>
                <div class="level-item full-program">for 4 months</div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Essential and recommended reading list</div>
                <div class="level-item"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Members Hub</div>
                <div class="level-item"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Enrolment In Our Affiliate system</div>
                <div class="level-item"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Discounts to Our Events, Retreats, and New Products</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Lifetime Access to All Online Training Materials</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Access to 100 Breathwork Music Playlists</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Contracts & Legal Documents to launch your Breathwork business</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Monthly Mentoring calls forever</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Study Buddy meetings</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Unlimited Access To Our Private InnerCamp Community</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
              <li class="exposition-item-row">
                <div class="first-item">Diploma & License to Guide InnerCamp Breathwork Sessions</div>
                <div class="level-item"><img src="<?= get_template_directory_uri(); ?>/img/tantra/red-circle.svg"
                                             alt=""><span>no</span></div>
                <div class="level-item full-program"><img
                      src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/check-circle-2.svg" alt=""><span>yes</span>
                </div>
              </li>
            </ul>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="breathwork-levels-one-two__13">
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
              <button class="faq-questions">What happens if I cannot come to the optional retreat (as part of TTC) due
                to COVID-19 restrictions?
              </button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">My training program has not started yet; can I cancel and get a refund?
              </button>
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
              <button class="faq-questions">My training program has finished but I didn&apos;t participate; can I get a
                refund?
              </button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">I have booked a retreat together with the online program, until when can I
                use that credit?
              </button>
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
              <button class="faq-questions">In the past, I confirmed my participation in a retreat. Can I still
                cancel?
              </button>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">Will I continue to have access to the course even after I complete it?
              </button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Delectus, omnis!</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Delectus, omnis!</p>
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-questions">How do the live sessions work? What is the difference between the program
                live sessions and the InnerCamp workshops?
              </button>
              <div class="faq-panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, omnis!</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; // end of the loop. ?>
<?php
$params = [ 'param1' => $product_id, 'param2' => [ 1, 2 ] ];

get_template_part( '/template-parts/variable-blok', null, $params );
?>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>


<?php get_footer();
