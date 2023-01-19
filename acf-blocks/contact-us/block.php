<?php
/**
 * Contact us section
 *
 * Title:       Contact Us 
 * Description: A stylelized block with inner blocks.
 * Category:    etn-blocks
 * Icon:        align-wide
 * Keywords:    contact
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
$lead = get_field('lead');
$title = get_field('title');
$text = get_field('text');
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$form_shortcode = get_field('form_shortcode');

?>
<section id="<?php esc_attr_e( $content_block->get_block_id() ); ?>" class="acf-block block-contact-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contact-info">
					<?php if(!empty($lead)):?><div class="lead"><?php echo wp_kses_post($lead);?></div><?php endif;?>
					<?php if(!empty($title)):?><div class="h2"><?php echo wp_kses_post($title);?></div><?php endif;?>
					<?php if(!empty($text)):?><div class="text"><?php echo wp_kses_post($text);?></div><?php endif;?>
				</div>
				<div class="contact-items">
					<ul>
						<?php if(!empty($phone)):?><li>
							<i class="icon-phone"></i>
							<?php echo array_to_link( $phone, '' ); ?>
						</li><?php endif;?>
						<?php if(!empty($email)):?><li>
							<i class="icon-email"></i>
							<?php echo array_to_link( $email, '' ); ?> 
						</li><?php endif;?>
						<?php if(!empty($address)):?><li>
							<i class="icon-map-marker"></i>
							<?php echo array_to_link( $address, '' ); ?>
						</li>	<?php endif;?>					
					</ul>
				</div>
			</div>
			<div class="col-md-6"> 
				<?php if(!empty($form_shortcode)):?>
					<div class="form">
						<?php echo do_shortcode($form_shortcode);?>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<?php
