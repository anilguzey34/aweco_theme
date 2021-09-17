<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aweco
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area mt-4">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

	<div class="comments-title-list d-flex justify-content-between align-items-center mb-3 ">
		<h2 class="comments-title h5 mb-0">
			<?php
			$aweco_comment_count = get_comments_number();
			if ( '1' === $aweco_comment_count ) : 
				?>
				<?php esc_html_e( '1 comment', 'aweco' ); ?>
			<?php else : ?>
				<?php
					printf(
						/* translators: %s: Comment count number. */
						esc_html( _nx( '%s comment', '%s comments', $aweco_comment_count, 'Comments title', 'aweco' ) ),
						esc_html( number_format_i18n( $aweco_comment_count ) )
					);
				?>
			<?php endif; ?>

		</h2><!-- .comments-title -->
		<button class="btn btn-dark rounded-0" type="button" data-bs-toggle="collapse"
			data-bs-target="#collapseCommentList" aria-expanded="false" aria-controls="collapseCommentList">
			Show Comments
		</button>
	</div>

		<?php the_comments_navigation(); ?>

	<div class="collapse" id="collapseCommentList">
		<div class="card card-body p-0 rounded-0 border-0">
			<ol class="comment-list">
				<?php
					wp_list_comments(
						array(
							'style'       => 'ol',
							'short_ping'  => true,
							'avatar_size' => '50',
						)
					);
				?>
			</ol><!-- .comment-list -->
		</div>
	</div>
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'aweco' ); ?></p>
			<?php
		endif;
	endif; // Check for have_comments().
	comment_form();
	?>
</div><!-- #comments -->
