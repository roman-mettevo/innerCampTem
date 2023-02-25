<?php
$query_args = array(
  'post_type' => 'team_member',
  'posts_per_page' => -1,
  'post_status' => 'publish'
);
$query = new WP_Query($query_args);
if ($query->have_posts()) {
  $counter = 1;
  while ($query->have_posts()) {
    $query->the_post();
    $coach_id = get_the_id();
    ?>
    
    <div class="user__menu__info" id="<?php echo get_the_id(); ?>">
      <div class="bock__top">
        <a class="close__" href="javascript:;"></a>
      </div>
      <div class="box__user">
        <div class="box__img">
        
        <?php if(get_the_post_thumbnail_url(get_the_id())){ ?>
          <img src="<?= get_the_post_thumbnail_url(get_the_id(), 'team_user_smoll' ); ?>" alt='menu_user_<?php echo get_the_id(); ?>'>
        <?php }?>
        
        </div>
        <div class="box__content">
          <h3 class="title__"><?php echo the_title(); ?></h3>
        </div>
      </div>
      

      <?php  $tags = get_the_tags(get_the_id());  ?>
      <?php if ($tags) { ?>
        <ul class="tag">
           <?php foreach($tags as $tag) { ?>
              <li><span><?php echo $tag->name; ?></span></li>
           <?php } ?>
        </ul>
      <?php } ?>

      <div class="block__">
          <?php the_content(); ?>
      </div>
    </div>

    <?php
    $counter++;
  }
}
?>

<section class="team__2">
  <div class="container">
    <div class="row">
      <div class="team-nav">
        <div class="team-nav-wrap">
          <nav data-scroll>
            <?php 
              $nav_title = get_field('team_navigation_title');

              if (empty($nav_title)) { ?>
                <h2 class="team-nav-title"><?php echo $nav_title; ?></h2>
              <?php } else { ?>
                <h2 class="team-nav-title"><?php echo __('InnerCamp Team' ); ?></h2>
              <?php }
              
            ?>
            
            <ul>
              <?php
              if ($query->have_posts()) {
                $counter = 1;
                while ($query->have_posts()) {
                  $query->the_post();
                  ?>
                  <li><a href="#team-member-<?php echo $counter; ?>"><?php the_title(); ?></a></li>
                  <?php
                  $counter++;
                }
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
      <div class="coach-list">
        <?php
        if ($query->have_posts()) {
          $counter = 1;
          while ($query->have_posts()) {
            $query->the_post();
            $coach_id = get_the_id();
            ?>
            <div class="coach-item scroll__init" id="team-member-<?php echo $counter; ?>">
              <div class="coach-content">
                <h2 class="coach-name"><?php the_title(); ?></h2>
                <div class="categories">
                 
                 <?php  $tags = get_the_tags(get_the_id());  ?>
                 <?php if ($tags) { ?>
                    <?php foreach($tags as $tag) { ?>
                        <span class="tag"><?php echo $tag->name; ?></span>
                    <?php } ?>
                 <?php } ?>

  
           
                </div>
                <div class="coach-description">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="coach-photo">
                <?php // echo get_the_post_thumbnail(); ?>
                
                
             <?php if(get_the_post_thumbnail_url(get_the_id())){ ?>
           
              <a href="javascript:;" class="open__us" data-open="<?php echo get_the_id(); ?>"><img src="<?= get_the_post_thumbnail_url(get_the_id(), 'team_user' ); ?>" alt=''></a> 

            <?php }?>

                <?php
                  if (have_rows('tags_list', $coach_id)) {
                    $count = 1;
                    while (have_rows('tags_list', $coach_id)) {
                      the_row();
                      ?>
                      <div class="single-category"><?php the_sub_field('single_tag'); ?></div>
                      <?php
                        $count++;
                        if($count > 1 ) {
                            break;
                        }
                    }
                  }
                ?>               
              </div>
            </div>
            <?php
            $counter++;
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>
