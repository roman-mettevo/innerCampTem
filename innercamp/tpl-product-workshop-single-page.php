<?php
/**
* Template Name: -- PRODUCT -- 2.2 WorkShop Page*
 * Template Post Type: product, page, post
*
*/
get_header(); ?>
<?php $product = wc_get_product( $post->ID ); // Works for any product type ?>

<?php
  if(have_rows('workshop')):
    while(have_rows('workshop')) : the_row(); ?>
      <?php if( get_row_layout() == 'section_1' ): ?>
        <section class="workshop__1" data-menuscroll  <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl12">
                <?php 
                  if( get_sub_field('title')): ?><!-- if under__the -->
                    <h1 class="title"><?php the_sub_field('title'); ?></h1>
                <?php endif;
                  if(get_sub_field('content')): 
                    echo the_sub_field('content');
                  endif;             
                  $link = get_sub_field( 'link' ); ?>
                  <?php if ( $link ) : ?>
                    <a class="bundle" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                  <?php endif; 
                ?>                   
              </div>
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

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php echo __('Join now'); ?></a>
                
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>

          <ul>
              <li class="active"><a href="#workshop_details">Workshop details</a></li>
              <li><a href="#course-basics">Course basics</a></li>
              <li><a href="#facilitators">Facilitators</a></li>
              <li><a href="#membership">InnerCamp membership</a></li>
              <li><a href="#how-to-get-ready">How to get ready?</a></li>
              <li><a href="#workshop-participant-consent">Workshop participant consent</a></li>
              <li><a href="#faq">FAQ</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <section class="workshop__2">
    <div class="container">
      <div class="row">  
        <?php 
          if(have_rows('workshop')):
            while(have_rows('workshop')) : the_row(); ?>
              <?php if( get_row_layout() == 'section_2' ){    
                if ( have_rows( 'navigation_menu' ) ) : 
                  while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                    <div id="<?php the_sub_field( 'menu_scroll' ); ?>" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                  <?php endwhile; ?>
                <?php else :  ?>
                  <div id="workshop_details" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                <?php endif; 
                if ( have_rows( 'content_layout' ) ) : 
                  while ( have_rows( 'content_layout' ) ) : the_row(); ?>
                    <span class="notice"><?php the_sub_field( 'notice' ); ?></span>
                      <?php $images = get_sub_field( 'images' ); ?>
                        <div class="card">
                          <div class="card-body">
                            <?php if ( $images ) { ?>
                              <div class="img" style="background:url(<?php echo esc_url( $images['url'] ); ?>); background-size: cover; background-repeat: no-repeat;">
                            <?php } else { ?>
                              <div class="img">
                            <?php } ?>
                          </div>
                        <div class="description">
                          <?php $link = get_sub_field( 'link' ); 
                            if ( $link ) : ?>
                              <a class="bundle" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                            <?php endif; ?>
                            <ul class="info-list">
                              <?php 
                                if(get_sub_field('data_time__to')) { ?>
                                  <li class="info-item info-data"><?php the_sub_field( 'data_time__to' ); ?></li>
                                <?php }
                                if ( have_rows( 'icons_list' ) ) : 
                                  while ( have_rows( 'icons_list' ) ) : the_row(); 
                                  if(!empty(get_sub_field('list_title')) && !empty(get_sub_field('after_title_text'))) { ?>
                                    <li class="info-item info-time">
                                      <div class="text-item"><?php the_sub_field( 'list_title' ); ?><span><?php the_sub_field( 'after_title_text' ); ?></span>
                                      </div>
                                    </li>
                                  <?php }
                                endwhile; 
                              endif; 
                              if(get_sub_field('earth_button')) { ?>
                                <li class="info-item check-time"><?php the_sub_field( 'earth_button' ); ?></li>
                              <?php }
                              if(get_sub_field('status')) { ?>
                                <li class="info-item virtual-workshop"><?php the_sub_field( 'status' ); ?></li>
                              <?php }?>
                            </ul>
                      </div>
                    </div>
                    <div class="card-footer">
                      <?php 
                        if(get_sub_field('footer_content')):
                          the_sub_field('footer_content');
                        endif;
                      ?>
                    </div>
                    <?php endwhile; 
                     endif; ?>
                  </div>
                </div>

                <?php } elseif( get_row_layout() == 'section_3' ) { 
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <div id="<?php the_sub_field( 'menu_scroll' ); ?>" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                    <?php endwhile; ?>
                  <?php else :  ?>
                    <div id="course_basics" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                  <?php endif; 
                  ?>
                    <div class="img">
                      <?php $images = get_sub_field( 'images' ); ?>
                      <?php if ( $images ) : ?>
                        <img src="<?php echo esc_url( $images['url'] ); ?>" alt="<?php echo esc_attr( $images['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="text">
                      <?php 
                        if(get_sub_field('title')) { ?>
                          <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                        <?php }
                        if(get_sub_field('content')) {
                          the_sub_field('content');
                        }
                      ?>
                    </div>
                </div>
                <?php } elseif( get_row_layout() == 'section_4' ) { 
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <div id="<?php the_sub_field( 'menu_scroll' ); ?>" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                    <?php endwhile; ?>
                  <?php else :  ?>
                    <div id="facilitators" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                  <?php endif; 
                    if(get_sub_field('title')) { ?>
                      <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                    <?php }
                  ?>
                  <?php $team = get_sub_field( 'team' ); ?>
                  <?php if ( $team ) : ?>
                    <?php $post = $team; ?>
                    <?php setup_postdata( $post ); ?>
                    <div class="teacher">
                      <div class="img">
                        <?php
                        
                        if(get_the_post_thumbnail_url(get_the_ID())){ ?>
           
                          <img src="<?= get_the_post_thumbnail_url( get_the_ID() ); ?>" alt=''>
            
                        <?php } ?>
                      </div>
                      <div class="text">
                        <h3 class="heading"><?php the_title(); ?></h3>
                        <ul class="skills">
                          <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                              foreach($posttags as $tag) {
                                echo'<li>' . $tag->name . '</li>'; 
                              }
                            }
                          ?>
                        </ul>
                        <?php the_content(); ?>
                      </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                  </div>
                <?php } ?>
                <?php endwhile;
                endif;
                ?>
              </div>
            </div>
          </section>
