<?php
/**
 * Register theme post types
 *
 * Post types should always support revisions.
 * Please follow the same format for registering new post types.
 *
 * Reference: https://developer.wordpress.org/reference/functions/register_post_type/
 * Dashicons for menu_icon: https://developer.wordpress.org/resource/dashicons/
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

namespace BaseTheme\PostTypes;

/**
 * Get post type labels
 *
 * @param  string $singular  Singular name for the post type.
 * @param  string $plural    Plural name for the post type.
 * @param  string $menu_name Name the post type will appear as in the admin sidebar.
 * @return array             Lables for registering a post type.
 */
function get_labels( string $singular, string $plural = '', string $menu_name = '' ) : array {
	if ( empty( $plural ) ) {
		$plural = $singular . 's';
	}

	if ( empty( $menu_name ) ) {
		$menu_name = $plural;
	}

	return array(
		'name'                  => _x( $plural, 'Post Type General Name', 'sim4usa' ),
		'singular_name'         => _x( $singular, 'Post Type Singular Name', 'sim4usa' ),
		'menu_name'             => __( $menu_name, 'sim4usa' ),
		'name_admin_bar'        => __( $singular, 'sim4usa' ),
		'archives'              => __( $singular . ' Archives', 'sim4usa' ),
		'attributes'            => __( $singular . ' Attributes', 'sim4usa' ),
		'parent_item_colon'     => __( 'Parent ' . $singular, 'sim4usa' ),
		'all_items'             => __( 'All ' . $plural, 'sim4usa' ),
		'add_new_item'          => __( 'Add New ' . $singular, 'sim4usa' ),
		'add_new'               => __( 'Add New', 'sim4usa' ),
		'new_item'              => __( 'New ' . $singular, 'sim4usa' ),
		'edit_item'             => __( 'Edit ' . $singular, 'sim4usa' ),
		'update_item'           => __( 'Update ' . $singular, 'sim4usa' ),
		'view_item'             => __( 'View ' . $singular, 'sim4usa' ),
		'view_items'            => __( 'View ' . $plural, 'sim4usa' ),
		'search_items'          => __( 'Search ' . $singular, 'sim4usa' ),
		'not_found'             => __( 'Not found', 'sim4usa' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sim4usa' ),
		'featured_image'        => __( 'Featured Image', 'sim4usa' ),
		'set_featured_image'    => __( 'Set featured image', 'sim4usa' ),
		'remove_featured_image' => __( 'Remove featured image', 'sim4usa' ),
		'use_featured_image'    => __( 'Use as featured image', 'sim4usa' ),
		'insert_into_item'      => __( 'Insert into ' . strtolower( $singular ), 'sim4usa' ),
		'uploaded_to_this_item' => __( 'Uploaded to this ' . strtolower( $singular ), 'sim4usa' ),
		'items_list'            => __( $plural . ' list', 'sim4usa' ),
		'items_list_navigation' => __( $plural . ' list navigation', 'sim4usa' ),
		'filter_items_list'     => __( 'Filter ' . strtolower( $plural ) . ' list', 'sim4usa' ),
	);
}

/**
 * Register Gallery post type.
 */
function gallery() {
	register_post_type(
		'gallery',
		array(
			'label'               => __( 'Gallery', 'sim4usa' ),
			'labels'              => get_labels( 'Gallery', 'Galleries' ),
			'supports'            => array( 'title', 'revisions' ),
			'taxonomies'          => array(),
			'public'              => false,
			'publicly_queryable'  => false,
			'show_ui'             => true,
			'exclude_from_search' => true,
			'menu_icon'           => 'dashicons-format-gallery',
			'has_archive'         => false,
		)
	);
}
add_action( 'init', 'BaseTheme\PostTypes\gallery' );

 