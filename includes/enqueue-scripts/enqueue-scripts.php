<?php
/**
 * Load scripts.
 *
 * @package    WordPress
 * @subpackage defaultTheme
 * @since      defaultTheme 1.0
 */

/**
 * Load the main JS bundle.
 *
 * Determine if the browser is Internet Explorer and serve the correct JS bundle.
 */
function load_scripts() {
	$script_name = '/js/dist/bundle.js';
	$script_url  = get_template_directory_uri() . $script_name;
	$script_path = get_template_directory() . $script_name;

	// This can fail due to permissions so we will still try to include the file if it fails.
	$version = file_exists( $script_path ) ? filemtime( $script_path ) : '1.0';

	wp_enqueue_script( 'script', $script_url, array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
