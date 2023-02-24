<?php
/**
 * Template Name: -- PRODUCT -- 2.2  Retreat Page*
 * Template Post Type: product, page, post
 */
get_header(); 
$product = wc_get_product( $post->ID );
$product_id = $post->ID;
?>


<?php 
if (have_rows('retreat_pages')):   
  while (have_rows('retreat_pages')) : the_row();
    if (get_row_layout() == 'section_1') : ?>
      <section class="retreat__0" data-menuscroll <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <h1 class="title"><?php the_sub_field('title'); ?></h1>
              <?php
              if (have_rows('box_list')) { ?>
                <div class="battoms__"><?php
                  while (have_rows('box_list')) : the_row(); ?>
                    <a class="tantra"><?php the_sub_field('main_category'); ?></a>
                    <a class="data"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></a>
                    <a class="loc"><?php the_field( 'location', $product_id ); ?></a>
                  <?php
                  endwhile; ?>
                </div>
                <?php
              } ?>
              <div class="content__">
                <?php 
                  if (get_sub_field('content')) :
                    the_sub_field('content'); 
                  endif;
                ?>
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
    <?php endif;
    endwhile;
  endif ?>

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
                <?php if ( have_rows( 'retreat_pages' ) ): 
                  while ( have_rows( 'retreat_pages' ) ) : the_row();
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
                    } ?>
                  <?php endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

      <section class="retreat__1">
        <div class="container">
          <div class="row"> 
            <?php 
              if (have_rows('retreat_pages')):   
                while (have_rows('retreat_pages')) : the_row(); ?>
                <?php if (get_row_layout() == 'section_2') : ?> 
                  <?php if ( have_rows( 'navigation' ) ) : ?>
                    <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="col m12 s12 l12 xl9 offset-xl3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3">
                  <?php endif; ?>
                    <div class="block__top">
                      <div class="box__img">
                      <?php $image = get_sub_field( 'image' ); ?>
                      <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                      <?php endif; ?>
                        <!-- <img src="img/retreat_string2.png" alt="#"> -->
                      </div>
                      
                      <div class="box__content">
                        <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                        <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                        <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                        <input type="hidden" name="action" value="addcart_prod">
                          <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Start my journey'); ?></a>
                        <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                      </form>                  
                        <hr>
                        <span class="data"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></span>
                        <span class="loc"><?php the_field( 'location', $product_id ); ?></span>
                        <div class="status"><?php the_field( 'where', $product_id ); ?></div>
                      </div>
                    </div>
                  </div>
                <?php elseif(get_row_layout() == 'section_3') : ?>
                  <?php if ( have_rows( 'navigation' ) ) : ?>
                    <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php endif; ?>
                    <div class="twix2">
                      <div class="picture2">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                        <!-- <img src="img/retreat_fot22.png"> -->
                      </div>
                      <div class="blog2">
                        <h4 class="title"><?php the_sub_field( 'title' ); ?></h4>
                        <?php the_sub_field( 'content' ); ?>
                      </div>
                    </div>
                  </div>
                <?php elseif(get_row_layout() == 'section_4') : ?>
                  <?php if ( have_rows( 'navigation' ) ) : ?>
                    <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php endif; ?>
                    <h4 class="title"><?php the_sub_field( 'title' ); ?></h4>
                    <div class="twix2">
                      <div class="blog3">
                        <?php the_sub_field( 'content' ); ?>
                      </div>
                      <div class="picture3">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>                 
                      </div>
              </div>
            </div>
          <?php endif; ?>
          <?php endwhile;
        endif; 
        ?>
        </div>
      </div>
    </section>
    <?php 
      if (have_rows('retreat_pages')):   
        while (have_rows('retreat_pages')) : the_row(); ?>
          <?php if (get_row_layout() == 'section_5') : ?> 
            <?php if ( have_rows( 'navigation' ) ) : ?>
              <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                <section class="retreat__2 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
              <?php endwhile; ?>
              <?php else : ?>
                <section class="retreat__2">
            <?php endif; ?>
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l6 xl6 offset-xl3 offset-l3">
                    <?php 
                      if(get_sub_field('title')) { ?>
                        <h2 class="title"><?php the_sub_field('title') ?></h2>
                      <?php }
                    ?>
                  </div>
                  <div class="col m12 s12 l3 xl3">
                    <?php 
                    if(get_sub_field('label')) { ?>
                      <p><?php the_sub_field( 'label' ); ?></p>
                    <?php } ?>
                    <div class="box__img">
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
                </div>
              
                <?php if ( have_rows( 'program_schedule' ) ) : ?>
                  <?php while ( have_rows( 'program_schedule' ) ) : the_row(); ?>
                    <div class="row">
                      <?php if ( have_rows( 'first_item' ) ) : ?>
                        <?php while ( have_rows( 'first_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l4 xl3 offset-xl3">
                            <div class="box__">
                              <div class="picture3">
                                <?php $image = get_sub_field( 'first_item_image' ); ?>
                                <?php if( $image ) : ?>
                                  <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <?php 
                                  if(get_sub_field('first_day_title')) { ?>
                                    <div class="title__"><?php the_sub_field( 'first_day_title' ); ?></div>
                                  <?php }
                                ?>
                                <?php if ( have_rows( 'first_schedule' ) ) : ?>
                                  <ul class="reborn">
                                    <?php while ( have_rows( 'first_schedule' ) ) : the_row(); ?>
                                      <li> 
                                        <span class="data"><?php the_sub_field( 'first_item_time' ); ?></span>
                                        <p><?php the_sub_field( 'first_item_description' ); ?></p>
                                      </li>
                                    <?php endwhile; ?>
                                  </ul>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                      <?php if ( have_rows( 'second_item' ) ) : ?>
                        <?php while ( have_rows( 'second_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l8 xl6">
                            <div class="box__">
                              <div class="picture3">
                                <?php $second_image = get_sub_field( 'second_item_image' ); ?>
                                <?php if( $second_image ) : ?>
                                  <img src="<?php echo esc_url( $second_image['url'] ); ?>" alt="<?php echo esc_attr( $second_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <div class="title__"><?php the_sub_field( 'second_item_day_title' ); ?></div>
                                <?php if ( have_rows( 'second_item_schedule' ) ) : ?>
                                  <ul class="reborn">
                                    <?php while ( have_rows( 'second_item_schedule' ) ) : the_row(); ?>
                                      <li> 
                                        <span class="data"><?php the_sub_field( 'second_item_time' ); ?></span>
                                        <p><?php the_sub_field( 'second_item_description' ); ?></p>
                                      </li>
                                    <?php endwhile; ?>
                                  </ul>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                    <div class="row">
                      <?php if ( have_rows( 'third_item' ) ) : ?>
                        <?php while ( have_rows( 'third_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l6 xl6 offset-xl3">
                            <div class="box__">
                              <div class="picture3">
                                <?php $third_image = get_sub_field( 'third_item_image' ); ?>
                                <?php if( $third_image ) : ?>
                                  <img src="<?php echo esc_url( $third_image['url'] ); ?>" alt="<?php echo esc_attr( $third_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <?php 
                                if(get_sub_field('third_item_day_title')) { ?>
                                  <div class="title__"><?php the_sub_field( 'third_item_day_title' ); ?></div>
                                <?php } 
                                if ( have_rows( 'third_item_schedule' ) ) : ?>
                                  <ul class="reborn">
                                    <?php while ( have_rows( 'third_item_schedule' ) ) : the_row(); ?>
                                      <li>
                                        <span class="data"><?php the_sub_field( 'third_item_time' ); ?></span>
                                        <p><?php the_sub_field( 'third_item_description' ); ?>)</p>
                                      </li>
                                    <?php endwhile; ?>
                                  </ul>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                      <?php if ( have_rows( 'fourth_item' ) ) : ?>
                        <?php while ( have_rows( 'fourth_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l3 xl3">
                            <div class="box__">
                              <div class="picture3">
                                <?php $fourth_item_image = get_sub_field( 'fourth_item_image' ); ?>
                                <?php if ( $fourth_item_image ) : ?>
                                  <img src="<?php echo esc_url( $fourth_item_image['url'] ); ?>" alt="<?php echo esc_attr( $fourth_item_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <div class="title__"><?php the_sub_field( 'fourth_item_day_title' ); ?></div>
                                  <?php if ( have_rows( 'fourth_item_schedule' ) ) : ?>
                                    <ul class="reborn">
                                      <?php while ( have_rows( 'fourth_item_schedule' ) ) : the_row(); ?>
                                        <li>
                                          <span class="data"><?php the_sub_field( 'fourth_item_time' ); ?></span>
                                          <p><?php the_sub_field( 'fourth_item_description' ); ?></p>
                                        </li>
                                      <?php endwhile; ?>
                                    </ul>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </section>
          <?php elseif(get_row_layout() == 'section_6') : ?>
            <section class="retreat__3">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                    <div class="kacao">
                      <h4 class="title__"><?php the_sub_field( 'title' ); ?>T</span></h4>
                      <div class="box__">
                        <?php $top_image = get_sub_field( 'top_image' ); ?>
                        <?php if ( $top_image ) : ?>
                          <img src="<?php echo esc_url( $top_image['url'] ); ?>" alt="<?php echo esc_attr( $top_image['alt'] ); ?>" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="mix__">
                      <div class="tea__">
                        <?php $bottom_image = get_sub_field( 'bottom_image' ); ?>
                        <?php if ( $bottom_image ) : ?>
                          <img src="<?php echo esc_url( $bottom_image['url'] ); ?>" alt="<?php echo esc_attr( $bottom_image['alt'] ); ?>" />
                        <?php endif; ?>
                      </div>
                      <div class="box__">
                        <?php the_sub_field( 'text' ); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <?php endif; ?>
        <?php endwhile;
      endif; 
    ?>
    <section class="retreat__4">
      <div class="container">
        <div class="row">
          <?php if (have_rows('retreat_pages')):   
            while (have_rows('retreat_pages')) : the_row(); ?>
              <?php if (get_row_layout() == 'section_7') : ?> 
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                <?php endif; ?>

                  <?php 
                  if(get_sub_field('title')) { ?>
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <?php } ?>
                </div>
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <?php $facilitators = get_sub_field( 'facilitators' ); ?>
                  <?php if ( $facilitators ) : ?>
                    <?php foreach ( $facilitators as $post ) :  ?>
                      <?php setup_postdata( $post ); ?>
                      <div class="post__user">
                        <div class="img__">
                          <?php
                            if(get_the_post_thumbnail_url(get_the_ID())){ ?>
                              <img src="<?= get_the_post_thumbnail_url( get_the_ID() ); ?>" alt=''>
                            <?php } 
                          ?>
                        </div>
                      <div class="cont__">
                        <div class="title__"><?php the_title(); ?></div>
                        <ul>
                          <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                              foreach($posttags as $tag) {
                                echo '<li><p class="teg">' . $tag->name . '</p></li>'; 
                              }
                            }
                          ?>
                        </ul>
                        <?php the_content(); ?>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                </div>
              <?php elseif(get_row_layout() == 'section_8') : ?>
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <section class="col m12 s12 l9 xl9 offset-xl3 offset-l3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                <?php endif; ?>
                  <div class="venue">
                    <div class="block__">
                      <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                      <p class="info"><?php the_sub_field( 'subfield_text' ); ?></p>
                      <div class="block__dashed">
                      <?php the_sub_field( 'content' ); ?>
                    </div>
                    <div class="box_widt">
                        <p><?php the_field( 'address', $product_id ); ?></p>
                    </div>
                  </div>
                  <div class="block__"> 
                    <div class="box__img">
                      <?php $top_image = get_sub_field( 'top_image' ); ?>
                      <?php if ( $top_image ) : ?>
                        <img src="<?php echo esc_url( $top_image['url'] ); ?>" alt="<?php echo esc_attr( $top_image['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="box__img">
                      <?php $bottom_image = get_sub_field( 'bottom_image' ); ?>
                      <?php if ( $bottom_image ) : ?>
                        <img src="<?php echo esc_url( $bottom_image['url'] ); ?>" alt="<?php echo esc_attr( $bottom_image['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php elseif(get_row_layout() == 'section_9') : ?>
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="retreat__map splide">
                    <div class="splide__track">
                        <?php if ( have_rows( 'image_and_map_slider' ) ) : ?>
                          <ul class="splide__list">
                            <?php while ( have_rows( 'image_and_map_slider' ) ) : the_row(); ?>
                            <li class="splide__slide">
                              <div class="box__">
                                <?php $slide_image = get_sub_field( 'slide_image' ); 
                                    if ( $slide_image ) : ?>
                                    <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />
                                  <?php endif; ?>
                                <div class="map">
                                  <iframe src="<?php the_sub_field( 'coordinates' ); ?>" width="347" height="190" style="border:0;border-radius:34px;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                              </div>
                            </li>
                            <?php endwhile; ?>
                          </ul>
                        <?php endif; ?>
                    </div>
                  </div>
                  <div class="arrows"><a class="left_r previous-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                    </svg></a><a class="right_r next-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                    </svg></a>
                  </div>
                </div> 
            <?php endif; ?>
          <?php endwhile;
        endif; ?>
        </div>
      </div>
    </section>

    <?php if (have_rows('retreat_pages')):   
      while (have_rows('retreat_pages')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_10') : ?> 
          <?php if ( have_rows( 'navigation' ) ) : ?>
            <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <section class="retreat__5 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
            <?php endwhile; ?>
            <?php else : ?>
              <section class="retreat__5">
          <?php endif; ?>

          
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="middle"> 
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                    <?php the_sub_field( 'content' ); ?>
                    <div class="battoms">
                      <a class="bundle" data-fancybox data-src="#modal-3"><?php the_sub_field( 'link_name' ); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php elseif(get_row_layout() == 'section_11') : ?> 
          <?php if ( have_rows( 'navigation' ) ) : ?>
            <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <section class="retreat__7 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
            <?php endwhile; ?>
            <?php else : ?>
              <section class="retreat__7">
          <?php endif; ?>
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="remix">
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                    <div class="whitebuttom">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_k.svg" alt="logo">
                      <?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?>
                    </div>
                    <img src="<?= get_template_directory_uri(); ?>/img/retreat_cxf.svg" alt="logo">
                    <h4><?php echo __('Choose Type of Accommodation'); ?></h4>
                    <div class="boxi">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                      <p><?php echo __('Single room'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field( 'single_room_price' ); ?></p>
                    </div>
                    <div class="boxi">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                      <p><?php echo __('Shared double room'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field( 'double_room_price' ); ?></p>
                    </div>
                    <div class="box2">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad2.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad2.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad2.svg" alt="bad">
                      <p><?php echo __('Shared glamping'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field( 'glamping_price' ); ?></p>
                    </div>
                    <div class="battoms">
                      <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                        <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                        <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                        <input type="hidden" name="action" value="addcart_prod">
                          <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Proceed to checkout'); ?></a>
                        <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 
          <?php elseif(get_row_layout() == 'section_12') : ?>  
            <section class="retreat__8">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twix2">
                  <?php if ( have_rows( 'left_text_block' ) ) : ?>
                    <div class="block__">
                      <?php while ( have_rows( 'left_text_block' ) ) : the_row(); ?>
                      <h4 class="title"><?php the_sub_field( 'left_block_title' ); ?></h4>
                      <div class="blog3">
                        <?php the_sub_field( 'left_block_content' ); ?>
                      </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  <?php if ( have_rows( 'right_text_block' ) ) : ?>
                    <div class="block__">
                      <?php while ( have_rows( 'right_text_block' ) ) : the_row(); ?>
                        <h4 class="title"><?php the_sub_field( 'right_block_title' ); ?></h4>
                        <div class="blog38">
                          <?php the_sub_field( 'right_block_content' ); ?>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  </div>
                  <?php the_sub_field( 'botttom_full_width_block' ); ?>                  
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>
      <?php endwhile;
    endif; ?>


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
  .retreat__0 {
    position: relative;
  }
  .retreat__0::after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background: linear-gradient(0deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
    top: 0;
    left: 0;
  }
</style>
<?php get_footer();
