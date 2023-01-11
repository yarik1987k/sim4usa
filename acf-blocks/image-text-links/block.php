<?php
/**
 * Block for images & text links
 *
 * Title:       Image & Text Links
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
 * @subpackage defaultTheme
 * @since defaultTheme 1.0
 */

$content_block = new Content_Block_Gutenberg( $block );

$cards         = get_field( 'cards' );
$cards_per_row = get_field( 'cards_per_row' );
$fill_last_row = get_field( 'fill_last_row' );

$desktop_cols = 12 / $cards_per_row;
$tablet_cols  = 1 === $cards_per_row ? 12 : 6;
$cols_class   = 'col-lg-' . $desktop_cols . ' col-md-' . $tablet_cols . ' col-sm-12';

if ( $fill_last_row ) {
	$cols_class .= ' mw-100 flex-grow-1';
}
?>

<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="acf-block block-image-text-links">
	<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
	<div class="container">
		<div class="block-image-text-links__cards">
			<div class="row">
				<?php foreach ( $cards as $card ) : ?>
					<div class="<?php esc_attr_e( $cols_class ); ?>">
						<?php if ( ! empty( $card['link']['url'] ) ) : ?>
							<a 
								href="<?php echo esc_url( $card['link']['url'] ); ?>"
								target="<?php esc_attr_e( $card['link']['target'] ); ?>" 
								class="block-image-text-links__block"
							>
								<?php if ( ! empty( $card['image'] ) && 0 !== $card['image'] ) : ?>
									<figure class="block-image-text-links__image-container">
										<?php echo wp_get_attachment_image( $card['image'], 'standard-width-block' ); ?>
									</figure>
								<?php endif; ?>

								<?php if ( ! empty( $card['link']['title'] ) ) : ?>
									<div class="block-image-text-links__link">
										<?php esc_html_e( $card['link']['title'] ); ?>
									</div>
								<?php endif; ?>
							</a>
						<?php elseif ( ! empty( $card['image'] ) && 0 !== $card['image'] ) : ?>
							<div class="block-image-text-links__block">
								<figure class="block-image-text-links__image-container">
									<?php echo wp_get_attachment_image( $card['image'], 'standard-width-block' ); ?>
								</figure>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<?php
