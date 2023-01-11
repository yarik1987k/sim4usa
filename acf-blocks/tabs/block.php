<?php
/**
 * Tabs block for page
 *
 * Title:       Tabs
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

$main_block_class = 'acf-block block-tabs';

?>
<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="<?php esc_attr_e( $main_block_class ); ?>">
	<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
	<div class="tabs__link-list-wrapper">
		<div class="container">
			<div class="row section-without-title">
				<div class="<?php echo is_admin() ? esc_attr( 'editor-full-width ' ) : esc_attr( '' ); ?>col-12 col-md-12 col-lg-10 col-xl-8 mx-auto">
					<div class="tab-head-wrap">
						<div class="tab-head">
							<ul class="tabs__link-list">
								<?php
								$iter = 0;
								while ( have_rows( 'tabs' ) ) :
									the_row();
									$el_class = 'tabs__link';
									if ( 0 === $iter ) {
										$el_class .= ' active';
									}
									?>
									<li class="<?php esc_attr_e( $el_class ); ?>">
										<a class="tabs_link--inner" href="<?php esc_attr_e( '#' . ( $iter++ ) ); ?>">
											<?php the_sub_field( 'title' ); ?>
										</a>
									</li>
									<?php
								endwhile;
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs__tab-content-wrapper">
		<?php
		$iter = 0;
		while ( have_rows( 'tabs' ) ) :
			the_row();
			$el_class = 'tabs__tab-content';
			if ( 0 === $iter ) {
				$el_class .= ' active';
			}
			?>
			<div class="<?php esc_attr_e( $el_class ); ?>" data-tab-id="<?php esc_attr_e( '#' . ( $iter++ ) ); ?>">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-10 col-xl-8 mx-auto">
							<?php the_sub_field( 'content' ); ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-10 col-xl-8 mx-auto">
					<div class="tabs__divider"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
