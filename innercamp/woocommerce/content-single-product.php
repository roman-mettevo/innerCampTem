<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<!--   yourtheme/woocommerce/content-single-product.php  -->
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
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
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
