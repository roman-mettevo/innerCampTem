<!-- Block 4-->
<?php 
  $section_video = get_field('section_video');
  $section_link = get_field('section_link');
  $section_title = get_field('section_title');
?>
<section class="app__4">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <?php 
          
          if($section_title){
            ?>
              <h2 class="title"><?php echo $section_title; ?></h2>
            <?php
          }
          if($section_link){ ?>
              <div class="bot__"><div class="bord-bundle" ><?php echo $section_link;?></div></div>
            <?php }
        ?>
      </div>
    </div>
  </div>
  <?php 
    if($section_video){
      ?>
      <video playsinline="" autoplay="" muted="" loop="" preload="none">
        <source src="<?php echo $section_video['url']; ?>" type="video/mp4">
      </video>
      <?php
    }
    else{
      ?>
      <video playsinline="" autoplay="" muted="" loop="" preload="none">
        <source src="https://innercamp.mettevo.com/wp-content/uploads/2023/01/video-app-online-video-cutter.com_.mp4" type="video/mp4">
      </video>
      <?php
    }
  ?>
  
</section>