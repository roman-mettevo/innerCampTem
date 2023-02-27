<?php
/**
 * Block template file: ACF/other-block/text_list_image_block.php
 *
 * Text List Image Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = '';
if ( ! empty($block['anchor'] ) ) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if ( ! empty( $block['className'] ) ) {
  $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
  $classes .= ' align' . $block['align'];
}
?>

<section id='solution' class="corporate__4 <?php echo esc_attr( $classes ); ?>">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <h2 class="title"><?php the_field('title'); ?></h2>
        <ul class="list">
          <?php if ( have_rows( 'list' ) ) : ?>
            <?php while ( have_rows( 'list' ) ) : the_row(); ?>
              <li class="item"><?php the_sub_field('items'); ?></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <p><?php the_field('content'); ?></p>
      </div>
      <div class="col m12 s12 l6 xl6">
        <div class="img">
          <?php
          $image = get_field('image');
          if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/><?php
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
