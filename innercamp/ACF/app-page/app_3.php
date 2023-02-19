<!-- Block 3-->
<?php 
  $section_image = get_field('section_image');
  $section_subtitle = get_field('section_subtitle');
  $section_title = get_field('section_title');
?>
<section class="app__3" <?php if($section_image){echo 'style="background-image:url('. $section_image['url'] .');"'; }?>>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <?php 
          if($section_subtitle){
          ?>
            <p class="sub"><?php echo $section_subtitle; ?></p>
          <?php
        }
        if($section_title){
          ?>
            <h2 class="title"><?php echo $section_title; ?></h2>
          <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/app__3_img.png" alt="">
          <div class="bot__"><a class="bord-bundle" href="#trial"><?php echo __("Check it out!"); ?></a></div>
        </div>
      </div>
      <div class="col m12 s12 l6 xl6">
        <?php 
        if(have_rows('table_items')){
        ?>
        <div class="box__list"> 
          <div class="top"><span><?php echo __("What is included:"); ?></span><span>V<?php echo __("Value"); ?></span></div>
          <ul>
          <?php 
            while(have_rows('table_items')){
              the_row();
          ?>
          
            <li>
              <p><?php the_sub_field('text'); ?></p><span  <?php if ( get_sub_field( 'star' ) == 1 ) : ?>class="star"<?php endif; ?>><?php the_sub_field('price'); ?></span>
            </li>


            <!-- <li>
              <p>Get Access to Our <span>Private Social Network</span></p><span class="star">$75</span>
            </li>
            <li>
              <p>Chat with other<span>community members</span></p><span class="star">Priceless</span>
            </li>
            <li>
              <p>Find members <span>close to you</span></p><span class="star">Priceless</span>
            </li>
            <li>
              <p>Access to special <span>live streaming events</span></p><span class="star">$200</span>
            </li>
            <li>
              <p>Access to the <span>recorded</span> virtual workshops</p><span class="star">$100</span>
            </li> -->
          
          <?php } ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <div class="free_treal" id="trial">
          <?php 
            $block_trial = get_field("block_trial");

            $trial_title = $block_trial['title_trial'];
            $trial_price = $block_trial["price_after_trial"];
            $year_price = $block_trial['price_per_year'];
            $app = $block_trial['appstore_aplication_link_trial'];
            $play = $block_trial['google_play_application_link_trial'];

            if(!empty($trial_title)) { ?>
              <h3 class="title"><?php echo $trial_title; ?></h3>
              <!-- <h3 class="title">7-day<span>free trial</span></h3> -->
            <?php }
          ?>          
          <div class="box__">
            <?php 
            if(!empty($trial_price)) { ?>
              <p class="prise"><?php echo $trial_price; ?></span>
              <!-- <p class="prise">Then <span>$29.99</span>/month</p><span class="or">OR</span> -->
            <?php }

            if(!empty($year_price)) { ?>
              <h4 class="year"><?php echo $year_price; ?></h4>
              <!-- <h4 class="year">$299 per year.</h4> -->
            <?php }
            ?>
            <div class="bottom__">
              <?php 
                if(!empty($app)) { ?>
                  <a href="<?php echo $app; ?>"><img src="<?= get_template_directory_uri(); ?>/img/appstore.svg" alt="appstore"></a>
                <?php }

                if(!empty($play)) { ?>
                  <a href="<?php echo $play; ?>"><img src="<?= get_template_directory_uri(); ?>/img/googleplay.svg" alt="appstore"></a>
                <?php }
              ?>
            </div>
          </div>
        </div>
        <div class="img__apl"><img src="<?= get_template_directory_uri(); ?>/img/app__3_apl.png" alt="appstore"></div>
      </div>
    </div>
  </div>
</section>