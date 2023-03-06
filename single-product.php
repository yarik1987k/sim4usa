<?php
/**
 * The single product post page template.
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

get_header();
the_post();
 
?>
 <?php get_template_part('woocommerce/content-single-product');?>
<?php
 the_content();
//get_theme_part( 'page/block-related-posts', array( 'title' => 'Related Posts' ) );
get_footer();
