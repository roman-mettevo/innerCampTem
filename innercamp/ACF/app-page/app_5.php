2<!-- Block 5-->
<section class="app__5">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <?php 
          $title = get_field('app_section_title_5');
          if(!empty($title)) {?>
            <h2 class="title"><?php echo $title; ?></h2>
          <?php }
        ?>        
      </div>
    </div>
    <div class="row">
      <div class="col m9 s12 l4 xl4"><span></span>
        <?php 
          $first_step_title = get_field('step_1_title');
          if(!empty($first_step_title)) { ?>
            <h3 class="title__"><?php echo $first_step_title; ?></h3>
          <?php }
        ?>
        <div class="box__">
          <?php 
            $first_step_img = get_field('step_1_image');
            if(!empty($first_step_img)) { ?>
              <img src="<?php echo $first_step_img['url']; ?>" alt="<?php echo $first_step_img['alt'] ?>">
            <?php }
          ?>          
        </div>
        <div class="bottom__">
          <?php 
            $app = get_field('appstore_application_link_5');
            $play =get_field('google_play_application_link_5');

            if(!empty($app)) { ?>
              <a href="<?php echo $app; ?>"><img src="<?= get_template_directory_uri(); ?>/img/appstore.svg" alt="appstore"></a>
            <?php }
            if(!empty($play)) { ?>
              <a href="<?php echo $play ?>"><img src="<?= get_template_directory_uri(); ?>/img/googleplay.svg" alt="appstore"></a>
            <?php }
          ?>
        </div>
      </div>
      <div class="col m9 s12 l4 xl4"><span></span>
        <?php 
          $second_step_title = get_field('step_2_title');
          if(!empty($second_step_title)) { ?>
            <h3 class="title__"><?php echo $second_step_title; ?></h3>
          <?php }
        ?>
        <div class="box__">
          <?php 
            $second_step_img = get_field('step_2_image');
            if(!empty($second_step_img)) { ?>
              <img src="<?php echo $second_step_img['url']; ?>" alt="<?php echo $second_step_img['alt'] ?>">
            <?php }
          ?>
        </div>
        
      </div>
      <div class="col m9 s12 l4 xl4"><span></span>
      <?php 
          $third_step_title = get_field('step_3_title');
          if(!empty($third_step_title)) { ?>
            <h3 class="title__"><?php echo $third_step_title; ?></h3>
          <?php }
        ?>
        <div class="box__">
        <?php 
            $third_step_img = get_field('step_3_image');
            if(!empty($third_step_img)) { ?>
              <img src="<?php echo $third_step_img['url']; ?>" alt="<?php echo $third_step_img['alt'] ?>">
            <?php }
          ?>
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="col m12 s12 l9 xl9">
        <?php 
          $testimonials = get_field('app_testimonials');

          $suptitle = $testimonials['app_section__suptitle_6'];
          $title = $testimonials['app_section_title_6'];

          if(!empty($suptitle)) { ?>
            <p class="sub"><?php echo $suptitle; ?></p>
          <?php }

          if(!empty($title)) { ?>
            <h2 class="title"><?php echo $title; ?></h2>
          <?php }
        ?>
      </div>
      <div class="col m12 s12 l3 xl3">
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
    <div class="members splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
            $testimonial_list = $testimonials['app_testimonial_slider'];

            foreach ($testimonial_list as $item) {
              $text = $item['app_testimony__item_text'];
              $photo = $item['app_testimony_item_photo'];
              $name = $item['app_testimony_item_name'];
              $tag = $item['app_testimony_item_tag']; ?>

              <li class="splide__slide">
                <div class="block__">
                  <?php 
                    if(!empty($text)) {
                      echo $text;
                    }
                  ?>
                  <div class="box__user">
                    <div class="box__img">
                      <?php 
                        if(!empty($photo)) { ?>
                          <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
                        <?php }
                      ?>
                    </div>
                    <div class="box__content">
                      <?php 
                        if(!empty($name)) { ?>
                          <span class="name"><?php echo $name; ?></span>
                        <?php }

                        if(!empty($tag)) { ?>
                          <div class="tag"><?php echo $tag; ?></div>
                        <?php }
                      ?>
                    </div>
                  </div>
              </div>
            </li>
            <?php }
          ?>          
        </ul>
      </div>
    </div>
  
</section>
