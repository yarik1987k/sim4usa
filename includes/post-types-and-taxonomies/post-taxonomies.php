<?php
/**
 * Register theme taxonomies
 *
 * Please follow the same format for registering new taxonomies.
 *
 * Reference: https://developer.wordpress.org/reference/functions/register_taxonomy/
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

namespace BaseTheme\Taxonomies;

/**
 * Get taxonomy labels
 *
 * @param  string $singular  Singular name for the taxonomy.
 * @param  string $plural    Plural name for the taxonomy.
 * @param  string $menu_name Name the taxonomy will appear as in the admin sidebar.
 * @return array             Lables for registering a taxonomy.
 */
function get_labels( string $singular, string $plural = '', string $menu_name = '' ) : array {
	if ( empty( $plural ) ) {
		$plural = $singular . 's';
	}

	if ( empty( $menu_name ) ) {
		$menu_name = $plural;
	}

	return array(
		'name'                       => _x( $plural, 'Taxonomy General Name', 'sim4usa' ),
		'singular_name'              => _x( $singular, 'Taxonomy Singular Name', 'sim4usa' ),
		'menu_name'                  => __( $menu_name, 'sim4usa' ),
		'all_items'                  => __( 'All ' . $plural, 'sim4usa' ),
		'parent_item'                => __( 'Parent ' . $singular, 'sim4usa' ),
		'parent_item_colon'          => __( 'Parent ' . $singular . ':', 'sim4usa' ),
		'new_item_name'              => __( 'New ' . $singular . ' Name', 'sim4usa' ),
		'add_new_item'               => __( 'Add New ' . $singular, 'sim4usa' ),
		'edit_item'                  => __( 'Edit ' . $singular, 'sim4usa' ),
		'update_item'                => __( 'Update ' . $singular, 'sim4usa' ),
		'view_item'                  => __( 'View ' . $singular, 'sim4usa' ),
		'separate_items_with_commas' => __( 'Separate ' . strtolower( $plural ) . ' with commas', 'sim4usa' ),
		'add_or_remove_items'        => __( 'Add or remove ' . strtolower( $plural ), 'sim4usa' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'sim4usa' ),
		'popular_items'              => __( 'Popular ' . $plural, 'sim4usa' ),
		'search_items'               => __( 'Search ' . $plural, 'sim4usa' ),
		'not_found'                  => __( 'Not Found', 'sim4usa' ),
		'no_terms'                   => __( 'No ' . strtolower( $plural ), 'sim4usa' ),
		'items_list'                 => __( $plural . ' list', 'sim4usa' ),
		'items_list_navigation'      => __( $plural . ' list navigation', 'sim4usa' ),
	);
}

/**
 * Type
 */
function type() {
	$args = array(
		'labels'            => get_labels( 'Type' ),
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
	);

	register_taxonomy( 'type', array( 'post', 'gallery' ), $args );
}
add_action( 'init', 'BaseTheme\Taxonomies\type' );
