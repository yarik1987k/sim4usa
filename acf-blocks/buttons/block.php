<?php
/**
 * Buttons Block
 *
 * Title:       Buttons
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        button
 * Keywords:    primary, secondary, cta
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * CSS Deps:
 * JS Deps:
 *
 * @package WordPress
 * @subpackage defaultTheme
 * @since defaultTheme  1.0
 */

$content_block = new Content_Block_Gutenberg( $block );

$block_button_alignment = get_field( 'alignment' );
$block_buttons          = get_field( 'buttons' );

$main_block_class = 'block-buttons c-btn-wrapper text-' . $block_button_alignment;

if ( ! empty( $block_buttons ) ) :
	?>
	<div id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="<?php esc_attr_e( $main_block_class ); ?>">
		<?php
		echo wp_kses( $content_block->get_block_spacing(), 'inline-style' );

		foreach ( $block_buttons as $button ) {
			get_theme_part(
				'global/button',
				array(
					'button' => $button['button'],
					'class'  => 'c-btn c-btn-' . $button['button_type'] . ' c-btn-color-' . $button['button_color'],
				)
			);
		}
		?>
	</div>
	<?php
endif;
