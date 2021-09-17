<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aweco
 */

?>
</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer bg-dark py-3 shadow text-muted">

		<div class="container d-flex justify-content-between align-items-center">
		<p class="footer-copyright h5 m-0">
		&copy; <a class="text-uppercase strong text-muted text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>	
		</p> 
			<p class="m-0 back">
				<a class="" href="#">
					<i class="bi bi-arrow-up-square-fill fs-3"></i>
				</a>
			</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
