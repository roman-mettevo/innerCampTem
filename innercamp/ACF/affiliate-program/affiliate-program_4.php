<section class="careers__1" 
 <?php if (get_the_post_thumbnail_url()) { ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php }else{ ?>
  style="background: url('<?= get_template_directory_uri(); ?>/img/careers/careers-1.webp') no-repeat top/cover" <?php } ?>>
  
  <div class="container">
    <div class="row">
      <div class="content">
        
  <?php if( get_field('sub_title')): ?><!-- if under__the -->
    <p class="sub"><?php the_field('sub_title'); ?></p>
  <?php endif; ?>

  <?php if( get_field('title')): ?><!-- if under__the -->
    <h1 class="title"><?php the_field('title'); ?></h1>
  <?php endif; ?>
        
        <div class="link-row">
    <?php $link = get_field('link'); ?>
 
    <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <a class="bundle" href="#positions">See open positions</a>
    <?php endif; ?>

          </div>
      </div>
      <div class="link-content">
        <div class="link-row">
          <a class="scroll" href="#careers_2">Scroll</a>
        </div>
      </div>
    </div>
  </div>
</section>
