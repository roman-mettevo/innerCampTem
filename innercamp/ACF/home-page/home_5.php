<!-- Block 5 -->
<section class="home__5">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">

  <?php if( get_field('home_5_sup_title')): ?><!-- if under__the -->
    <p class="sub"><?php the_field('home_5_sup_title'); ?></p>
  <?php endif; ?>
        

  <?php if( get_field('home_5_title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_field('home_5_title'); ?></h2>
  <?php endif; ?>
      

  <?php if( get_field('home_5_sub_title_text')): ?><!-- if under__the -->
    <?php the_field('home_5_sub_title_text'); ?>
  <?php endif; ?>
 
      </div>
    </div>
  </div>
</section>