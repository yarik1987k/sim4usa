<?php
/**
 * Functions.
 *
 * This file defines all functions that are intended to be used by developers,
 * and therefore are not hidden behind a class for simplicity.
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

/**
 * Recursively include all files from specified directory (and it's subdirectories).
 *
 * @param string $dir       Directory to include all files from.
 * @param int    $max_depth Maximum depth allowed.
 * @param int    $depth     Number of levels below specified directory current recursive call is on.
 */
function recursive_include( $dir, $max_depth = 5, $depth = 0 ) {
	if ( $depth > $max_depth ) {
		return;
	}

	$scan = glob( $dir . DIRECTORY_SEPARATOR . '*' );
	foreach ( $scan as $path ) {
		if ( preg_match( '/\.php$/', $path ) ) {
			include_once $path;
		} elseif ( is_dir( $path ) ) {
			recursive_include( $path, $max_depth, $depth + 1 );
		}
	}
}

function disable_wp_auto_p( $content ) {
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
	return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );

  add_theme_support('woocommerce');


  add_action( 'wp_ajax_change_sim', 'my_action_callback' );
  add_action( 'wp_ajax_nopriv_change_sim', 'my_action_callback' );
  function my_action_callback(){
		$metaId = $_POST['metaId'];
		$simType = $_POST['simType'];
		$cart = WC()->cart->cart_contents;


		foreach( $cart as $cart_item_id=>$cart_item ) {
			if($cart_item['wapf'][0]['id'] === $metaId){
				print_r($cart_item['wapf'][0]);

				if($simType === 'regular'){
					$cart_item['wapf'][0][$metaId]['value'] = 'Physical SIM Card';
					$cart_item['wapf'][0]['value'] = 'Physical SIM Card';
					$cart_item['wapf'][0]['value_cart'] = 'Physical SIM Card';
				}
				if($simType === 'esim'){
					$cart_item['wapf'][0][$metaId]['value'] = 'eSIM (Digital Delivery)';
					$cart_item['wapf'][0]['value'] = 'eSIM (Digital Delivery)';
					$cart_item['wapf'][0]['value_cart'] = 'eSIM (Digital Delivery)';
				}		
			}
	 
			 
			WC()->cart->cart_contents[$cart_item_id] = $cart_item;
		}
		WC()->cart->set_session();
 
	  wp_die();
  }

  if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'custom-thumb', 140, 140 ); // 100 wide and 100 high
}