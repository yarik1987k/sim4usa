<?php
/**
 * Returns phone number without unnecessary characters.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

/**
 * Returns phone number without unnecessary characters.
 *
 * @param string $number Number to clear.
 * @return string        Cleared number.
 */
function clear_phone_number( $number ) {
	$chars = array( '(', ')', '-', '+', ' ' );
	return str_replace( $chars, '', $number );
}
