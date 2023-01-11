<?php
/**
 * Testimonial Post Type.
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

if ( get_theme_setting( 'use_testimonal_post_type' ) ) {
	$labels = array(
		'name'                  => __( 'Testimonials', 'defaultTheme' ),
		'singular_name'         => __( 'Testimonial', 'defaultTheme' ),
		'menu_name'             => __( 'Testimonials', 'defaultTheme' ),
		'name_admin_bar'        => __( 'Testimonial', 'defaultTheme' ),
		'add_new'               => __( 'Add New', 'defaultTheme' ),
		'add_new_item'          => __( 'Add New Testimonial', 'defaultTheme' ),
		'new_item'              => __( 'New Testimonial', 'defaultTheme' ),
		'edit_item'             => __( 'Edit Testimonial', 'defaultTheme' ),
		'view_item'             => __( 'View Testimonial', 'defaultTheme' ),
		'all_items'             => __( 'All Testimonials', 'defaultTheme' ),
		'search_items'          => __( 'Search Testimonials', 'defaultTheme' ),
		'parent_item_colon'     => __( 'Parent Testimonials:', 'defaultTheme' ),
		'not_found'             => __( 'No testimonials found.', 'defaultTheme' ),
		'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'defaultTheme' ),
		'featured_image'        => __( 'Testimonial Cover Image', 'defaultTheme' ),
		'archives'              => __( 'Testimonial archives', 'defaultTheme' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'defaultTheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'defaultTheme' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'defaultTheme' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'defaultTheme' ),
		'items_list'            => __( 'Testimonials list', 'defaultTheme' ),
	);

	$args = array(
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-format-chat',
		'public'              => false,
		'has_archive'         => false,
		'publicly_queryable'  => false,
		'show_ui'             => true,
		'exclude_from_search' => true,
		'supports'            => array( 'title' ),
		'rewrite'             => array( 'slug' => 'testimonial' ),
	);

	register_post_type( 'testimonial', $args );
}
