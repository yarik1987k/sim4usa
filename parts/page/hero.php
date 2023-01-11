<?php
/**
 * Page Hero
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

if ( false === get_field( 'hide_hero' ) ) {
	$hero_content   = get_field( 'hero_content' );
	$featured_image = wp_get_attachment_image( get_post_thumbnail_id(), 'large' ); // TODO: actual image size.
	$has_img_class  = ! empty( $featured_image ) ? ' page-hero--has-image' : '';
	$text_col       = ! empty( $featured_image ) ? ' col-sm-12 col-md-6 col-lg-5' : ' col-sm-12 col-md-10 col-lg-8 mx-auto text-center';
	?>

		<section class="page-hero<?php esc_attr_e( $has_img_class ); ?>">

			<div class="container">
				<div class="row">
					<div class="<?php esc_attr_e( $text_col ); ?>">
						<div class="page-hero__text">
							<h1 class="page-hero__title"><?php the_title(); ?></h1>

							<?php if ( ! empty( $hero_content ) ) : ?>
								<div class="page-hero__content">
									<?php echo wp_kses_post( $hero_content ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<?php if ( ! empty( $featured_image ) ) : ?>
						<div class="col-sm-12 col-md-6 offset-lg-1">
							<figure class="page-hero__image">
								<?php echo wp_kses_post( $featured_image ); ?>
							</figure>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>

	<?php
}
