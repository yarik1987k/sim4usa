<?php
/**
 * The partial controlling the top portion of the header.
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

$sub_nav_bool = get_field( 'h_display_sub_navigation', 'options' );
$sub_nav      = get_field( 'h_sub_navigation', 'options' );

if ( $sub_nav_bool && ! empty( $sub_nav ) ) :
	?>
	<div class="main-header__top">
		<div class="main-header__wrapper">
			<?php get_theme_part( 'header/header-sub-nav', array( 'sub_nav' => $sub_nav ) ); ?>
		</div>
	</div>
	<?php
endif;
