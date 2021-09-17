<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aweco
 */

get_header();
?>

    <main id="main" class="site-main container py-4 mb-2 mt-0" role="main">
        <div class="row">
            <div class="aweco-col col-xl-6 col-lg-8 col-md-10 mx-auto px-3">
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'single');
                      
                          the_post_navigation(
                            array(
                                'prev_text' => '<span class="nav-subtitle"><i class="bi bi-arrow-left fs-5"></i></span> <span class="nav-title">%title</span>',// phpcs:WordPress.WP.I18n.NoEmptyStrings'i yoksay
                                'next_text' => '<span class="nav-subtitle"><i class="bi bi-arrow-right fs-5 ms-auto"></i></span> <span class="nav-title">%title</span>',// phpcs:WordPress.WP.I18n.NoEmptyStrings'i yoksay
                            )
                        );
                     

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();

                            
                        endif;

                    endwhile; // End of the loop.
                ?>
            </div>
        </div>
   
    </main>

<?php get_footer(); ?>