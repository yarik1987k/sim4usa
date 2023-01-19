<?php
/**
 * Testimonials slider block (repeater) - testimonial partial
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa  1.0
 */

?>

<div class="row">
	<div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
		<div class="testimonial-slider__quote-icon icon-quote"></div>
		<blockquote class="testimonial-slider__quote">
			<?php echo wp_kses_post( $testimonial['quote'] ); ?>
			<footer>
				<?php if ( ! empty( $testimonial['name'] ) ) : ?>
					<cite class="testimonial-slider__name"><?php esc_html_e( $testimonial['name'] ); ?></cite>
				<?php endif; ?>

				<?php if ( ! empty( $testimonial['label'] ) ) : ?>
					<cite class="testimonial-slider__label"><?php esc_html_e( $testimonial['label'] ); ?></cite>
				<?php endif; ?>
			</footer>
		</blockquote>
	</div>
</div>
