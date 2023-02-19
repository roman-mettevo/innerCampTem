<?php
/**
 * Block template file: ACF/other-block/block_with_anchors.php
 *
 * Block With Anchors Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'block-with-anchors-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-block-with-anchors';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>

<section <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?>
    class="corporate__2 <?php echo esc_attr($classes); ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="nav-list">
          <?php
          if (have_rows('menu')) :
            while (have_rows('menu')) : the_row(); ?>
              <a class="item" href="<?php the_sub_field('anchor'); ?>"><?php the_sub_field('text'); ?></a>
            <?php
            endwhile;
          endif; ?>
        </div>
        <div class="nav-track"></div>
      </div>
      <div class="col">
        <h2 class="title"><?php the_field('title'); ?></h2>
        <ul class="list">
          <?php
          if (have_rows('list')) :
            while (have_rows('list')) : the_row(); ?>
              <li class="item">
                <img src="<?= get_template_directory_uri(); ?>/img/corporate/check-circle-2.svg" alt="">
                <p><?php the_sub_field('item'); ?></p>
              </li>
            <?php
            endwhile;
          endif; ?>
        </ul>
      </div>
      <div class="col">
        <div class="img">
          <?php
          $image = get_field('image');
          if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
          <?php
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
