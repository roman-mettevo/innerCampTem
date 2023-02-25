<section class="careers__2">
  <div class="container">
    <div class="row">
      <div class="careers__2-wrap" id="careers_2">
         
    <?php $image = get_field('image'); ?>

   <div class="careers__2-img">
      <?php if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
      <?php endif; ?> 
   </div>
          
        <div class="careers__2-content">
          
  <?php if( get_field('sub_text')): ?><!-- if under__the -->
    <p class="sub"><?php the_field('sub_text'); ?></p>
  <?php endif; ?>

  <?php if( get_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_field('title'); ?></h2>
  <?php endif; ?>
          
  <?php if( get_field('content')): ?><!-- if under__the -->
    <?php the_field('content'); ?>
  <?php endif; ?>
          

        </div>
      </div>
    </div>
  </div>
</section>