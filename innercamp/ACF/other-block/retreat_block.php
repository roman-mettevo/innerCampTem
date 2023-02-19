<?php
/**
 * Block template file: ACF/other-block/retreat_block.php
 *
 * Retreat  Block Template.
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
<section class="corporate__10" <?php echo(!empty($id) ? 'id="' . esc_attr($id) . '"' : '') ?>>
  <div class="container">
    <div class="row">
      <div class="grid">
        <div class="img-wrapper grid-item">
          <div class="img">
            <?php
            $image = get_field('image');
            if ($image) : ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/><?php
            endif; ?>
            <span class="option"><?php the_field('text_label_image'); ?></span></div>
        </div>
        <div class="heading-wrapper grid-item">
          <h3 class="title"><?php the_field('title'); ?></h3>
        </div>
        <div class="traning-wrapper grid-item">
          <div class="traning">
            <h4 class="title">
              <img src="<?= get_template_directory_uri(); ?>/img/corporate/help-circle.svg" alt="">
              <?php the_field('title_list'); ?>
            </h4>
            <div class="works">
              <?php
              if (have_rows('what’s_included:')) :
                while (have_rows('what’s_included:')) : the_row(); ?>
                  <span class="item"><?php the_sub_field('item'); ?></span>
                <?php
                endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <div class="list-wrapper grid-item">
          <?php
          if (have_rows('list')) : ?>
            <ul class="list">
              <?php
              while (have_rows('list')) : the_row(); ?>
                <li class="item">
                  <?php
                  $icon = get_sub_field('icon');
                  if ($icon) : ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"/>
                  <?php
                  endif;
                  the_sub_field('text'); ?>
                </li>
              <?php
              endwhile; ?>
            </ul>
          <?php
          endif; ?>
        </div>
        <div class="dropdown-wrapper grid-item">
          <div class="dropdown">
            <p><?php the_field('read_more_text'); ?></p>
            <button class="read-more">Read more<img
                  src="<?= get_template_directory_uri(); ?>/img/corporate/bottom-arrow.svg" alt=""></button>
          </div>
        </div>
        <div class="result-wrapper grid-item">
          <div class="result">
            <h4 class="title"><?php the_field('results_title'); ?></h4>
            <p><?php the_field('results_text'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
