<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aweco
 */

get_header();
?>

<main id="primary" class="site-main container pb-4 my-2">

	<?php if ( have_posts() ) : ?>

	<header class="page-header d-flex flex-column  text-center align-items-center  bg-light my-4 p-4">
		<?php
				the_archive_title( '<h1 class="card-title h3 mb-0">', '</h1>' );
				the_archive_description( '<div class="archive-description mt-2">', '</div>' );
		?>
	</header><!-- .page-header -->
	<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 blog-post">
		<?php
		while ( have_posts() ) :
					the_post();
			?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php endwhile; ?>
	</div>
	<div class="row pagination-row mb-1">
		<div class="col-12">
			<?php
				the_posts_pagination(
					array(
						'mid_size'  => 1,
						'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'aweco' ),
						'next_text' => __( ' <span aria-hidden="true">&raquo;</span>', 'aweco' ),
					)
				);
			?>
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
