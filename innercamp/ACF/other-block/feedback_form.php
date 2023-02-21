<?php
/**
 * Block template file: ACF/other-block/feedback_form.php
 *
 * Feedback Form Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */
?>

<section class="affiliate-program__4">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <p class="sub"><?php the_field('sub_title'); ?></p>
        <h2 class="title"><?php the_field('title'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l7 xl9">
        <?php echo do_shortcode(the_field('form_shortcode_contact_form')); ?>

      </div>
      <div class="col m12 s12 l5 xl3">
        <?php
        $image = get_field('image');
        if ($image) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
