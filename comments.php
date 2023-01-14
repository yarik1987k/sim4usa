<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage sim4usa
 * @since sim4usa 1.0
 */

?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf(
					esc_html( _nx( '1 comment', '%1$s comments', get_comments_number(), 'sim4usa' ) ),
					esc_html( number_format_i18n( get_comments_number() ) ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			?>
		</h2>

		<ul class="comments-list">
			<?php
				wp_list_comments(
					array(
						'style' => 'ul',
					)
				);
			?>
		</ul>

		<div class="nav-comments">
			<?php paginate_comments_links(); ?>
		</div>


		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sim4usa' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	$comment_form_args = array(
		'comment_notes_after' => '',
	);

	comment_form( $comment_form_args );
	?>
</div>
