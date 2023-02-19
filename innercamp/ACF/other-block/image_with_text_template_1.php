<?php
/**
 * Block template file: ACF/other-block/image_with_text_template_1.php
 *
 * Image With Text Template 1 Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = get_field('anchor');
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
?>

<section <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?>
    class="corporate__7 <?php echo esc_attr($classes); ?>">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <div class="img">
          <?php $image = get_field('image');
          if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/><?php
          endif; ?>
          <span class="option"><?php the_field('text_label_image'); ?></span></div>
      </div>
      <div class="col m12 s12 l6 xl6">
        <h3 class="title"><?php the_field('title'); ?></h3>
        <div class="formats">
          <h4 class="formats-title">
            <img src="<?= get_template_directory_uri(); ?>/img/corporate/check-circle.svg"
                 alt=""> <?php the_field('title_list'); ?></h4>
          <ul class="list">
            <?php
            if (have_rows('list')) : ?>
              <?php
              while (have_rows('list')) : the_row(); ?>
                <li class="list__item"><?php the_sub_field('text'); ?></li>
              <?php
              endwhile; ?>
            <?php
            endif; ?>
          </ul>
        </div>
        <p><?php the_field('content'); ?></p>
      </div>
    </div>
  </div>
</section>
