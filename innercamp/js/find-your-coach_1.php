<!-- Block 1 -->
<?php
	$section_backrgound_image = get_field('hero_background_image');
?>
<section class="team__1" style="background: url('<? if($section_backrgound_image){ echo $section_backrgound_image["url"]; } else{ echo get_template_directory_uri(); "/img/team/team-banner.webp'"; }?>') no-repeat top/cover">
    <div class="container">
        <div class="row">
					<?php
					$suptitle = get_field('hero_subtitle');
					if(!empty($suptitle)) { ?>
						<p class="sub"><?php echo $suptitle; ?></p>
						<?php }

						$title = get_field('hero_title');
						if(!empty ($title)) { ?>
							<h1 class="title"><?php echo $title; ?></h1> 
						<?php } 
					?>
        </div>
    </div>
</section>
