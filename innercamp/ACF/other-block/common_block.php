<?php
/**
 * Block template file: ACF/other-block/common_block.php
 *
 * Common Block Block Template.
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

$background_image = get_field('background_image');
$background_image_url = '';
if ($background_image) :
  $background_image_url = esc_url($background_image['url']);
endif;

?>
<section
    style="background-image: url(<?php echo $background_image_url ?>);"
  <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?> class="corporate__1 <?php echo esc_attr($classes); ?>">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <p class="sub"><?php the_field('sub_title'); ?></p>
        <h2 class="title"><?php the_field('title'); ?></h2>
        <?php the_field('content'); ?>
        <?php $button = get_field( 'button' ); ?>
        <?php if ( $button ) : ?>
          <a  class="bundle" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
