<?php
/**
 * The Header for theme.
 *
 * Displays all of the <head> section and page header
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */



get_theme_part( 'html-head' );
?>

<body <?php body_class(); ?>>
<?php 
	echo 'bubububu';
?>
	<div id="page">
		<?php get_theme_part( 'header/header-alert-bar' ); ?>

		<header class="main-header">
			<div class="main-header__wrapper">
				<div class="d-flex w-100 justify-content-between">
					<div class="main-header__left">
						<?php
						$main_logo = get_field( 'main_logo', 'option' );
						if ( ! empty( $main_logo ) ) :
							?>
							<a
								href="<?php echo esc_url( home_url() ); ?>"
								class="main-header__logo"
								><?php echo wp_kses_post( wp_get_attachment_image( $main_logo, 'main-logo' ) ); ?></a
							>
						<?php endif; ?>

						<nav class="main-header__nav">
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
					</div>

					<?php get_theme_part( 'header/header-nav-mobile' ); ?>

					<div class="main-header__right">
						<?php
						echo array_to_link( get_field( 'secondary_cta', 'option' ), 'c-btn c-btn-secondary c-btn-secondary--small' );
						echo array_to_link( get_field( 'primary_cta', 'option' ), 'c-btn c-btn-primary c-btn-primary--small' );
						echo array_to_link( get_field( 'call_us_cta', 'option' ), 'c-btn c-btn-rounded', array('icon' => 'icon-phone') );
						?>
						
					</div>
				</div>
			</div>
		</header>
