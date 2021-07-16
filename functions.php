<?php

/**
 * Include external files
 */
require_once('inc/pagination.inc.php');
require_once('inc/template-tags.inc.php');

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.3.1', true );
        //wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

add_theme_support( 'post-thumbnails' );
/**
 * Setup Theme
 */
function mdbtheme_setup() {
    // Add featured image support
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 250,
        'single_image_width'    => 500,
  
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}
add_action('after_setup_theme', 'mdbtheme_setup');

/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

    register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ) );
  
  }
  add_action( 'widgets_init', 'mdb_widgets_init' );

  remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);


function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
  
//content-product.php
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
/**
 * @param $fields
 * @return mixed
 */
function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group';

            // add form-control to the actual input
            $field['input_class'][] = 'form-control ';
        }
    }
    return $fields;
}

add_filter( 'woocommerce_form_field_args', 'custom_wc_form_field_args', 10, 3 );
function custom_wc_form_field_args( $args, $key, $value ){
    // Only on My account > Edit Adresses
    if( is_wc_endpoint_url( 'edit-account' ) || is_checkout() ) return $args;

    $args['class'] = array('form-input-group');
    // add form-control to the actual input
    $args['input_class'][] = 'form-control ';
  

    return $args;
}


?>