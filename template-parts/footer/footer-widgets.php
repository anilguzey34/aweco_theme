<?php

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
$has_sidebar_3 = is_active_sidebar( 'sidebar-3' );
$has_sidebar_4 = is_active_sidebar( 'sidebar-4' );
if ( $has_sidebar_1 || $has_sidebar_2 || $has_sidebar_3 || $has_sidebar_4  ) { ?>

<?php if ( $has_sidebar_1 || $has_sidebar_2 || $has_sidebar_3 || $has_sidebar_4  ) { ?>

<aside class="d-block text-dark py-4 border-top" role="complementary">
    <div class="container aside-wrapper py-3">
        <div class="row">
            <?php if ( $has_sidebar_1 ) { ?>

                <div class="col-xl-3 col-md-6 awp-m">
                    <div class="awp">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                </div>

             <?php } ?>

             <?php if ( $has_sidebar_2 ) { ?>

                <div class="col-xl-3 col-md-6 awp-m">
                    <div class="awp">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                </div>

            <?php } ?>

            <?php if ( $has_sidebar_3 ) { ?>

                <div class="col-xl-3 col-md-6 awp-m">
                    <div class="awp">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div>
                </div>

            <?php } ?>
          
            <?php if ( $has_sidebar_4 ) { ?>

                <div class="col-xl-3 col-md-6 awp-m">
                    <div class="awp">
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div>
                </div>

            <?php } ?>
        </div><!-- .row -->
    </div><!-- .container -->
</aside>

<?php } ?>

<?php } ?>