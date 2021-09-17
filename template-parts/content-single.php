<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aweco
 * 
 * Standart Post Format
 * 
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-card-article'); ?>>

    <header class="entry-header mb-3 d-flex flex-column justify-content-center">
        <div class="category text-uppercase mb-2 pb-1">
		
            <?php aweco_posted_category (); ?>
        </div>
            <?php the_title( '<h1 class="card-title mb-3 text-break">', '</h1>' ); ?>
          <span class="text-muted small d-block">
                <?php aweco_posted_on (); ?>
          </span>
     </header>

     <?php aweco_post_thumbnail(); ?>

     <div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aweco' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aweco' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
	<?php aweco_entry_footer(); ?>
	<div class="author-profile px-1">
		<div class="d-flex">
			<div class="flex-shrink-0">
				<?php echo get_avatar(get_the_author_meta('ID'), 64) ?>
			</div>
			<div class="flex-grow-1 ms-3">
				<p class="h5 mb-2 d-flex justify-content-between align-items-center"><?php echo esc_html(get_the_author_meta('nickname')) ?>
				<a class="wr text-muted" href="<?php echo esc_html(get_author_posts_url(get_the_author_meta('ID'))) ?>">View all posts</a>
				</p>
				<p class="small mb-2 pe-2"><?php echo esc_html( get_the_author_meta('description')) ?></p>
			</div>
		</div>
	</div>
	</footer>


</article><!-- #post-<?php the_ID(); ?> -->