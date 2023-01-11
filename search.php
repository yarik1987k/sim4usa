<?php
/**
 * The search template
 *
 * @package    WordPress
 * @subpackage defaultTheme
 * @since      defaultTheme 1.0
 */

get_header();

if ( function_exists( 'wpes_search' ) ) {
	get_template_part( 'parts/search/elasticsearch' );
} else {
	get_template_part( 'parts/search/classic-search' );
}

get_footer();
