<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="container">
	 <!--Navbar-->
	 <nav class="navbar navbar-dark info-color-dark mt-3 mb-5">

<!-- Navbar brand -->
<span class="navbar-brand">Categories:</span>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
	aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

	<!-- Links -->
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo site_url('/shop'); ?>">All
				<span class="sr-only">(current)</span>
			</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="<?php echo site_url('/product-category/uncategorised'); ?>">Uncategorised</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/product-category/clothing'); ?>">Clothing</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/product-category/music'); ?>">Music</a>
		</li>
	   

	</ul>
	<!-- Links -->

	<form class="form-inline">
		<div class="md-form mt-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		</div>
		<button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit"><i class="fas fa-search"></i></button>
	</form>
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<div class="row products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
