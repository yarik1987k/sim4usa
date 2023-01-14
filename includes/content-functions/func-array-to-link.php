<?php
/**
 * Converts an ACF "link" field array into html.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

/**
 * Converts an ACF "link" field array into HTML.
 *
 * @param array  $link      The ACF link field array.
 * @param string $classes   Classes to be applied to the link.
 * @param array  $args {
 *     Optional arguments.
 *
 *     @type int|bool $wrapper          Whether to wrap the link with a div with "c-btn-wrapper" class.
 *                                      Accepts 1|true or 0|false. Default 0|false.
 *     @type int|bool $opening_tag_only Whether to output just the opening tag with no title or closing tag.
 *                                      Accepts 1|true or 0|false. Default 0|false.
 *     @type int|bool $no_title         Whether to not include the title within the link. If true, adds title as aria-label.
 *                                      Accepts 1|true or 0|false. Default 0|false.
 *     @type string   $element          An alternative HTML element to use instead of an '<a>' link.
 *     @type string   $atts             Additional attributes to add to the link element.
 *     @type string   $icon             If using an icon, the icon class to add to the icon '<span>'.
 *     @type string   $icon_position    Whether the icon should appear before or after the title.
 *                                      Accepts before or after. Default after.
 * }
 * @return string           HTML link.
 */
function array_to_link( $link, $classes = '', $args = array() ) {
	if ( empty( $link ) || ! is_array( $link ) ) {
		return;
	}

	$defaults = array(
		'wrapper'          => false,
		'opening_tag_only' => false,
		'no_title'         => false,
		'element'          => null,
		'atts'             => '',
		'icon'             => null,
		'icon_position'    => 'after',
	);

	$args = wp_parse_args( $args, $defaults );

	if ( empty( $link['target'] ) ) {
		$link['target'] = '_self';
	}

	if ( '_blank' === $link['target'] ) {
		$args['atts'] .= ' rel="noopener"';
	}

	if ( strpos( $link['url'], '/uploads/' ) ) {
		$args['atts'] .= ' download';
	}

	if ( ! empty( $args['icon'] ) ) {
		$classes .= ' c-btn--icon';
	}

	if ( ( empty( $link['title'] ) && empty( $args['opening_tag_only'] ) ) || $args['no_title'] ) {
		if ( ! empty( $link['title'] ) ) {
			$args['atts'] .= ' aria-label="' . wp_strip_all_tags( $link['title'] ) . '"';
		} elseif ( ! empty( $args['icon'] ) ) {
			$args['atts'] .= ' aria-label="' . sprintf( __( '%s icon', 'sim4usa' ), $args['icon'] ) . '"';
		}
	}

	$output = '';

	if ( $args['wrapper'] ) {
		$output .= '<div class="c-btn-wrapper">';
	}

	if ( ! empty( $args['element'] ) ) {
		if ( 'button' === $args['element'] ) {
			$args['atts'] .= ' type="button"';
		}

		$output .= '<' . $args['element'] . $args['atts'] . ' class="' . $classes . '">';
	} else {
		$output .= '<a href="' . esc_url( $link['url'] ) . '" class="' . $classes . '" target="' . $link['target'] . '"' . $args['atts'] . '>';
	}

	if ( $args['opening_tag_only'] ) {
		return wp_kses_post( $output );
	}

	if ( ! empty( $args['icon'] ) && 'before' === $args['icon_position'] ) {
		$output .= '<span class="icon ' . $args['icon'] . '"></span>';
	}

	if ( false === $args['no_title'] ) {
		$output .= '<span>' . $link['title'] . '</span>';
	}

	if ( ! empty( $args['icon'] ) && 'before' !== $args['icon_position'] ) {
		$output .= '<span class="icon ' . $args['icon'] . '"></span>';
	}

	if ( ! empty( $args['element'] ) ) {
		$output .= '</' . $args['element'] . '>';
	} else {
		$output .= '</a>';
	}

	if ( $args['wrapper'] ) {
		$output .= '</div>';
	}

	return wp_kses_post( $output );
}
