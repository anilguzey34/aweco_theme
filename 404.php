<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aweco
 */

get_header();
?>

	<main id="primary" class="site-main container py-5">

		<section class="error-404 not-found row">
			<header class="page-header text-center">
				<h1 class="display-1"><?php esc_html_e( '404', 'aweco' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content text-center">
				<p class="text-center"><?php esc_html_e( 'File not found', 'aweco' ); ?></p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
?>
