<?php
/**
 * The partial controlling subnavs in the header.
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

?>

<nav class="main-header__subnav">
	<?php echo wp_kses( $sub_nav, 'main-header-nav' ); ?>
</nav>
