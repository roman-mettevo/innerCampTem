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
                  <?php 
                  if ( $link ) : ?>
                    <a class="bundle" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                  <?php 
                  endif; 
                ?> 
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
            <?php if ( have_rows( 'workshop' ) ): ?>
              <?php while ( have_rows( 'workshop' ) ) : the_row(); ?>
                <?php if ( get_row_layout() == 'section_1' ) : ?>
                  <?php 
                    $nav_link = get_sub_field( 'button_navigation' ); ?>
                    <?php 
                    if ( $nav_link ) : ?>
                      <a class="bundle" href="<?php echo esc_url( $nav_link['url'] ); ?>"><?php echo esc_html( $nav_link['title'] ); ?></a>
                    <?php endif; 
                endif;
              endwhile;
            endif; ?>

          <ul >
          <?php 
            if(have_rows('workshop')):
              while(have_rows('workshop')) : the_row(); 
                if( get_row_layout() == 'section_2' ){ 
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                } else if(get_row_layout() == 'section_3') {
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                } elseif( get_row_layout() == 'section_4' ) {
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                } elseif( get_row_layout() == 'section_5' ) {
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                } elseif(get_row_layout() == 'section_7') {
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                } elseif (get_row_layout() == 'section_9') {
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                } elseif (get_row_layout() == 'section_10') {
                  if ( have_rows( 'navigation_menu' ) ) : 
                    while ( have_rows( 'navigation_menu' ) ) : the_row(); ?>
                      <li><a href="#<?php the_sub_field( 'menu_scroll' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                    <?php endwhile;
                  endif;
                }
            endwhile;
            endif;
          ?>
              
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
                                if(get_sub_field('data_time')) { ?>
                                  <li class="info-item info-data"><?php the_sub_field( 'data_time' ); ?></li>
                                <?php }?>
                                
                                  
                                    <li class="info-item info-time">
                                      <div class="text-item">
                                        <?php the_sub_field( 'start_time' ); ?> - 
                                        <?php the_sub_field( 'end_time' ); ?>
                                        <span><?php the_sub_field( 'after_title_text' ); ?></span>
                                      </div>
                                    </li>
                                  <li data-start="<?php the_sub_field( 'data_time__to' ); ?>" data-end="<?php the_sub_field( 'data_time__do' ); ?>"class="info-item check-time get-time_js" ><?php echo __('Check my local time here'); ?></li>
                                    
                              <?php 
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
                        <div class="coach-description">
                          <?php the_content(); ?>
                        </div>
                        
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
                  $second_link = get_sub_field( 'second_link' ); ?>
                  <?php if ( $second_link ) : ?>
                    <a class="bundle" href="<?php echo esc_url( $second_link['url'] ); ?>"><?php echo esc_html( $second_link['title'] ); ?></a>
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
                    <div class="bundle" data-fancybox data-src="#modal-3" ><?php echo esc_html( $link['title'] ); ?></div>
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
  <style>
    .left__menu__scroll .bundle {
      font: 700 14px/33px var(--ob);
    }
    @media (min-width: 1200px){
      .left__menu__scroll .bundle:after {
        width: 30px;
      }
    }
    
    @media (min-width: 320px) and (max-width: 1199px) {
      .teacher .text {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
    }
      
  section.workshop__8 {
    padding-bottom: 0;
  }
  section.workshop__8 .col:first-child {
    margin-bottom: 171px;
  }
  @media(max-width: 600px) {
    section.workshop__8 .col:first-child {
      margin-bottom: 121px;
    }
  }

  .workshop__9 {
    margin-left: 15px;
    padding-bottom: 183px;
  }
  @media(max-width: 1800px) {
    .workshop__9 {
      margin-left: 0;
    }
    
  }

  #faq .title {
    margin-bottom: 49px;
  }
  @media(max-width: 600px) {
    .workshop__9 {
      padding-bottom: 117px;
    }

    #faq .title {
      margin-bottom: 28px;
      font: 400 28px/38px var(--p);
    }
  }

  .dropdown {
    background: #FFFFFF;
    border-radius: 80px;
    width: 100%;
    margin-bottom: 30px;
    padding: 40px 51px;
    position: relative;
  }

  .dropdown::after {
    position: absolute;
    border: 1px solid #B68742;
    border-radius: 17px;
    width: 66px;
    height: 66px;
    content: '';
    right: 51px;
    top: 29px;
    background: url(<?php echo get_template_directory_uri(); ?>/img/faq/chevron-down.svg);
    background-repeat: no-repeat;
    background-position: center center;
  }
    @media(max-width: 600px) {
      .dropdown::after {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        top: 16px;
        right: 14px;
      }
      
    }

    .dropdown.active::after {
      transform: rotate(180deg);
    }
    .dropdown:last-child {
      margin-bottom: 0;
    }

    @media(max-width: 600px) {
      .dropdown {
        border-radius: 14px;
        padding: 23px 15px;
        margin-bottom: 23px;
      }

      .row #faq.col {
        padding: 0 31px;
      }
    }

    .drop-button {
      background: transparent;
      outline: none;
      font: 700 24px/40px var(--ob);
      letter-spacing: 0.005em;
      color: #424F44;
      width: 100%;
      text-align: left;
    }

    @media(max-width: 600px) {
      .drop-button {
        font-size: 14px;
        line-height: 22px;
        padding-left: 1px;
        padding-right: 40px;
      }
    }

    .dropdown .drop-text {
      display: none;
    }

    .dropdown.active .drop-text {
      display: block;
      width: 100%;
      text-align: left;
      padding-left: 3px;
      padding-right: 70px;
      font: 400 24px/40px var(--o);
      letter-spacing: 0.005em;
      color: #424F44;
    }

    @media(max-width: 600px) {
      .dropdown.active .drop-text {
        font-size: 14px;
        line-height: 22px;
      }
    }
  </style>
  <!-- //// MODAL ////-->
    <div class="modal__style modal" id="modal-3" style="display: none;">
      <div class="content_modal">
          <!-- Calendly inline widget begin -->
          <div class="calendly-inline-widget" data-url="https://calendly.com/d/dpg-9q6-b4v/call-with-innercamp" style="min-width:550px;height:850px;"></div>
          <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
          <!-- Calendly inline widget end -->
      </div>
    </div>
<?php get_footer();