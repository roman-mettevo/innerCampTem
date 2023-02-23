<!-- Block 1 -->
<?php 
    $bg_img = get_field("testimonial_1_background_image");
//    $title = get_field("testimonial_1_title");
//    $text = get_field("testimonial_1_text");
?>

<?php if(0){ ?>
<section class="testimonial__1" style="background: url(<?php if(!empty($bg_img)) {echo $bg_img['url'];} else { echo get_template_directory_uri() .'/img/testimonials/testimonial-bg.webp';} ?>) no-repeat top/cover ;">
    <div class="container">
        <div class="row">
            <?php 
                if(!empty($title)) { ?>
                    <h1 class="title"><?php echo $title; ?></h1>
                <?php }
                if(!empty($text)) { ?>
                    <div class="testimonial-description">
                        <?php echo $text; ?>
                    </div>
                <?php }
            ?>            
        </div>
    </div>
</section>
<?php } ?> 




<section class="reviews__1">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <div class="title-block">
         
  <?php if( get_field('testimonial_1_title')): ?><!-- if under__the -->
    <h2 class="title"><?php echo the_field('testimonial_1_title'); ?></h2>
  <?php endif; ?>

<div class="description">
  <?php if( get_field('testimonial_1_text')): ?><!-- if under__the -->
    <?php echo the_field('testimonial_1_text'); ?>
  <?php endif; ?>
</div>
          
        </div>
        <ul class="achievements-list">
          <li class="achievements-item">
            <h3 class="heading">800+</h3>
            <p class="achievements-description">InnerCamp members are building their new holistic career</p>
          </li>
          <li class="achievements-item">
            <h3 class="heading">400+</h3>
            <p class="achievements-description">events organized worldwide</p>
          </li>
          <li class="achievements-item">
            <h3 class="heading">2000+</h3>
            <p class="achievements-description">students were trained by InnerCamp</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>