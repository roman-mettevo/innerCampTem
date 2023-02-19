<?php
/**
 * Block template file: ACF/other-block/common_block_template_2.php
 *
 * Common Block Template 2 Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = '';
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}

$background_image_url = '';
if (get_field('background_image')) :
  $background_image_url = get_field('background_image');
endif
?>

<section <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?>
    class="affiliate-program__1 <?php echo esc_attr($classes); ?>"
    style="background-image: url(<?php echo $background_image_url ?>);">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <p class="sub"><?php the_field('sub_title'); ?></p>
        <h2 class="title"><?php the_field('title'); ?></h2>
      </div>
    </div>
  </div>
</section>
