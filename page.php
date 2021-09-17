<?php
/**
 *
 * @package aweco
 */

get_header();
?>

	<main id="primary" class="site-main container py-4 my-2">
        <div class="row">
            <div class="col-12 aweco-col mx-auto px-3">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div><!-- ./col-12 -->
        </div><!-- ./row -->
	</main><!-- #main -->


<?php get_footer(); ?>
