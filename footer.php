<?php
/**
 * The footer for theme.
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

 $logo = get_field('logo', 'option');
 $content = get_field('content', 'option');
 $form = get_field('form', 'option');
 $quick_links_title = get_field('quick_links_title', 'option');
 $quick_links_menu = get_field('quick_links_menu', 'option');
 $support_title = get_field('support_title', 'option');
 $support_menu = get_field('support_menu', 'option');
 $secure_icons = get_field('secure_icons', 'option');
 $copyright = get_field('copyright', 'option');
 $social = get_field('social', 'option'); 
  
?>

	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<figure class="main-footer__logo">
						<?php echo (!empty($logo)) ?  wp_kses_post(wp_get_attachment_image($logo)) : '';?>
					</figure>
					<div class="main-footer__content">
						<?php echo (!empty( $content)) ? wp_kses_post( $content) : ''; ?>
					</div>
					<div class="main-footer__form">
						<?php echo (!empty( $form)) ? do_shortcode( $form) : ''; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-widget">
						<h3><?php echo (!empty( $quick_links_title)) ? wp_kses_post( $quick_links_title) : ''; ?></h3>
						<?php echo (!empty( $quick_links_menu)) ? wp_kses_post( $quick_links_menu) : ''; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-widget">
						<h3><?php echo (!empty( $support_title)) ? wp_kses_post( $support_title) : ''; ?></h3>
						<?php echo (!empty( $support_menu)) ? wp_kses_post( $support_menu) : ''; ?>
					</div>
				</div>
				<div class="col-md-2">
					<div class="single-widget">
						<h3>Secure</h3>
						<div class="security-icons">
						<?php if($secure_icons){?>
								<?php foreach($secure_icons as $icon){  ?>
									<figure>
										<?php echo wp_kses_post(wp_get_attachment_image($icon['icon'])) ;?>
									</figure>
								<?php }?>
						<?php }?>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer__bottom">
						<div class="row">
							<div class="col-md-6">
								<p><?php echo (!empty( $copyright)) ? wp_kses_post( $copyright) : ''; ?></p>
							</div>
							<div class="col-md-6">
								<div class="social">
									<ul>
										<?php if(!empty($social['facebook'])):?><li><?php echo array_to_link( $social['facebook'], 'c-btn', array('icon' => 'icon-social-facebook') ); ?></li> <?php endif; ?>
										<?php if(!empty($social['linkedin'])):?><li><?php echo array_to_link( $social['linkedin'], 'c-btn', array('icon' => 'icon-social-linkedin') ); ?></li> <?php endif; ?>
										<?php if(!empty($social['twitter'])):?><li><?php echo array_to_link( $social['twitter'], 'c-btn', array('icon' => 'icon-social-twitter') ); ?></li> <?php endif; ?>
										<?php if(!empty($social['instagram'])):?><li><?php echo array_to_link( $social['instagram'], 'c-btn', array('icon' => 'icon-social-instagram') ); ?></li> <?php endif; ?>
									</ul>
									<?php ?>
								</div>
							</div>
						</div>
					</div>
		</div>
	</footer>
		</div> <!-- /#page -->

		<span class="tablet-checker"></span>

		<?php wp_footer(); ?>

	</body>
</html>
