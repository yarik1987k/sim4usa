<?php
/**
 * Thumbnails.
 *
 * This component the thumbnail support and functionalities related to
 * the image sizes.
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

defined( 'ABSPATH' ) || die();

/**
 * Class managing this themes thumbnails and image sizes.
 */
class Theme_Core_Thumbnails extends Theme_Core_Component {

	/**
	 * Add support for thumbnails and register all images sizes
	 * added in the settings file.
	 */
	protected function init() {
		if ( ! function_exists( 'add_theme_support' ) ) {
			return;
		}

		add_theme_support( 'post-thumbnails' );

		if ( isset( $this->settings->thumbnails ) ) {
			foreach ( $this->settings->thumbnails as $thumb_params ) {

				// Reserved Image Size.
				switch ( $thumb_params[0] ) {
					case 'thumbnail':
						update_option( 'thumbnail_size_w', $thumb_params[1] );
						update_option( 'thumbnail_size_h', $thumb_params[2] );
						update_option( 'thumbnail_crop', $thumb_params[3] );
						continue 2;
					case 'medium':
						update_option( 'medium_size_w', $thumb_params[1] );
						update_option( 'medium_size_h', $thumb_params[2] );
						if ( false === get_option( 'medium_crop' ) ) {
							add_option( 'medium_crop', $thumb_params[3] );
						} else {
							update_option( 'medium_crop', $thumb_params[3] );
						}
						continue 2;
					case 'large':
						update_option( 'large_size_w', $thumb_params[1] );
						update_option( 'large_size_h', $thumb_params[2] );
						if ( false === get_option( 'large_crop' ) ) {
							add_option( 'large_crop', $thumb_params[3] );
						} else {
							update_option( 'large_crop', $thumb_params[3] );
						}
						continue 2;
				}

				// Custom Image Size.
				add_image_size(
					$thumb_params[0],
					$thumb_params[1],
					$thumb_params[2],
					$thumb_params[3]
				);
			}
		}
	}
}
