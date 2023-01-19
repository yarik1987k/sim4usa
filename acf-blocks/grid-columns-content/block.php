<?php
/**
 * Grid Columns Icon content Block
 *
 * Title:       Grid Columns icon content
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
 * @since sim4usa  1.0
 */

$content_block = new Content_Block_Gutenberg( $block );

// Get container width class.
$container_position = get_field( 'container_position' );
$container_width    = get_field( 'container_width' );
$container_class    = $content_block->get_column_classes(
	$container_width,
	array(
		'mobile'  => 12,
		'tablet'  => 12,
		'desktop' => 12,
	)
);

$columns              = get_field( 'columns' );
$default_column_width = get_field( 'column_width' );

if ( ! empty( $columns ) ) :
	?>
	<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="acf-block block-grid-columns-icon-content">
		<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
		<div class="container">
			<div class="row <?php esc_attr_e( "justify-content-$container_position" ); ?>">
				<div class="<?php esc_attr_e( $container_class ); ?>">
					<div class="row">
						<?php
						foreach ( $columns as $column ) {
							$column_class = $content_block->get_column_classes(
								$column['column_width'],
								$default_column_width
							);
							$icon	= wp_get_attachment_image($column['content_icon'], 'icon-image' );
							?>

							<div class="grid-columns__column <?php esc_attr_e( $column_class ); ?>">
								<div class="d-flex align-items-center">
									<div class="col-sm-2 col-1 p-0">
										<figure style="background-color: <?php echo esc_html_e($column['icon_color']);?>"><?php echo wp_kses_post( $icon ); ?></figure>
									</div>
									<div class="col-11 col-sm-10">
										<div class="h2"><?php echo wp_kses_post( $column['content_title'] ); ?></div>
									</div>
								</div>
								<div class="grid-columns__column-content">
									<?php echo wp_kses_post( $column['content'] ); ?>
								</div>
							</div>

							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
