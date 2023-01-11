<?php
/**
 * Register BugHerd API and script
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

/**
 * Checks if BugHerd API is present in .env file and loads BugHerd script as long as the WP_ENV is not production
 *
 * @return void
 */
function load_bugherd() {
	if ( ( function_exists( 'env' ) !== false ) && ( env( 'BUGHERD_API_KEY' ) !== false ) && ( ! empty( env( 'BUGHERD_API_KEY' ) ) ) && ( env( 'WP_ENV' ) !== 'production' ) ) {
		wp_enqueue_script( 'bugherd', 'https://www.bugherd.com/sidebarv2.js?apikey=' . env( 'BUGHERD_API_KEY' ), array(), $version, true );
	}
}
add_action( 'wp_enqueue_scripts', 'load_bugherd' );
