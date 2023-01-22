<?php
/**
 * The main template file.
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

get_header();

$tax_conditions = is_tax() || is_category();
$heading_text   = get_blog_heading();
$blog_page_id   = get_option( 'page_for_posts' );
$this_post_type = get_post_type();
$this_taxonomy  = $tax_conditions ? get_queried_object()->taxonomy : null;
$term_id        = $tax_conditions ? get_queried_object()->term_id : null;
?>

	<header class="blog-hero">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<h1 class="blog-hero__title">
						<?php esc_html_e( get_the_title( $blog_page_id ) ); ?>
					</h1>
				</div>

				<div class="col-12 col-md-6">
					<div class="blog-hero__text">
						<?php echo wp_kses_post( get_field( 'intro_content', $blog_page_id ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="content container">
		<div class="row">
			<div class="col-12">
				<?php
				if ( class_exists( 'eight29_filters' ) && ! is_search() ) {
					// Update the conditional and attributes as needed.
					// Full list of attributes here: https://bitbucket.org/829studios/829-blog-category-filters-react/src/master/.
					echo do_shortcode(
						'[eight29_filters
						post_type="' . $this_post_type . '"
						display_sidebar="top"
						posts_per_page="10"
						taxonomy="' . $this_taxonomy . '"
						term_id="' . $term_id . '"
						]'
					);
				}
				?>
			</div>
		</div>
	</main>

<?php
get_footer();
