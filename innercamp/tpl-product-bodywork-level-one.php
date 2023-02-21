<?php
/**
 * Template Name: -- PRODUCT --  2.6 Bodywork Level One*
 * Template Post Type: product, page, post
 */
get_header(); ?>
<?php
if (have_rows('product_bodywork_level_one')): ?>
  <?php
  while (have_rows('product_bodywork_level_one')) : the_row(); ?>
    <?php
    if (get_row_layout() == 'section_1') : ?>
      <section class="bodywork-first__1">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <p class="sub"><?php the_sub_field('sub_title'); ?></p>
              <h2 class="title"><?php the_sub_field('title'); ?></h2>

              <?php

              if (have_rows('list_icon_and_text')) : ?>
                <ul class="short-info-list">
                  <?php
                  $arr_bg = [];
                  $i = 0;
                  while (have_rows('list_icon_and_text')) : the_row();
                    $icon = get_sub_field('icon');
                    $arr_bg[$i] = esc_url($icon['url']);
                    echo ' <style>
                        .short-info-item.bg_' . $i . ':before {
                            background: url(' . esc_url($icon['url']) . ');
                        }
                    </style>'
                    ?>
                    <li class="short-info-item bg_<?php echo $i ?>"><?php the_sub_field('text'); ?></li>

                    <?php
                    $i++;
                  endwhile; ?>
                </ul>
              <?php
              endif; ?>
              <p class="description"><?php the_sub_field('pararaph'); ?></p>

              <a class="bundle" href="#">Book now</a>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_2') : ?>
      <section class="bodywork-first__2" data-menuscroll>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl9 offset-xl3">
              <div class="basic-course-card">
                <div class="couse-img"></div>
                <div class="course-info">
                  <div class="course-price-wrapper">
                    <div class="course-price"><span
                          class="price-label"><?php the_sub_field('price_label'); ?></span><span
                          class="price-quantity"><?php the_sub_field('price'); ?>&euro;</span></div>
                    <a class="bundle" href="#">Start my journey</a>
                  </div>
                  <?php
                  if (have_rows('icon_and_text_list')) : ?>
                    <ul class="course-short-info">
                      <?php
                      $arr_bg = [];
                      $i = 0;
                      while (have_rows('icon_and_text_list')) : the_row();
                        $icon = get_sub_field('icon');
                        $arr_bg[$i] = esc_url($icon['url']);
                        echo '<style>
                        section.bodywork-first__2 .bg_' . $i . ':before {
                            background: url(' . esc_url($icon['url']) . ');
                        }
                    </style>'
                        ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <li class="course-short-info-item  bg_<?php echo $i ?>"><?php the_sub_field('text'); ?></li>
                        <?php
                        $i++;
                      endwhile; ?>
                    </ul>
                  <?php
                  endif; ?>
                  <span class="course-status"><?php the_sub_field('online_course'); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_3') :
      $background_image = get_sub_field('background_image');
      $background_image_url = esc_url($background_image['url']);
      ?>
      <section style="background-image: url(<?php echo $background_image_url ?>);" class="bodywork-first__3">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl9 offset-xl3">
              <div class="text-wrapper">
                <p class="small-description"><?php the_sub_field('left_text_block_1'); ?></p>
                <p class="big-description"><?php the_sub_field('left_text_block_2'); ?></p>
              </div>
              <div class="banner-wrapper">
                <h3 class="heading"><?php the_sub_field('banner_title'); ?></h3>
                <?php
                if (have_rows('banner_labels')) : ?>
                  <ul class="keywords-list">
                    <?php
                    while (have_rows('banner_labels')) : the_row(); ?>
                      <li class="keywords-item"><?php the_sub_field('label'); ?></li>
                    <?php
                    endwhile; ?>
                  </ul>
                <?php
                endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
    elseif (get_row_layout() == 'section_4') : ?>
      <section class="bodywork-first__4">
      <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="accreditation">
            <div class="first-text-part grid-text-item">
              <p class="sub"><?php the_sub_field('sub_title'); ?></p>
              <?php the_sub_field('text'); ?>
            </div>
            <?php $company_logo_1 = get_sub_field('company_logo_1'); ?>
            <?php $company_logo_2 = get_sub_field('company_logo_2'); ?>
            <?php $company_logo_3 = get_sub_field('company_logo_3'); ?>
            <div class="cma-logo-wrapper grid-img-item">
              <?php if ($company_logo_1) : ?>
                <img src="<?php echo esc_url($company_logo_1['url']); ?>"
                     alt="<?php echo esc_attr($company_logo_1['alt']); ?>"/>
              <?php endif; ?>
            </div>
            <div class="ibf-logo-wrapper grid-img-item">
              <?php if ($company_logo_2) : ?>
                <img src="<?php echo esc_url($company_logo_2['url']); ?>"
                     alt="<?php echo esc_attr($company_logo_2['alt']); ?>"/>
              <?php endif; ?>
            </div>
            <div class="cpd-logo-wrapper grid-img-item">
              <?php if ($company_logo_3) : ?>
                <img src="<?php echo esc_url($company_logo_3['url']); ?>"
                     alt="<?php echo esc_attr($company_logo_3['alt']); ?>"/>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>


    <?php
    elseif (get_row_layout() == 'section_5') : ?>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <div class="tahuma-recovery">
            <?php
            if (have_rows('checkboxes_list')) : ?>
              <ul class="tahuma-recovery-list">
                <?php
                while (have_rows('checkboxes_list')) : the_row(); ?>
                  <li class="tahuma-recovery-item"><?php the_sub_field('list_item_text'); ?></li>
                <?php
                endwhile; ?>
              </ul>
            <?php
            endif; ?>
            <div class="img">
              <?php
              $image = get_sub_field('image');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
              <?php
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php elseif (get_row_layout() == 'section_6') : ?>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <div class="about">
            <div class="img">
              <?php
              $image = get_sub_field('image');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
              <?php
              endif; ?>
            </div>
            <div class="about-description">
              <h3 class="heading"><?php the_sub_field('dotted_box_title'); ?></h3>
              <p><?php the_sub_field('dotted_box_text'); ?></p>
              <?php
              $dotted_box_download_button = get_sub_field('dotted_box_download_button');
              if ($dotted_box_download_button) : ?>
                <a class="download-button" href="<?php echo esc_url($dotted_box_download_button['url']); ?>"
                   target="<?php echo esc_attr($dotted_box_download_button['target']); ?>"><?php echo esc_html($dotted_box_download_button['title']); ?></a>
              <?php
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php elseif (get_row_layout() == 'section_7') : ?>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <?php
          if (have_rows('level_blocks')) :
            $i = 1;
            while (have_rows('level_blocks')) : the_row(); ?>
              <div class="level-<?php echo $i ?> level">
                <h3 class="level-label"><?php the_sub_field('level_title'); ?></h3>
                <?php
                $level_notice = get_sub_field('level_notice');
                echo ($level_notice) ? '<span class="published-soon">' . $level_notice . '</span>' : '';
                ?>
                <p><?php the_sub_field('level_text'); ?></p>
              </div>
              <?php
              $i++;
            endwhile; ?>
          <?php
          endif; ?>
          <div class="img">
            <?php
            $image = get_sub_field('image');
            if ($image) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/><?php
            endif; ?>
          </div>
          <div class="about-dropdown">
            <div class="dropdown">
              <p><?php the_sub_field('read_more_text'); ?></p>
              <button class="read-more">Read more<img
                    src="<?= get_template_directory_uri(); ?>/img/corporate/bottom-arrow.svg" alt=""></button>
            </div>
          </div>
        </div>
      </div>
      </div>
      </section>
    <?php elseif (get_row_layout() == 'section_8') : ?>
      <section class="bodywork-first__5">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl9 offset-xl3">
              <div class="header">
                <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <?php
                if (have_rows('facilitated')) :
                  while (have_rows('facilitated')) : the_row(); ?>
                    <div class="faciliated-by"><span><?php the_sub_field('title'); ?></span>
                      <?php
                      if (have_rows('images_list')) : ?>
                        <ul class="faciliated-users-list">
                          <?php
                          while (have_rows('images_list')) : the_row(); ?>
                            <li class="faciliated-users-item">
                              <?php
                              $image = get_sub_field('image');
                              if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                              <?php
                              endif; ?>
                            </li>
                          <?php
                          endwhile; ?>
                        </ul>
                      <?php
                      endif; ?>
                    </div>
                  <?php
                  endwhile; ?>
                <?php
                endif; ?>
              </div>
              <div class="tab-nav">
                <?php
                if (have_rows('tabs_nav_list')) :
                  $i = 0;
                  while (have_rows('tabs_nav_list')) : the_row(); ?>
                    <span
                        class="tab-nav-item <?php echo ($i == 0) ? 'active' : '' ?>"><?php the_sub_field('tab_name'); ?></span>
                    <?php
                    $i++;
                  endwhile;
                endif;
                ?>
              </div>
              <div class="tab-all-content">
                <?php
                if (have_rows('tabs_content')) :
                  $j = 0;
                  while (have_rows('tabs_content')) : the_row(); ?>
                    <div class="tab-content <?php echo ($j === 0) ? 'active' : '' ?>">
                      <h3 class="tab-title"><?php the_sub_field('tab_title'); ?></h3>

                      <?php
                      if (have_rows('module_parts')) : ?>
                        <ul class="module-list">
                          <?php
                          while (have_rows('module_parts')) : the_row(); ?>
                            <li class="module-item">
                              <div class="module-item-header">
                                <p><?php the_sub_field('part_name'); ?></p>
                                <span><?php the_sub_field('hours_quantity'); ?></span>
                              </div>
                              <?php the_sub_field('module_content'); ?>
                            </li>
                          <?php
                          endwhile; ?>
                        </ul>
                      <?php
                      endif; ?>
                    </div>
                  <?php
                  endwhile; ?>
                <?php
                endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php elseif (get_row_layout() == 'section_9') : ?>
      <section class="bodywork-first__6">
        <div class="container">
          <div class="row bodywork-trainers">
            <div class="col m12 s12 l12 xl9 offset-xl3">
              <div class="trainers-header">
                <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <div class="arrows">
                  <a class="left_a previous-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z"
                          fill="#B9B9B9"></path>
                    </svg>
                  </a>
                  <a class="right_a next-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z"
                          fill="#B68742"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <?php
              if (have_rows('slider')) : ?>
                <div class="splide trainers-slider" id="bodywork-trainers-slider">
                  <div class="splide__track">
                    <div class="splide__list">
                      <?php
                      while (have_rows('slider')) : the_row(); ?>
                        <div class="splide__slide trainers-item">
                          <div class="trainer-photo">
                            <?php
                            $image = get_sub_field('image');
                            if ($image) : ?>
                              <img src="<?php echo esc_url($image['url']); ?>"
                                   alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php
                            endif; ?>
                            <span class="trainer-skills-item">InnerCamp founder</span></div>
                          <div class="trainer-about">
                            <h3 class="trainer-name"><?php the_sub_field('name'); ?></h3>
                            <?php
                            if (have_rows('labels_about_me')) : ?>
                              <ul class="trainer-skills-list">
                                <?php
                                while (have_rows('labels_about_me')) : the_row(); ?>
                                  <li class="trainer-skills-item"><?php the_sub_field('label'); ?></li>
                                <?php
                                endwhile; ?>
                              </ul>
                            <?php
                            endif; ?>
                            <div class="trainer-description">
                              <p><?php the_sub_field('about_me'); ?></p>
                            </div>
                          </div>
                        </div>
                      <?php
                      endwhile; ?>
                    </div>
                  </div>
                </div>
              <?php
              endif; ?>
            </div>
          </div>




    <?php elseif (get_row_layout() == 'section_10') : ?>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="certificate">
            <div class="certificate-img">
              <?php
              $image = get_sub_field('image');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
              <?php
              endif; ?>
            </div>
            <div class="certificate-text">
              <?php the_sub_field('title'); ?>
              <?php $button = get_sub_field('button'); ?>
              <?php if ($button) : ?>
                <a class="bundle" href="<?php echo esc_url($button['url']); ?>"
                   target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    <?php elseif (get_row_layout() == 'section_11') : ?>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <div class="brouchure">
            <div class="brouchure-img">
              <?php
              $image_1 = get_sub_field('image_1');
              if ($image_1) : ?>
                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>"/>
              <?php endif; ?>
            </div>
            <div class="brouchure-text">
              <h5 class="download-title"><?php the_sub_field('text_before_download_button'); ?></h5>
              <?php
              $download_button = get_sub_field('download_button');
              if ($download_button) : ?>
                <a class="download-button" href="<?php echo esc_url($download_button['url']); ?>"
                   target="<?php echo esc_attr($download_button['target']); ?>"><?php echo esc_html($download_button['title']); ?></a>
              <?php
              endif; ?>
            </div>
            <div class="brouchure-text">
              <?php the_sub_field('text_in_dotted_block'); ?>
            </div>
            <div class="brouchure-img">
              <?php $image_2 = get_sub_field('image_2');
              if ($image_2) : ?>
                <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>"/>
              <?php
              endif; ?>
            </div>
          </div>
        </div>
      </div>

    <?php
    elseif (get_row_layout() == 'section_12') : ?>
      <?php
      if (have_rows('icons_and_text_list')) : ?>
        <?php
        while (have_rows('icons_and_text_list')) : the_row(); ?>
          <?php $icon = get_sub_field('icon'); ?>
          <?php
          if ($icon) : ?>
            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"/>
          <?php
          endif; ?>
          <?php the_sub_field('text'); ?>
          <?php the_sub_field('notice'); ?>
        <?php
        endwhile; ?>
      <?php
      endif; ?>
      <?php $earth_button = get_sub_field('earth_button'); ?>
      <?php
      if ($earth_button) : ?>
        <a href="<?php echo esc_url($earth_button['url']); ?>"
           target="<?php echo esc_attr($earth_button['target']); ?>"><?php echo esc_html($earth_button['title']); ?></a>
      <?php
      endif; ?>
      <?php
      if (have_rows('checkbox_list')) : ?>
        <?php
        while (have_rows('checkbox_list')) : the_row(); ?>
          <?php the_sub_field('text'); ?>
        <?php
        endwhile; ?>
      <?php
      endif; ?>
      <?php $download_button = get_sub_field('download_button'); ?>
      <?php
      if ($download_button) : ?>
        <a href="<?php echo esc_url($download_button['url']); ?>"
           target="<?php echo esc_attr($download_button['target']); ?>"><?php echo esc_html($download_button['title']); ?></a>
      <?php
      endif; ?>


      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <div class="live-sessions">
            <div class="live-sessions-body">
              <div class="live-sessions-text">
                <ul class="schedule-list">
                  <li class="schedule-item schedule-time">
                    <p>10:30 am &mdash; 12:30 pm CET</p><span>*Amsterdam / Paris time zone</span>
                  </li>
                  <li class="schedule-item schedule-date">
                    <p>Saturdays (biweekly)</p><span>Feb 4, Feb 18, Mar 4, Mar 18, Apr 1, Apr 15 (2023)</span>
                  </li>
                </ul>
                <a data-begin="" class="check-time check-time_js" href="#">Check my local
                  time
                  here</a>
                <ul class="about-schedule-list">
                  <li class="about-schedule-item">6 live sessions</li>
                  <li class="about-schedule-item">Biweekly sessions via Zoom</li>
                  <li class="about-schedule-item">All live sessions are recorded</li>
                </ul>
              </div>
              <?php
              $image = get_sub_field('image');
              $image_url = '';
              if ($image) :
                $image_url = esc_url($image['url']);
              endif;
              ?>
              <div style="background-image: url(<?php echo $image_url ?>);" class="live-sessions-img">
                <a class="download-button" href="#">Download the Timetable</a>
              </div>
            </div>
            <div class="live-sessions-footer"><?php the_sub_field('footer_text'); ?></div>
          </div>
        </div>
      </div>
      </div>
      </section>
    <?php elseif (get_row_layout() == 'section_13') : ?>
      <?php the_sub_field('title'); ?>
      <?php the_sub_field('text_after_title'); ?>
    <?php elseif (get_row_layout() == 'section_14') : ?>
      <?php the_sub_field('title'); ?>
      <?php
      if (have_rows('video_slider')) : ?>
        <?php
        while (have_rows('video_slider')) : the_row(); ?>
          <?php $placeholder_photo = get_sub_field('placeholder_photo'); ?>
          <?php
          if ($placeholder_photo) : ?>
            <img src="<?php echo esc_url($placeholder_photo['url']); ?>"
                 alt="<?php echo esc_attr($placeholder_photo['alt']); ?>"/>
          <?php
          endif; ?>
          <?php the_sub_field('video_url'); ?>
        <?php
        endwhile; ?>
      <?php
      endif; ?>
    <?php elseif (get_row_layout() == 'section_15') : ?>
      <?php the_sub_field('title'); ?>
      <?php
      if (have_rows('checkbox_list')) : ?>
        <?php
        while (have_rows('checkbox_list')) : the_row(); ?>
          <?php the_sub_field('text'); ?>
        <?php
        endwhile; ?>
      <?php
      endif; ?>
      <?php the_sub_field('small_title'); ?>
      <?php the_sub_field('text'); ?>
      <?php $image = get_sub_field('image'); ?>
      <?php
      if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
      <?php
      endif; ?>
    <?php elseif (get_row_layout() == 'section_16') : ?>
      <?php the_sub_field('title'); ?>
    <?php elseif (get_row_layout() == 'section_17') : ?>
      <?php the_sub_field('title'); ?>
    <?php elseif (get_row_layout() == 'section_18') : ?>
      <?php the_sub_field('title'); ?>
      <?php
      if (have_rows('accordions_list')) : ?>
        <?php
        while (have_rows('accordions_list')) : the_row(); ?>
          <?php the_sub_field('accordion_title'); ?>
          <?php the_sub_field('accordion_text'); ?>
        <?php
        endwhile; ?>
      <?php
      endif; ?>
    <?php
    endif; ?>
  <?php
  endwhile; ?>
