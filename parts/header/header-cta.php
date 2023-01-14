<?php
/**
 * The partial controlling the CTA portion of the header.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

?>

<a class="c-btn c-btn-primary" href="<?php echo esc_url( $cta['url'] ); ?>" target="<?php esc_attr_e( $cta['target'] ); ?>">
	<span><?php esc_html( $cta['title'] ); ?></span>
</a>
