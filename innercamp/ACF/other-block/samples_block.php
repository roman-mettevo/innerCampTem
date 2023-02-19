<?php
/**
 * Block template file: ACF/other-block/samples_block.php
 *
 * Samples Block Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'samples-block-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-samples-block';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
  <?php echo '#' . $id; ?>
  {
  /* Add styles that use ACF values here */
  }
</style>

<section
    class="corporate__9 <?php echo esc_attr($classes); ?>"
  <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?> >
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <h3 class="title"><?php the_field('title'); ?></h3>
      </div>
      <?php
      if (have_rows('items')) : ?>
        <?php
        while (have_rows('items')) : the_row(); ?>
          <div class="col m12 s12 l6 xl6">
            <div class="workshop-card">

              <?php
              $background_image = get_sub_field('background_image');
              $background_image_url = '';
              if ($background_image) :
                $background_image_url = esc_url($background_image['url']);
              endif; ?>
              <h3 class="header"
                  style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $background_image_url ?>);">
                <?php the_sub_field('title'); ?></h3>
              <div class="body">
                <p class="description"><?php the_sub_field('text'); ?></p>
                <ul class="icon-list">
                  <?php
                  if (have_rows('list')) :
                    while (have_rows('list')) : the_row(); ?>
                      <li class="icon-list__item"> <?php
                        $icon = get_sub_field('icon');
                        if ($icon) : ?>
                          <img src="<?php echo esc_url($icon['url']); ?>"
                               alt="<?php echo esc_attr($icon['alt']); ?>"/>
                        <?php
                        endif; ?><?php the_sub_field('text'); ?>
                      </li>
                    <?php
                    endwhile;
                  endif; ?>
                </ul>
                <div class="effects">
                  <h4 class="heading"><?php the_field('title_effects'); ?></h4>
                  <ul class="text-list">
                    <?php
                    if (have_rows('effects_list')) :
                      while (have_rows('effects_list')) : the_row(); ?>
                        <li class="text-list__item"><?php the_sub_field('text'); ?></li>
                      <?php
                      endwhile;
                    endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <?php
        endwhile;
      endif; ?>
    </div>
  </div>
</section>
