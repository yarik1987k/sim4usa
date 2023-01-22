<?php 

function small_cart(){
    $small_cart = '<button class="mini-cart-button"><span class="mini-cart-button__count-price">$0.00</span><span class="icon-cart"></span></button>';
    return $small_cart;
}

add_filter( 'woocommerce_single_product_zoom_enabled', '__return_false' );
add_action( 'wp', 'custom_remove_product_zoom' );

function custom_remove_product_zoom() {
  remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'after_setup_theme', 'remove_wc_gallery_lightbox', 100 );
function remove_wc_gallery_lightbox() {
remove_theme_support( 'wc-product-gallery-lightbox' );
}

 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 30 ); 
add_action( 'admin_init', 'override_shipping_debug');

function override_shipping_debug(){
    update_option('woocommerce_shipping_debug_mode','no');
}