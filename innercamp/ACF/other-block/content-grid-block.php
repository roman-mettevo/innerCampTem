<?php
/**
 * Block template file: ACF/other-block/content-grid-block.php
 *
 * Content Grid Block Block Template.
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
$classes = 'block-content-grid-block';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">




</div>

<section class="collaborations__2">
  <style>
      div.description p {
          color: #fff;
          font: 18px/1.65em var(--o);
      }

      div.description p strong {
          font-weight: 900;
      }

      div.description p:not(:last-child) {
          margin-bottom: 30px;
      }
  </style>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <?php $image_first_section = get_field('image_first_section');
        if ($image_first_section) : ?>
          <img src="<?php echo esc_url($image_first_section['url']); ?>"
               alt="<?php echo esc_attr($image_first_section['alt']); ?>"/>
        <?php endif; ?>
      </div>
      <div class="col m12 s12 l6 xl6">
        <p class="sub"><?php the_field('sub_title_first_section'); ?></p>
        <h2 class="title"><?php the_field('title_first_section'); ?></h2>
        <div class="description"><?php the_field('content'); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <p class="sub"><?php the_field('sub_title_second_section'); ?></p>
        <h2 class="title"><?php the_field('title_second_section'); ?></h2>
        <?php if (have_rows('list')) : ?>
        <div class="professions-list">
        <?php while (have_rows('list')) : the_row(); ?>
          <p class="professions"><?php the_sub_field('text'); ?></p>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="col m12 s12 l6 xl6">
        <?php $image_second_section = get_field('image_second_section');
        if ($image_second_section) : ?>
          <img src="<?php echo esc_url($image_second_section['url']); ?>"
               alt="<?php echo esc_attr($image_second_section['alt']); ?>"/>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
