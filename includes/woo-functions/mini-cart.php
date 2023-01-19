<?php 

function small_cart(){
    $small_cart = '<button class="mini-cart-button"><span class="mini-cart-button__count-price">$0.00</span><span class="icon-cart"></span></button>';
    return $small_cart;
}

add_filter( 'woocommerce_single_product_zoom_enabled', '__return_false' );