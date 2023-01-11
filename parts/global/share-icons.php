<?php
/**
 * The share icons partial.
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

wp_enqueue_script( 'add-to-any' );

?>

<div class="a2a_kit share-icons">
	<a class="a2a_button_facebook share-icons__link" aria-label="<?php esc_html_e( 'Share on Facebook', 'defaultTheme' ); ?>">
		<span class="icon-social-facebook"></span>
	</a>
	<a class="a2a_button_twitter share-icons__link" aria-label="<?php esc_html_e( 'Share on Twitter', 'defaultTheme' ); ?>">
		<span class="icon-social-twitter"></span>
	</a>
	<a class="a2a_button_linkedin share-icons__link" aria-label="<?php esc_html_e( 'Share on LinkedIn', 'defaultTheme' ); ?>">
		<span class="icon-social-linkedin"></span>
	</a>
	<a class="a2a_dd share-icons__link" href="https://www.addtoany.com/share" aria-label="<?php esc_html_e( 'Share', 'defaultTheme' ); ?>">
		<span class="icon-link"></span>
	</a>
</div>
