<?php
/**
 * The partial controlling the bottom left portion of the header.
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

$main_logo = get_field( 'main_logo', 'options' );

if ( ! empty( $main_logo ) ) :
	?>
	<div class="main-header__left col-12 col-lg-3">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-header__logo"><?php echo wp_kses_post( wp_get_attachment_image( $main_logo, 'main-logo' ) ); ?></a>
		<?php get_theme_part( 'header/header-nav-mobile' ); ?>
	</div>
	<?php
endif;
