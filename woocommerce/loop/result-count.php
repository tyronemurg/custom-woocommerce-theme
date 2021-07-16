<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!--Main Navigation-->
<header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-4">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">
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
                    <h1 class="font-weight-bold mb-4"><?php echo $product_cat_name ?></h1>
                    <p class="lead mb-4">
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->
<div class="container">
    <p class="woocommerce-result-count">
    <?php
    if ( 1 === $total ) {
        _e( 'Showing the single result', 'woocommerce' );
    } elseif ( $total <= $per_page || -1 === $per_page ) {
        /* translators: %d: total results */
        printf( _n( 'Showing all %d result', 'Showing all %d results', $total, 'woocommerce' ), $total );
    } else {
        $first = ( $per_page * $current ) - $per_page + 1;
        $last  = min( $total, $per_page * $current );
        /* translators: 1: first result 2: last result 3: total results */
        printf( _nx( 'Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
    }
    ?>
</p>
</div>
