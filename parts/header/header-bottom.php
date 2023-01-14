<?php
/**
 * The partial controlling the bottom portion of the header.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

?>

<div class="main-header__bottom">
	<div class="main-header__wrapper">
		<div class="row align-items-center">
		<?php
			get_theme_part( 'header/header-bottom-left' );
			get_theme_part( 'header/header-nav' );
			get_theme_part( 'header/header-bottom-right' );
		?>
		</div>
	</div>
</div>
