<?php
/**
 * Modify Yoast functionality.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

/**
 * Move Yoast SEO to the bottom of the screen.
 */
function yoast_to_bottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoast_to_bottom' );
