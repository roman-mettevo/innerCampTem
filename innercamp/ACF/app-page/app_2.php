<!-- Block 2-->
<?php 
  $section_image = get_field('section_image');
  $section_subtitle = get_field('section_subtitle');
  $section_title = get_field('section_title');
  $section_boxed_text = get_field('section_boxed_text');
  $section_text = get_field('section_text');
?>
<section class="app__2">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <div class="box__image">
        	<?php 
        		if($section_image){
        			?>
        				<img src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>">
        			<?php
        		}
        		else{
        			?>
        				<img src="<?= get_template_directory_uri(); ?>/img/app__2_img.png" alt="">
        			<?php
        		}
        	?>
        	
        </div>
      </div>
      <div class="col m12 s12 l6 xl6">
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
    		if($section_boxed_text){
    			?>
    				<div class="box__">
			        	<?php echo $section_boxed_text; ?>
			        </div>
    			<?php
    		}
    		if($section_text){
    			echo $section_text;
    		}
      	?>
      </div>
    </div>
  </div>
</section>