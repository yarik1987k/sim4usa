<?php
/**
 * Testimonials grid block (repeater)
 *
 * Title:       Testimonial Grid Repeater
 * Description: A custom block.
 * Category:    etn-blocks
 * Icon:        admin-comments
 * Keywords:    author, spotlight
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

$content_block = new Content_Block_Gutenberg( $block );

$is_full_width    			= get_field( 'full_width' );
$testimonials     			= get_field( 'testimonials' );
$number_of_tesimonials     	= get_field( 'number_of_tesimonials' );
$pull_from_testimonials     = get_field( 'pull_from_testimonials' );
$button 					= get_field('button');
$main_block_class = $is_full_width
	? 'acf-block block-testimonial-grid block-testimonial-grid--fluid'
	: 'acf-block block-testimonial-grid';

$testimonial_posts = ''; 

if( true == $pull_from_testimonials ){
	$testimonial_posts = get_posts(
		array(
			'post_type'      => 'testimonial',
			'posts_per_page' => 6,
			'sortby'         => 'menu_order',
		)
	);
}else{
	$testimonial_posts = (!empty(get_field( 'testimonials' )) ? get_field( 'testimonials' ) : '');
}
 
?>

<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="<?php esc_attr_e( $main_block_class ); ?>">
	<?php echo wp_kses( $content_block->get_block_spacing(), 'inline-style' ); ?>
		<div class="container">
			<div class="row">
				<?php if(!empty($testimonial_posts)): ?>
					<?php foreach($testimonial_posts as $single):?>
							<?php 
								$image = (true == $pull_from_testimonials ) ? wp_get_attachment_image(get_post_thumbnail_id($single->ID), '') : wp_get_attachment_image($single['image'], '');	
								$name = (true == $pull_from_testimonials ) ? $single->post_title : $single['name'];
								$content = (true == $pull_from_testimonials ) ? get_field('quote', $single->ID) : $single['quote'];
								 
							?>
							<div class="col-12 col-sm-6 col-lg-4">
								<div class="testimonial-single">
									<div class="head">
										<ul>
											<li><span class="icon-star"></span></li>
											<li><span class="icon-star"></span></li>
											<li><span class="icon-star"></span></li>
											<li><span class="icon-star"></span></li>
											<li><span class="icon-star"></span></li>
										</ul>
									</div>
									<div class="text">
										<?php echo wp_kses_post($content); ?>
									</div>
									<div class="footer">
										<div class="image">
											<figure><?php echo wp_kses_post($image);?></figure>
										</div>
										<div class="name">
											<?php echo wp_kses_post($name); ?>
										</div>
									</div>
								</div>
							</div>
					<?php endforeach; ?>
				<?php endif;?>
				<?php if(!empty($button) ):?>
					<div class="col-12">
						<div class="button text-center">
							<?php echo array_to_link( $button, 'c-btn c-btn-secondary' ); ?>
						</div>
					</div>
				<?php endif;?>
			</div>
		</div>
</section>
<?php
