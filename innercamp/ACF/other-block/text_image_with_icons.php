<?php
/**
 * Block template file: ACF/other-block/text_image_with_icons.php
 *
 * Text Image With Icons Block Template.
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


<section <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?> class="affiliate-program__2 <?php echo esc_attr( $classes ); ?>">
  <div class="container">
    <div class="row">
      <div class="wrapper">
        <div class="col">

          <?php the_field( 'text' ); ?>
        </div>
        <div class="col">
          <div class="img">
              <span class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/affiliate-program/human.svg" alt=""></span>
            <span class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/affiliate-program/cacao.svg" alt=""></span>
            <span class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/affiliate-program/wind.svg" alt=""></span>
            <span class="icon">
                <img src="<?= get_template_directory_uri(); ?>/img/affiliate-program/flower.svg" alt=""></span>
            <?php
            $image = get_field( 'image' );
            if ( $image ) : ?>
              <img  class="main-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

