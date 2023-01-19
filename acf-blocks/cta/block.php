<?php
/**
 * Block for CTA
 *
 * Title:       Call To Action
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        admin-comments
 * Keywords:    author, spotlight
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * CSS Deps:
 * JS Deps:
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

$content_block = new Content_Block_Gutenberg( $block );

$section_title 				= get_field( 'title' );
$description   				= get_field( 'description' );
$actions       				= get_field( 'action' );
$color_scheme  				= get_field( 'color_scheme' );
$background_color 			= get_field('background_color'); 
$make_image_sticky_to_right = get_field('make_image_sticky_to_right');
$background_image			= wp_get_attachment_image( get_field( 'background_image' ), 'large' );
$sticy_right = ($make_image_sticky_to_right == true ) ? 'sticky-right-img' : '' ;
?>
<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="acf-block block-call-to-action block-call-to-action--<?php esc_attr_e( $color_scheme); ?> <?php echo esc_attr_e($sticy_right);?>" style="background-color: <?php echo $background_color;?>">
	<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
	<div class="container">
		<div class="row">
			<div class="<?php echo is_admin() ? esc_attr( 'editor-full-width ' ) : esc_attr( '' ); ?> col-12 mx-auto">
				<div class="row align-items-center">
					<div class="col-12 col-md-6">
						<h2 class="block-call-to-action__title">
							<?php esc_html_e( $section_title ); ?>
						</h2>
						<?php if ( ! empty( $description ) ) : ?>
							<p class="block-call-to-action__description is-style"><?php esc_html_e( $description ); ?></p>
						<?php endif; ?>
						<?php
							if ( ! empty( $actions ) ) {
								$first_action = $actions[0];

								if ( 'buttons' === $first_action['acf_fc_layout'] ) {
									echo '<div class="c-btn-group">';
									echo array_to_link( $first_action['primary_button'], 'c-btn c-btn-primary c-btn-primary--white', array( 'wrapper' => true ) );
									echo array_to_link( $first_action['secondary_button'], 'c-btn c-btn-secondary', array( 'wrapper' => true ) );
									echo '</div>';
								} elseif ( 'gravity_form' === $first_action['acf_fc_layout'] ) {
									echo '<div class="cta-form">';
									echo do_shortcode( '[gravityform id="' . $first_action['form'] . '" title="false" description="false" ajax="true"]' );
									echo '</div>';
								} elseif ( 'other' === $first_action['acf_fc_layout'] ) {
									echo '<div class="cta-form">';
									echo do_shortcode( $first_action['form'] );
									echo '</div>';
								}
							}
						?>				
					</div>
					<div class="col-12 col-md-6 px-0">
						<figure><?php echo wp_kses_post( $background_image ); ?></figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
