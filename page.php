<?php
/**
 * The static page template.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

get_header();
the_post();
?>
	<main class="page-content">
	<?php
		get_theme_part( 'page/hero' );
		default_content();
	?>
	</main>
<?php
get_footer();
