<?php
/**
 * The partial controlling the header navigation.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

?>

<nav class="main-header__nav col-12 col-lg-6">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container'      => false,
		)
	);
	?>
</nav>
<div class="mega-menu-background"></div>
