<?php
/**
 * The single post page template.
 *
 * @package    WordPress
 * @subpackage sim4usa
 * @since      sim4usa 1.0
 */

get_header();
the_post();

$category_ids = wp_get_post_categories( $post->ID );

$categories = array_reduce(
	$category_ids,
	function( $array, $category_id ) {
		if ( 1 !== $category_id ) {
			$array[] = get_cat_name( $category_id );
		}

		return $array;
	}
);

$tags = get_tags();
?>
	<article class="post-single">
		<div class="post-single__top">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 col-lg-8 mx-auto">
						<header>
							<?php if ( ! empty( $categories ) ) : ?>
								<div class="post-single__categories"><?php esc_html_e( implode( ', ', $categories ) ); ?></div>
							<?php endif; ?>

							<h1 class="post-single__title"><?php the_title(); ?></h1>

							<div class="post-single__tagline">
								<div class="post-single__tagline-inner">
									<address class="post-single__author">By <a rel="author"><?php the_author(); ?></a></address>
									<time class="post-single__date"><?php the_date(); ?></time>
								</div>
							</div>
						</header>
					</div>
				</div>
			</div>
		</div>

		<div class="post-single__content">
			<?php default_content(); ?>
		</div>

		<footer class="post-single__footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5 offset-md-1 col-lg-4 offset-lg-2">
						<?php if ( ! empty( $tags ) ) : ?>
							<div class="post-single__tags">
								<div class="post-single__tags-title overline">Tags</div>
								<div class="d-flex flex-wrap">
									<?php foreach ( $tags as $item ) : ?>
										<a class="post-single__tag" href="<?php echo esc_url( get_tag_link( $item ) ); ?>"><?php esc_html_e( $item->name ); ?></a>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-5 col-lg-4">
						<?php get_theme_part( 'global/share-icons' ); ?>
					</div>
				</div>
			</div>
		</footer>
	</article>
 
<?php
//get_theme_part( 'page/block-related-posts', array( 'title' => 'Related Posts' ) );
get_footer();
