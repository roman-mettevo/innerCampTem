<!-- Block 1-->
<?php 
  $hero_section_subtitle = get_field('hero_section_subtitle');
  $hero_section_title = get_field('hero_section_title');
  $hero_section_text_content = get_field('hero_section_text_content');
  $hero_section_bordered_text = get_field('hero_section_bordered_text');
?>
<section class="app__1">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <?php 
          if($hero_section_subtitle){
            ?>
              <p class="sub"><?php echo $hero_section_subtitle; ?></p>
            <?php
          }
          if($hero_section_title){
            ?>
              <h1 class="title"><?php echo $hero_section_title; ?></h1>
            <?php
          }
          if($hero_section_text_content){
            ?>
              <?php echo $hero_section_text_content; ?>
            <?php
          }
          if($hero_section_bordered_text){
            ?>
              <p class="border"><?php echo $hero_section_bordered_text; ?></p>
            <?php
          }
        ?>
        <div class="bottom__">
          <?php 
            $app = get_field('appstore_application_link');
            $g_play = get_field('google_play_application_link');

            if(!empty($app)) { ?>
              <a href="<?php echo $app; ?>"><img src="<?= get_template_directory_uri(); ?>/img/appstore.svg" alt="appstore"></a>
            <?php }

            if(!empty($g_play)) { ?>
              <a href="<?php echo $g_play; ?>"><img src="<?= get_template_directory_uri(); ?>/img/googleplay.svg" alt="appstore"></a>
            <?php }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  <?php 
    if(get_field('section_background_image')){
      $section_background_image = get_field('section_background_image');
      ?>
        section.app__1{
          background-image: url('<?php echo $section_background_image["url"]; ?>');
        }
      <?php
    }
    if(get_field('section_background_image_mobile')){
      $section_background_image_mobile = get_field('section_background_image_mobile');
      ?>
        @media (max-width: 991px){
          section.app__1{
            background-image: url('<?php echo $section_background_image_mobile["url"]; ?>');
          }
        }
        
      <?php
    }
  ?>
  
</style> 