<?php
endif; ?>


  <section class="bodywork-first__6">
    <div class="container">
      <div class="row bodywork-trainers">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="trainers-header">
            <h2 class="title">The training is facilitated by</h2>
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
          <div class="splide trainers-slider" id="bodywork-trainers-slider">
            <div class="splide__track">
              <div class="splide__list">
                <div class="splide__slide trainers-item">
                  <div class="trainer-photo"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/trainer-1.jpg" alt=""><span
                        class="trainer-skills-item">InnerCamp founder</span></div>
                  <div class="trainer-about">
                    <h3 class="trainer-name">Alexis Alcal&aacute;</h3>
                    <ul class="trainer-skills-list">
                      <li class="trainer-skills-item">InnerCamp founder</li>
                      <li class="trainer-skills-item">Holistic coach</li>
                      <li class="trainer-skills-item">Breathwork master</li>
                      <li class="trainer-skills-item">Tantra teacher</li>
                    </ul>
                    <div class="trainer-description">
                      <p>
                        Certified executive and personal coach, breathwork master and tantra
                        teacher who intuitively uncovers peoples&rsquo; potential so that they feel
                        empowered to unleash that power into their lives and the world. Alexis&rsquo;
                        work revolves around people coaching in different spheres of life. He
                        has worked with different companies across Europe, Africa and Asia as a
                        trainer, mentor, manager and coach. He is someone whose life graph took
                        an astounding turnaround when he changed his own life with the method he
                        created.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide trainers-item">
                  <div class="trainer-photo"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/trainer-1.jpg" alt=""><span
                        class="trainer-skills-item">InnerCamp founder</span></div>
                  <div class="trainer-about">
                    <h3 class="trainer-name">Alexis Alcal&aacute;</h3>
                    <ul class="trainer-skills-list">
                      <li class="trainer-skills-item">InnerCamp founder</li>
                      <li class="trainer-skills-item">Holistic coach</li>
                      <li class="trainer-skills-item">Breathwork master</li>
                      <li class="trainer-skills-item">Tantra teacher</li>
                    </ul>
                    <div class="trainer-description">
                      <p>
                        Certified executive and personal coach, breathwork master and tantra
                        teacher who intuitively uncovers peoples&rsquo; potential so that they feel
                        empowered to unleash that power into their lives and the world. Alexis&rsquo;
                        work revolves around people coaching in different spheres of life. He
                        has worked with different companies across Europe, Africa and Asia as a
                        trainer, mentor, manager and coach. He is someone whose life graph took
                        an astounding turnaround when he changed his own life with the method he
                        created.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide trainers-item">
                  <div class="trainer-photo"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/trainer-1.jpg" alt=""><span
                        class="trainer-skills-item">InnerCamp founder</span></div>
                  <div class="trainer-about">
                    <h3 class="trainer-name">Alexis Alcal&aacute;</h3>
                    <ul class="trainer-skills-list">
                      <li class="trainer-skills-item">InnerCamp founder</li>
                      <li class="trainer-skills-item">Holistic coach</li>
                      <li class="trainer-skills-item">Breathwork master</li>
                      <li class="trainer-skills-item">Tantra teacher</li>
                    </ul>
                    <div class="trainer-description">
                      <p>
                        Certified executive and personal coach, breathwork master and tantra
                        teacher who intuitively uncovers peoples&rsquo; potential so that they feel
                        empowered to unleash that power into their lives and the world. Alexis&rsquo;
                        work revolves around people coaching in different spheres of life. He
                        has worked with different companies across Europe, Africa and Asia as a
                        trainer, mentor, manager and coach. He is someone whose life graph took
                        an astounding turnaround when he changed his own life with the method he
                        created.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide trainers-item">
                  <div class="trainer-photo"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/trainer-1.jpg" alt=""><span
                        class="trainer-skills-item">InnerCamp founder</span></div>
                  <div class="trainer-about">
                    <h3 class="trainer-name">Alexis Alcal&aacute;</h3>
                    <ul class="trainer-skills-list">
                      <li class="trainer-skills-item">InnerCamp founder</li>
                      <li class="trainer-skills-item">Holistic coach</li>
                      <li class="trainer-skills-item">Breathwork master</li>
                      <li class="trainer-skills-item">Tantra teacher</li>
                    </ul>
                    <div class="trainer-description">
                      <p>
                        Certified executive and personal coach, breathwork master and tantra
                        teacher who intuitively uncovers peoples&rsquo; potential so that they feel
                        empowered to unleash that power into their lives and the world. Alexis&rsquo;
                        work revolves around people coaching in different spheres of life. He
                        has worked with different companies across Europe, Africa and Asia as a
                        trainer, mentor, manager and coach. He is someone whose life graph took
                        an astounding turnaround when he changed his own life with the method he
                        created.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide trainers-item">
                  <div class="trainer-photo"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/trainer-1.jpg" alt=""><span
                        class="trainer-skills-item">InnerCamp founder</span></div>
                  <div class="trainer-about">
                    <h3 class="trainer-name">Alexis Alcal&aacute;</h3>
                    <ul class="trainer-skills-list">
                      <li class="trainer-skills-item">InnerCamp founder</li>
                      <li class="trainer-skills-item">Holistic coach</li>
                      <li class="trainer-skills-item">Breathwork master</li>
                      <li class="trainer-skills-item">Tantra teacher</li>
                    </ul>
                    <div class="trainer-description">
                      <p>
                        Certified executive and personal coach, breathwork master and tantra
                        teacher who intuitively uncovers peoples&rsquo; potential so that they feel
                        empowered to unleash that power into their lives and the world. Alexis&rsquo;
                        work revolves around people coaching in different spheres of life. He
                        has worked with different companies across Europe, Africa and Asia as a
                        trainer, mentor, manager and coach. He is someone whose life graph took
                        an astounding turnaround when he changed his own life with the method he
                        created.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide trainers-item">
                  <div class="trainer-photo"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/trainer-1.jpg" alt=""><span
                        class="trainer-skills-item">InnerCamp founder</span></div>
                  <div class="trainer-about">
                    <h3 class="trainer-name">Alexis Alcal&aacute;</h3>
                    <ul class="trainer-skills-list">
                      <li class="trainer-skills-item">InnerCamp founder</li>
                      <li class="trainer-skills-item">Holistic coach</li>
                      <li class="trainer-skills-item">Breathwork master</li>
                      <li class="trainer-skills-item">Tantra teacher</li>
                    </ul>
                    <div class="trainer-description">
                      <p>
                        Certified executive and personal coach, breathwork master and tantra
                        teacher who intuitively uncovers peoples&rsquo; potential so that they feel
                        empowered to unleash that power into their lives and the world. Alexis&rsquo;
                        work revolves around people coaching in different spheres of life. He
                        has worked with different companies across Europe, Africa and Asia as a
                        trainer, mentor, manager and coach. He is someone whose life graph took
                        an astounding turnaround when he changed his own life with the method he
                        created.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="certificate">
            <div class="certificate-img"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/certificat.jpg"
                                              alt=""></div>
            <div class="certificate-text">
              <p>Become a <strong>Bodywork and Somatic Therapies Specialist</strong> from the comfort of
                your own home.
              </p><a class="bundle" href="#">Enroll now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title">Exotic International Bodywork Retreat</h2>
          <div class="brouchure">
            <div class="brouchure-img"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/brochure-1.jpg"
                                            alt=""></div>
            <div class="brouchure-text">
              <h5 class="download-title">
                Upgrade your InnerCamp Bodywork experience with our one-of-a-kind
                retreat that blends 3
                holistic dominants &ndash; Breathwork, Tantra, and Bodywork.
              </h5><a class="download-button" href="#">Download our Retreat Brochure</a>
            </div>
            <div class="brouchure-text">
              <p>
                Over the course of four days, InnerCamp will gently guide you along your own healing
                journey.
              </p>
              <p>
                Each day will unlock new tools and techniques to
                help you free your body and mind from toxic patterns and limiting beliefs, tap into your
                inherent wisdom,
                and connect more authentically with the people
                who matter.
              </p>
            </div>
            <div class="brouchure-img"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/brochure-2.jpg"
                                            alt=""></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title">Live Sessions</h2>
          <div class="live-sessions">
            <div class="live-sessions-body">
              <div class="live-sessions-text">
                <ul class="schedule-list">
                  <li class="schedule-item schedule-time">
                    <p>10:30 am &mdash; 12:30 pm CET</p><span>*Amsterdam / Paris time zone</span>
                  </li>
                  <li class="schedule-item schedule-date">
                    <p>Saturdays (biweekly)</p><span>Feb 4, Feb 18, Mar 4, Mar 18, Apr 1, Apr 15 (2023)</span>
                  </li>
                </ul>
                <a data-begin="convertToUserTimezone()" class="check-time check-time_js" href="#">Check my local time
                  here</a>
                <ul class="about-schedule-list">
                  <li class="about-schedule-item">6 live sessions</li>
                  <li class="about-schedule-item">Biweekly sessions via Zoom</li>
                  <li class="about-schedule-item">All live sessions are recorded</li>
                </ul>

              </div>
              <div class="live-sessions-img"><a class="download-button" href="#">Download the Timetable</a></div>
            </div>
            <div class="live-sessions-footer">
              <p>This program includes <strong>6 live sessions</strong> conducted every <strong>
                  2 weeks
                  via Zoom.</strong></p>
              <p><strong>
                  If you cannot attend a live session, you can watch the recording on our
                  e-learning
                  platform.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bodywork-first__7">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title">Got questions?</h2>
          <p>Schedule a <strong>free</strong> consultation call with one of our experts.</p><a class="bundle" href="#">Schedule
            now</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bodywork-first__8">
    <div class="container">
      <div class="row bodywork-testimonials">
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
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/testimonials.jpg" alt=""></a></div>
                <div class="splide__slide testimonials-item"><a class="testimonials-link" data-fancybox=""
                                                                href="https://www.youtube.com/watch?v=2xeEKF8O0Ek&amp;list=PLIPLVbRO-ESui8w3ZiW817_ITWg6psx5u&amp;ab_channel=innercamp"><img
                        src="<?= get_template_directory_uri(); ?>/img/bodywork-1/testimonials.jpg" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bodywork-first__9">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title">Why students like InnerCamp</h2>
          <ul class="why-like-list">
            <li class="why-like-item">Access to the InnerCamp App.</li>
            <li class="why-like-item">Exclusive downloadable materials.</li>
            <li class="why-like-item">Flexibility to complete the course at your own pace.</li>
            <li class="why-like-item">Free access to our regular online sessions.</li>
            <li class="why-like-item">Live Zoom sessions.</li>
            <li class="why-like-item">Unlimited video replays on our eLearning platform.</li>
            <li class="why-like-item">&quot;Study buddy&quot; during the course.</li>
            <li class="why-like-item">Discount for your future InnerCamp experiences.</li>
            <li class="why-like-item">Lifelong membership in our global community.</li>
            <li class="why-like-item">Study on your laptop or mobile with the InnerCamp App.</li>
            <li class="why-like-item">Individual feedback on assessments.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="about-us-wrapper">
            <h3 class="heading">
              The moment you enroll, you connect with our fast-growing community of conscious people
              worldwide.
            </h3>
            <div class="about-us-text">
              <p>
                At InnerCamp, we believe that a single technique cannot fit everyone, and that is why our
                approach is more holistic offering a wide range of techniques to implement in your
                practice.
              </p>
              <p>
                We dive deep into the science, spirituality and benefits of bodywork &amp; breathwork
                techniques
                to increase the effectiveness of the practice.
              </p>
              <p>
                Our assignments are thoughtfully designed to initiate introspection, transformation and
                self-growth.
              </p>
              <p>
                We provide a platform for collaboration with InnerCamp and other community members, so
                you
                can continuously evolve and improve.
              </p>
              <p>We help you find your path, and your true calling.</p>
            </div>
          </div>
          <div class="about-us-img"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/section-9-about.jpg"
                                         alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <section class="bodywork-first__10">
    <div class="container">
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title">Bodywork &amp; Somatic Therapies for Trauma Healing</h2><span class="date-range">Feb 4, 2023 - Apr 15, 2023</span>
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
              <div class="bodywork-somatic-th gold-color">Levels 1 +
                2<span>Bodywork &amp; Somatic therapies Facilitator</span></div>
              <div class="bodywork-somatic-td-column"><span>*will be published soon</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <div class="book-your-trading">
            <h3 class="heading">Book your training</h3>
            <div class="book-your-trading-columns">
              <div class="book-your-trading-level-1 book-your-trading-item">
                <h4 class="column-heading">Level 1</h4>
                <ul class="column-level-info-list">
                  <li class="column-level-info-item">125 hours, 3 months</li>
                  <li class="column-level-info-item">6 weekly sessions</li>
                  <li class="column-level-info-item">150+ videos</li>
                  <li class="column-level-info-item">Members Hub</li>
                </ul>
                <ul class="column-price-nav-list">
                  <li class="column-price-nav-item">650&euro;<span>2 instalments</span></li>
                  <li class="column-price-nav-item active">1200&euro;<span>full price</span></li>
                  <li class="column-price-nav-item">500&euro;<span>deposit</span></li>
                </ul>
                <a class="bundle" href="#">Enroll now</a>
              </div>
              <div class="book-your-trading-level-2 book-your-trading-item">
                <h4 class="column-heading">Level 2</h4><span>*will be published soon</span>
              </div>
              <div class="book-your-trading-join book-your-trading-item">
                <h4 class="column-heading">
                  Join the InnerCamp
                  Retreat
                </h4><span class="column-calendar">Jun 24 - Jun 27, 2023</span>
                <ul class="column-level-info-list">
                  <li class="column-level-info-item">Upgrade your experience with a retreat</li>
                </ul>
                <button class="book-your-trading-update" data-fancybox="" data-src="#modal__update" type="button">
                  Upgrade
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12 s12 l12 xl9 offset-xl3">
          <h2 class="title">Frequently asked questions</h2>
          <div class="dropdown-list">
            <div class="dropdown">
              <button class="drop-button" type="button">How does the pricing work?</button>
              <p class="drop-text">
                We help you create a company culture of support, listening, and awareness that helps
                your
                employees &ndash; and your business &ndash; thrive. Through breathwork, bodywork, meditation and
                mindset
                coaching tools, we go to the employees&rsquo; core to build the rock solid foundation they
                will
                need to succeed mentally, spiritually, and professionally. Set in secluded and
                inspirational
                locations, our bespoke retreats are a holiday with deep purpose and long-lasting
                beneficial
                effects.
              </p>
            </div>
            <div class="dropdown">
              <button class="drop-button" type="button">Can I have more flexibility with the payment plan?</button>
              <p class="drop-text">
                We help you create a company culture of support, listening, and awareness that helps
                your
                employees &ndash; and your business &ndash; thrive. Through breathwork, bodywork, meditation and
                mindset
                coaching tools, we go to the employees&rsquo; core to build the rock solid foundation they
                will
                need to succeed mentally, spiritually, and professionally. Set in secluded and
                inspirational
                locations, our bespoke retreats are a holiday with deep purpose and long-lasting
                beneficial
                effects.
              </p>
            </div>
            <div class="dropdown">
              <button class="drop-button" type="button">Can I have more flexibility with the payment plan?</button>
              <p class="drop-text">
                We help you create a company culture of support, listening, and awareness that helps
                your
                employees &ndash; and your business &ndash; thrive. Through breathwork, bodywork, meditation and
                mindset
                coaching tools, we go to the employees&rsquo; core to build the rock solid foundation they
                will
                need to succeed mentally, spiritually, and professionally. Set in secluded and
                inspirational
                locations, our bespoke retreats are a holiday with deep purpose and long-lasting
                beneficial
                effects.
              </p>
            </div>
            <div class="dropdown">
              <button class="drop-button" type="button">Can I have more flexibility with the payment plan?</button>
              <p class="drop-text">
                We help you create a company culture of support, listening, and awareness that helps
                your
                employees &ndash; and your business &ndash; thrive. Through breathwork, bodywork, meditation and
                mindset
                coaching tools, we go to the employees&rsquo; core to build the rock solid foundation they
                will
                need to succeed mentally, spiritually, and professionally. Set in secluded and
                inspirational
                locations, our bespoke retreats are a holiday with deep purpose and long-lasting
                beneficial
                effects.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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


<?php
get_footer();
