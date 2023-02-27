<?php
/**
 * Hero part for default page
 *
 * Title:       Hero
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        align-full-width
 * Keywords:    hero, heading
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

$content_block			= new Content_Block_Gutenberg( $block );
$block_img				= wp_get_attachment_image( get_field( 'hero_image' ), 'large' );
$main_block_class		= 'acf-block block-hero';
$main_title				= get_field('main_title');
$sub_title				= get_field('sub_title');
$cta					= get_field('cta');
$background_image_url 	= wp_get_attachment_image( get_field( 'background_image' ), 'full' );

?><section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="<?php esc_attr_e( $main_block_class ); ?>">
		<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-lg-5">
					<div class="block-hero__content">
						<?php if(!empty($main_title)):?>
							<h1><?php echo wp_kses_post($main_title); ?></h1>
						<?php endif; ?>
						<?php if(!empty($sub_title)):?>
							<h2><?php echo wp_kses_post($sub_title); ?></h2>
						<?php endif; ?>
						<?php if(!empty($cta)):?>
							 <?php echo array_to_link( $cta, 'c-btn c-btn-primary c-btn-primary--icon', array('icon' => 'icon-arrow-right') ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-7 col-12">
					<div class="block-hero__img">
						<figure><?php echo wp_kses_post( $block_img ); ?></figure>
					</div>
				</div>
			</div>
		</div>
		<?php if($background_image_url):?>
			<figure class="block-hero__background-image">
				<?php echo wp_kses_post($background_image_url); ?>
			</figure>
		<?php endif;?>
	</section>
