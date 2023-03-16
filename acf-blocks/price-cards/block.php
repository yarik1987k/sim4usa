<?php
/**
 * Price Cards
 *
 * Title:       Price Cards
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        align-full-width
 * Keywords:    price, card
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * CSS Deps:    slick
 * JS Deps:     slick
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa  1.0
 */

$content_block		= new Content_Block_Gutenberg( $block );
$main_block_class	= 'acf-block block-price-cards';
$cards 				= get_field('cards'); 
if ( ! empty( $cards ) ) : 

	$count = count($cards);
	$card_class = ($count > 2) ? 'col-4' : 'col-5' ;
	$slider_init = ($count > 2) ? 'cards-slider-init' : '' ; 

?><section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="<?php esc_attr_e( $main_block_class ); ?>">
		<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
		<div class="container">
			<div class="row cards-slider <?php echo $slider_init; ?> justify-content-center">
			<?php

				foreach ( $cards as $card ) { ?>
				
				<div class="<?php echo $card_class;?>">
					<div class="single-card">
						<div class="single-card__top">
							<div class="single-card__inner">
								<div class="logo">
									<?php echo wp_kses_post(wp_get_attachment_image($card['logo']));?>
								</div>
								<div class="content-top">
									<div class="single-card__title"><?php echo wp_kses_post($card['title']);?></div>
									<div class="single-card__main-title"><?php echo wp_kses_post($card['main_title']);?><span>/mo</span></div>
								</div>
							</div>
						</div>
						<div class="single-card__price"><?php echo wp_kses_post($card['price']);?><span>/mo</span></div>
						
						<div class="single-card__bullets">
							<ul>
								<?php foreach($card['bullets'] as $bullet):?>
									<li><span></span><?php echo wp_kses_post($bullet['bullet']);?></li>
								<?php endforeach; ?>
							</ul> 
						</div>
						<div class="single-card__cta">
							<?php echo array_to_link( $card['cta'], 'c-btn c-btn-primary '); ?>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
	<?php
endif;