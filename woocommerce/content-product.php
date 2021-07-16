<style>
	.page-title{
		display:none;
	}
</style>
<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

 <!--Grid column-->
 <div class="col-lg-3 col-md-6 col-6 mb-4">

<!-- Product Card naked -->
<div class="card-naked">

	<!--Featured image-->
	<div class="view overlay hm-white-slight rounded mb-3">
		<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
		$regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
		$sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
		$terms = get_the_terms( $post->ID, 'product_cat' );
		foreach ($terms as $term) {
			$product_cat_name = $term->name;
			$product_cat_id = $term->term_id;
			break;
		}
		?>
		<img src="<?php  echo $image[0]; ?>" class="img-fluid" data-id="<?php echo $loop->post->ID; ?>">
		<a href ="<?php echo get_permalink() ?>">
			<div class="mask"></div>
		</a>
	</div>

	<!--Content-->
	<h6 class="mb-3">
		<?php if($sale_price) {
                        ?>
                            <span class="badge green">Sale!</span>
                            <?php
                            }
                            ?>
		<a href="<?php echo esc_url( get_term_link( $product_cat_id, 'product_cat' ) ); ?>">
			<span class="badge purple mr-1"><?php echo $product_cat_name ?></span>
		</a>
	</h6>
	<h5 class="mb-3">
		<strong><?php the_title() ?></strong>
	</h5>
	                        <?php 
                         global $product;
                         if ( $price_html = $product->get_price_html() ) : ?>
    <p class="price"><?php echo $price_html; ?></p>
<?php endif; ?>
<?php 
echo apply_filters(
    'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
    sprintf(
        '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
        esc_attr( isset( $args['class'] ) ? $args['class'] : 'btn btn-info btn-sm' ),
        isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
        esc_html( $product->add_to_cart_text() )
    ),
    $product,
    $args
);
?>
	<!-- <p>
		<?php if($sale_price) {
		?>
		<span class="mr-1">
			<del><?php echo "$" . $regular_price; ?></del>
		</span>
		<?php
		}
		?>
		<span>
	<?php
	echo "$";
	echo  ($sale_price) ? $sale_price : $regular_price;
	?></span>
	</p>
	<a href="<?php echo get_permalink(wc_get_page_id( 'cart' ))  . "?add-to-cart=" .  get_the_ID() ; ?> " class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Add to cart">
		<i class="fas fa-shopping-cart"></i>
	</a> -->
	<!-- <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-sm">View</a> -->

</div>
<!-- Product Card naked -->

</div>
<!--Grid column-->
<!--<div <?php wc_product_class( 'col-lg-4 col-md-12 mb-4', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>-->
