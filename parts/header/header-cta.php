<?php
/**
 * The partial controlling the CTA portion of the header.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

?>
<div class="mobile-cta">
<?php 
	echo array_to_link( get_field( 'call_us_cta', 'option' ), 'c-btn c-btn-rounded', array('icon' => 'icon-phone') );
	echo small_cart();
?>
</div>
<?php if($cta){?>
<a class="c-btn c-btn-primary" style="display:none;" href="<?php echo esc_url( $cta['url'] ); ?>" target="<?php esc_attr_e( $cta['target'] ); ?>">
	<span><?php esc_html( $cta['title'] ); ?></span>
</a>
<?php }?>