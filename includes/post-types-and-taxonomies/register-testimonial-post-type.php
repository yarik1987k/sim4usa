<?php
/**
 * Testimonial Post Type.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

if ( get_theme_setting( 'use_testimonal_post_type' ) ) {
	$labels = array(
		'name'                  => __( 'Testimonials', 'sim4usa' ),
		'singular_name'         => __( 'Testimonial', 'sim4usa' ),
		'menu_name'             => __( 'Testimonials', 'sim4usa' ),
		'name_admin_bar'        => __( 'Testimonial', 'sim4usa' ),
		'add_new'               => __( 'Add New', 'sim4usa' ),
		'add_new_item'          => __( 'Add New Testimonial', 'sim4usa' ),
		'new_item'              => __( 'New Testimonial', 'sim4usa' ),
		'edit_item'             => __( 'Edit Testimonial', 'sim4usa' ),
		'view_item'             => __( 'View Testimonial', 'sim4usa' ),
		'all_items'             => __( 'All Testimonials', 'sim4usa' ),
		'search_items'          => __( 'Search Testimonials', 'sim4usa' ),
		'parent_item_colon'     => __( 'Parent Testimonials:', 'sim4usa' ),
		'not_found'             => __( 'No testimonials found.', 'sim4usa' ),
		'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'sim4usa' ),
		'featured_image'        => __( 'Testimonial Cover Image', 'sim4usa' ),
		'archives'              => __( 'Testimonial archives', 'sim4usa' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'sim4usa' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'sim4usa' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'sim4usa' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'sim4usa' ),
		'items_list'            => __( 'Testimonials list', 'sim4usa' ),
	);

	$args = array(
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-format-chat',
		'public'              => false,
		'has_archive'         => false,
		'publicly_queryable'  => false,
		'show_ui'             => true,
		'exclude_from_search' => true,
		'supports'            => array( 'title', 'thumbnail' ),
		'rewrite'             => array( 'slug' => 'testimonial' ),
	);

	register_post_type( 'testimonial', $args );
}
