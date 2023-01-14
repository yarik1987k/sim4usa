<?php
/**
 * Generate the heading for the archive pages based on which type of archive is being displayed.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

/**
 * Generate the heading for the archive pages based on which type of archive is being displayed.
 *
 * @return string|null Heading, or null if the type of archive is not recognized.
 */
function get_blog_heading() {
	if ( is_archive() ) {
		if ( is_day() ) {
			return __( 'Daily Archives:', 'sim4usa' ) . get_the_date();
		} elseif ( is_month() ) {
			return __( 'Monthly Archives:', 'sim4usa' ) . get_the_date( _x( 'F Y', 'monthly archives date format', 'sim4usa' ) );
		} elseif ( is_year() ) {
			return __( 'Yearly Archives:', 'sim4usa' ) . get_the_date( _x( 'Y', 'yearly archives date format', 'sim4usa' ) );
		} elseif ( is_category() ) {
			return __( 'Category:', 'sim4usa' ) . ' ' . single_cat_title( '', false );
		} elseif ( is_author() ) {
			$author_data = get_query_var( 'author_name' ) ? get_user_by( 'slug', get_query_var( 'author_name' ) ) : get_userdata( get_query_var( 'author' ) );

			return __( 'Author:', 'sim4usa' ) . ' ' . $author_data->display_name;
		} elseif ( is_tag() ) {
			return __( 'Tag:', 'sim4usa' ) . ' ' . single_tag_title( '', false );
		} else {
			return __( 'Blog Archives', 'sim4usa' );
		}
	} elseif ( is_search() ) {
		return __( 'Search:', 'sim4usa' ) . ' ' . get_search_query();
	}

	return null;
}
