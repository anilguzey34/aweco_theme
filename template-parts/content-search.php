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
<article id="post-<?php the_ID(); ?>" <?php post_class('col aweco-standard-format'); ?>>
    <div class="card">
      <?php aweco_post_thumbnail(); ?>
        <div class="card-body">
                
            <header class="entry-header">
                <div class="category text-uppercase mb-2">
                    <?php aweco_posted_category (); ?>
                </div>
                <?php 
                the_title( sprintf( '<h2 class="card-title h4 mb-2"><a class="text-dark text-decoration-none aweco-post-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            </header>

            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->

            <footer class="entry-footer small text-muted d-flex" >
                <?php aweco_posted_on (); ?>
                    <span class="px-1"><?php echo (' · '); ?></span>
             
            </footer>

        </div><!--card-body-->
    </div><!--card-->
</article><!-- #post-<?php the_ID(); ?> -->



