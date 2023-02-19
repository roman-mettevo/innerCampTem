<?php
/**
 * Block template file: ACF/other-block/intermediate_unit_template_3.php
 *
 * Intermediate Unit Template 3 Block Template.
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
<section class="collaborations__3 <?php echo esc_attr( $classes ); ?>" <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?>>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <p class="sub">Partnership</p>
        <h2 class="title">I want in! What&rsquo;s next?</h2>
        <?php $button = get_field( 'button' );
        if ( $button ) : ?>
          <a class="bundle"  href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