<?php 
  if(have_rows('workshop')):
  while(have_rows('workshop')) : the_row(); 
  if(get_row_layout() == 'section_5' ) { ?>
    <?php $bg_phone = get_sub_field( 'bg_phone' ); ?>
			<?php if ( $bg_phone ) { 
        if ( have_rows( 'navigation_menu' ) ) : 
          while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
            <section id="<?php the_sub_field( 'menu_scroll' ); ?>" class="workshop__3 scroll__init" style="background:url(<?php echo esc_url( $bg_phone['url'] ); ?>); background-size: cover; background-repeat: no-repeat;">
          <?php endwhile; ?>
        <?php else :  ?>
          <section id="innercamp_membership" class="workshop__3 scroll__init" style="background:url(<?php echo esc_url( $bg_phone['url'] ); ?>); background-size: cover; background-repeat: no-repeat;">
        <?php endif; 
        } else { ?>
				<section id="innercamp_membership" class="workshop__3 scroll__init">
			<?php } ?>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl9 offset-xl3">
          <?php $phone_image_background = get_sub_field( 'phone_image_background' ); ?>
			<?php if ( $phone_image_background ) { ?>
        <div class="iphone-banner" style="background:url(<?php echo esc_url( $phone_image_background['url'] ); ?>); background-size: cover; background-repeat: no-repeat;"></div>
      <?php } else { ?>
        <div class="iphone-banner"></div>
      <?php } ?>
      <?php $phone_image = get_sub_field( 'phone_image' ); ?>
			<?php if ( $phone_image ) : ?>
				<img class="iphone-13" src="<?php echo esc_url( $phone_image['url'] ); ?>" alt="<?php echo esc_attr( $phone_image['alt'] ); ?>" />
			<?php endif; ?>
            
            <div class="join-now-wrapper">
              <div class="join-now">
                <?php 
                  if(get_sub_field('title')) { ?>
                    <h3 class="heading"><?php the_sub_field( 'title' ); ?></h3>
                  <?php }
                  $link = get_sub_field( 'link' ); ?>
                  <?php if ( $link ) : ?>
                    <a class="bundle" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                  <?php endif; 
                ?>
              </div>
              <div class="join-now-arrow"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl9 offset-xl3">
            <div class="trial">
              <?php 
              if(get_sub_field('free_trial_block_title')) { ?>
                <h2 class="heading"><span><?php the_sub_field( 'free_trial_block_title' ); ?></span></h2>
              <?php }
              ?>
              <div class="trial-box">
                <div class="text">
                  <?php 
                  if(get_sub_field('product_price_per_month')) {
                    the_sub_field( 'product_price_per_month' );
                  }
                  ?>
                  <p><strong>OR</strong></p>
                  <?php 
                    if(get_sub_field('price_per_year')) {
                      the_sub_field( 'price_per_year' );
                    }
                  ?>              
                </div>
                <?php 
                  $button= get_sub_field( 'button' ); ?>
                  <?php if ( $button ) : ?>
                    <a class="bundle" href="<?php echo esc_url($button['url'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                  <?php endif; 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }
endwhile;
endif;
?>
<section class="workshop__4">
  <div class="container"></div>
</section>
<?php 
  if(have_rows('workshop')):
    while(have_rows('workshop')) : the_row(); 
      if ( get_row_layout() == 'section_6' ) { ?>
        <section class="workshop__5">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l6 xl6">
              <?php 
                if(get_sub_field('section_title')) { ?>
                  <h2 class="title"><?php the_sub_field( 'section_title' ); ?></h2>
                <?php }
              ?>
              <div class="bot__">
                <?php 
                  if(get_sub_field('price_per_day')) { ?>
                    <div class="bord-bundle"><?php the_sub_field( 'price_per_day' ); ?></div>
                  <?php } 
                ?>
              </div>
            </div>
          </div>
        </div>
        <?php 
          $video_background = get_sub_field( 'video_background' );
          if($video_background) { ?>
            <video playsinline="" autoplay="" muted="" loop="" preload="none">
            <source src="<?php echo $video_background['url']; ?>" type="video/mp4">
          </video>
          <?php }
        ?>
        </section>        
      <?php } elseif(get_row_layout() == 'section_7') { 
        if ( have_rows( 'navigation_menu' ) ) : 
          while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
            <section id="<?php the_sub_field( 'menu_scroll' ); ?>" class="workshop__6 scroll__init">
          <?php endwhile; ?>
        <?php else :  ?>
          <section id="how-to-get-ready" class="workshop__6 scroll__init">
        <?php endif; 
        ?>       
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php 
                  if(get_sub_field('title')) { ?>
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <?php }
                ?>
                <div class="list-and-photo">
                  <?php if ( have_rows( 'list' ) ) : ?>
                    <ul class="list">
                      <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                        <li class="list-item"><?php the_sub_field( 'list_item' ); ?></li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
                  <div class="img">
                    <?php $images = get_sub_field( 'images' ); 
                    if ( $images ) : ?>
                      <img src="<?php echo esc_url( $images['url'] ); ?>" alt="<?php echo esc_attr( $images['alt'] ); ?>" />
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php } elseif (get_row_layout() == 'section_8' ) {  ?>
        <section class="workshop__7">
          <div class="container">
            <div class="row">
              <div class="col m12 s12 l12 xl9 offset-xl3">
                <?php 
                if(get_sub_field('title')) { ?>
                  <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <?php }
                  if(get_sub_field('text')) :
                    the_sub_field( 'text' ); 
                  endif;

                  $link = get_sub_field( 'link' );
                  if ( $link ) : ?>
                    <a class="bundle" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                  <?php endif; 
                ?>
              </div>
            </div>
          </div>
        </section>
      <?php } elseif (get_row_layout() == 'section_9') { ?>
        <section class="workshop__8">
          <div class="container">
            <div class="row">
              <?php 
                if ( have_rows( 'navigation_menu' ) ) : 
                  while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                    <div id="<?php the_sub_field( 'menu_scroll' ); ?>" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                  <?php endwhile; ?>
                <?php else :  ?>
                  <div id="workshop-participant-consent" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                <?php endif; 
              
                  if(get_sub_field('title')) { ?>
                    <h3 class="heading"><?php the_sub_field('title'); ?></h3>
                  <?php }
                  if ( have_rows( 'box_list' ) ) : ?>
                    <ul class="agreement-list">
                    <?php while ( have_rows( 'box_list' ) ) : the_row(); ?>
                    <li class="agreement-item">
                      <div class="agreement-text">
                      <?php the_sub_field( 'paragraph' ); ?>
                      </div>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                  <?php endif; 
                ?>
              </div>      
            </div>
          </div>
        </section>
      <?php } elseif (get_row_layout() == 'section_10') { ?>
        <section class="workshop__9">
          <div class="container">
            <div class="row">
              <?php 
                if ( have_rows( 'navigation_menu' ) ) : 
                  while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                    <div id="<?php the_sub_field( 'menu_scroll' ); ?>" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                  <?php endwhile; ?>
                <?php else :  ?>
                  <div id="faq" class="col m12 s12 l12 xl9 offset-xl3 scroll__init">
                <?php endif; 
                  if(get_sub_field('title')) { ?>
                    <h2 class="title"><?php the_sub_field('title'); ?></h2>
                  <?php }
                  if ( have_rows( 'box_list' ) ) : 
                    while ( have_rows( 'box_list' ) ) : the_row(); ?>
                    <div class="dropdown">
                      <button class="drop-button" type="button"><?php the_sub_field( 'title' ); ?></button>
                      <p class="drop-text">
                      <?php the_sub_field( 'paragraph' ); ?>
                      </p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>
      <?php }
    endwhile;
  endif;
  ?>
<?php get_footer();