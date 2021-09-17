<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aweco
 */

get_header();
?>

	<main id="main" class="site-main container py-4" role="main">
		
			<?php if ( have_posts() ) : ?>
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 blog-post">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			
			<?php endwhile; ?>
		</div>

		<div class="row pagination-row mb-1">
			<div class="col-12">
				<?php the_posts_pagination( array(
					'mid_size'  => 1,
					'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'aweco' ),
					'next_text' => __( ' <span aria-hidden="true">&raquo;</span>', 'aweco' ),
				) ); ?>
			</div>
		</div>

		<?php else : ?>

			<div class="row">
				<div class="col-md-8 mx-auto">
					<?php get_template_part( 'template-parts/content', 'none' ); ?>	
				</div>
			</div>

		<?php endif; ?>

	</main><!-- #main -->


<?php get_footer(); ?>
