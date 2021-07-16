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
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
?>
<header>
    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-4">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                  <?php the_title( '<h1 class="product_title entry-title font-weight-bold mb-4">', '</h1>' ); ?>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>

<main>

    <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

        <div class="container dark-grey-text">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

        <?php
          /**
           * Hook: woocommerce_before_single_product_summary.
           *
           * @hooked woocommerce_show_product_sale_flash - 10
           * @hooked woocommerce_show_product_images - 20
           */
          do_action( 'woocommerce_before_single_product_summary' );
        ?>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">
                     <!--Content-->
                    <div class="p-4">

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

                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr>

            <?php if (wc_get_related_products(get_the_ID())) {  ?>

            <!--Grid row-->
            <div class="row d-flex justify-content-center wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 text-center">
                    <h4 class="my-4 h4">Related products</h4>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="">

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
            <!--Grid row-->
            <?php } ?>

    </div>
          <!--Container  -->

  </div>
    <!--Div product -->

<?php do_action( 'woocommerce_after_single_product' ); ?>

</main>