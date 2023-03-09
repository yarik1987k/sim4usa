<?php
/**
 * Cart item data (when outputting non-flat)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-item-data.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
 
?>
<ul class="variation">
	<?php foreach ( $item_data as $data ) : ?>
		<?php 
			switch ($data['key']) {
				case 'sim type':
					$data['key'] = 'Sim Type';
					break;
				case 'expend covarage':
					$data['key'] = 'Optional add-on: Canada and Mexico';
					break;
				case 'activation date':
					$data['key'] = 'Activation Date';
					break;    
				case 'activation months':
					$data['key'] = 'Activation plan';
					break;        
				default:
					# code...
					break;
			}
		?>
		<li class="<?php echo sanitize_html_class( 'variation-' . $data['key'] ); ?>">
			<?php echo wp_kses_post( $data['key'] ); ?> :  <?php echo wp_kses_post( wpautop( $data['display'] ) ); ?>
			<?php if($data['key'] === 'Sim Type'):?>
				<button class="c-btn c-btn-tertiary change-sim" data-sim-type="<?php echo $data['display'];?>">Change sim type</button>
				<div class="popup-change-sim">
					<div class="close">
						<button class="icon icon-close close-sim-change"></button>
					</div>
					<div class="sim-options">
						<button class="btn-option <?php echo ($data['display'] === 'eSIM (Digital Delivery)') ? 'no-active' : '';?>" data-type="esim">Change to eSim sim</button>
						<button class="btn-option <?php echo ($data['display'] === 'Physical SIM Card') ? 'no-active' : '';?>" data-type="regular">Change to Physical sim</button>
					</div>
				</div>
			<?php endif;?>
		</li>
	<?php endforeach; ?>
</ul>
