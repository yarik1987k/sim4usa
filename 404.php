<?php
/**
 * The 404 page template.
 *
 * @package    WordPress
 * @subpackage defaultTheme
 * @since      defaultTheme 1.0
 */

get_header();

?>

	<main>
		<h3>404</h3>
		<h1><?php the_field( 'x404_headline', 'options' ); ?></h1>
		<?php the_field( 'x404_content', 'options' ); ?>
	</main>

<?php
get_footer();
