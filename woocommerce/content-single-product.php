<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
//do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<?php 
$product_options = get_field('product_options');
$product_plan = get_field('product_plan');
$opereator_logo = get_field('opereator_logo');
$amount_of_traffic = get_field('amount_of_traffic');

?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'container', $product ); ?>>
	<div class="product-template">
		<div class="row">
				<div class="col-md-12">
					<div class="bread-crumbs">
						<?php echo woocommerce_breadcrumb(); ?>
					</div>
				</div>
				<div class="col-12">
					<?php woocommerce_output_all_notices(); ?>
				</div>
			</div>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="product-image">
					<?php woocommerce_show_product_images();?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="product-option">
					<div class="product-title"><?php woocommerce_template_single_title();?></div>
					<div class="product-sub_title">
						<div class="left">
							<?php if(!empty($opereator_logo)):?>
								<figure>
									<img src="<?php echo $opereator_logo;?>"/>
								</figure>
							<?php endif;?>
							<div class="product-plan-info">
								<?php if(!empty($product_plan)):?>
									<span><?php echo $product_plan;?></span>
								<?php endif;?>
								<?php if(!empty($amount_of_traffic)):?>
									<h5><?php echo $amount_of_traffic;?><span>/mo</span></h5>
								<?php endif;?>
							</div>
						</div>
						<div class="right">
							<div class="product-price-new">
								<?php woocommerce_template_single_price(); ?><span>/mo</span>
							</div>
						</div>
					</div>
					<div class="product-info">
						<div class="short-info">
							<h3>INCLUDES</h3>
							<?php woocommerce_template_single_excerpt();?>
							<button class="c-btn c-btn-tertiary popup popup-toggle" data-target="">See More </button>
						</div>

						<?php if($product_options):?>
							<div class="popup-extra">
								<div class="container">

									<div class="close-popup popup-toggle">
										<button class="icon icon-close"></button>
									</div>
									<div class="accordion">
									<?php foreach($product_options as $option):?>
										<div class="single-accordion bellow">
											<div class="single-accordion-title bellow__title"><button><h5><?php echo $option['title']; ?></h5></button></div>
											<div class="single-accordion-content bellow__content">
												<?php echo $option['content']; ?>
											</div>
										</div>
									<?php endforeach; ?>
									</div>
								</div>
							</div>
						<?php endif;?>
						<div class="sim-tyep-option-hellper">
							<button class="check-helper"> See the benefits and find the best fit for you
								<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M1.99609 12.5625C1.99609 7.0425 6.47609 2.5625 11.9961 2.5625C17.5161 2.5625 21.9961 7.0425 21.9961 12.5625C21.9961 18.0825 17.5161 22.5625 11.9961 22.5625C6.47609 22.5625 1.99609 18.0825 1.99609 12.5625ZM10.9961 7.5625V13.5625H12.9961V7.5625H10.9961ZM10.9961 15.5625V17.5625H12.9961V15.5625H10.9961Z" fill="#A5A6F6"/>
								</svg>
							</button>
							<div class="sim-benefit-popup">

									<div class="close-sim-benefit-popup">
										<button class="icon icon-close"></button>
									</div>
									<div class="single-helper">
										<h5>eSIM Benefits</h4>
										<p>New Embedded SIM only eligible on select devices and delivered via email.</p>
										<ul>
											<li>Securely activate in minutes</li>
											<li>eSIM capable device can have two active lines on the same phone</li>
										</ul>
										<h6>CHECK IF YOUR PHONE IS ESIM ELIGIBLE</h6>
										<p>These are all eSIM supported devices that let you activate your plan in just a few minutes.</p>
										<div class="options">
											<input type="text" id="search-box" placeholder="Enter your phone brand...">
											<ul id="results-list"></ul>
										</div>
									</div>
									<div class="single-helper">
										<h5>Physical SIM Benefits</h4>
										<p>3-in-1 SIM Kit that works in most phones.</p>
										<ul>
											<li>Easily switch between devices by popping out your SIM</li>
										</ul>
										<h6>CHECK IMEI</h6>
										<div class="options">
											<input type="text" id="search-box-imei" placeholder="Enter your IMEI Number...">
											<button id="submit-imei" class="c-btn ">Submit IMEI</button>
											<div id="result-imei"></div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<?php woocommerce_template_single_add_to_cart(); ?>
					<figure class="security-logo">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/security.png"/>
					</figue>
				</div>
			</div>
		</div>
	</div>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	//do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?> 