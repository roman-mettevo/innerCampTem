<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<!--  yourtheme/woocommerce/single-product.php  -->

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
sssss
			<?php wc_get_template_part( 'content', 'single-product' ); ?>
  <section class="breathwork-tt__1"
           data-menuscroll <?php if (get_the_post_thumbnail_url()) { ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
    <div class="container">
      <div class="row">
        <?php
        if (get_sub_field('sub_text')) { ?>
          <p class="sub"><?php the_sub_field('sub_text'); ?></p>
        <?php }
        if (get_sub_field('title')) { ?>
          <h1 class="title"><?php the_sub_field('title'); ?></h1>
        <?php }

        if (have_rows('box_list')) : ?>
          <div class="box__content">
            <?php while (have_rows('box_list')) : the_row(); ?>
              <p class="<?php if (get_row_index() == '1') { ?>breathwork
                <?php } else if (get_row_index() == '2') { ?> level
                <?php } else if (get_row_index() == '3') { ?> location
                <?php } else if (get_row_index() == '4') { ?> date
                <?php } ?>"><?php the_sub_field('item_title'); ?></p>
            <?php endwhile; ?>?
          </div>
        <?php endif; ?>
        <?php
        if (get_sub_field('content')) { ?>
          <div class="retreats__1-description">
            <?php the_sub_field('content'); ?>
          </div>
        <?php } ?>
        <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add"><?php echo __('Book now'); ?></a>
      </div>
    </div>
  </section>
		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
