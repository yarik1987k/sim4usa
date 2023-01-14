<?php
/**
 * Get theme setting from the theme settings.json file
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

/**
 * Get theme setting from the theme settings.json file
 *
 * @param string $setting to grab from the file.
 * @return mixed
 */
function get_theme_setting( $setting ) {
	global $theme_settings_file;

	if ( empty( $theme_settings_file ) ) {
		$theme_settings_file = file_get_contents( get_stylesheet_directory() . '/settings.json' );
		$theme_settings_file = json_decode( preg_replace( '/\/\*(?s).*?\*\//', '', $theme_settings_file ) );
	}

	if ( property_exists( $theme_settings_file, $setting ) ) {
		return $theme_settings_file->{ $setting };
	}

	return false;
}
