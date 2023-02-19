
<?php
/**
 * Block template file: ACF/other-block/intermediate_unit_template_2.php
 *
 * Intermediate Unit Template 2 Block Template.
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

<section  <?php echo(!empty($id) ? 'id="'.esc_attr($id).'"' : '') ?>  class="corporate__8 <?php echo esc_attr( $classes ); ?>">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <p class="sub"><?php the_field('sub_title'); ?></p>
        <h2 class="title"><?php the_field('title'); ?></h2>
      </div>
    </div>
  </div>
</section>
