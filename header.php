<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aweco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text d-none" href="#content"><?php esc_html_e( 'Skip to content', 'aweco' ); ?></a>
	<div class="header-modal">
		<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered h-auto modal-fullscreen">
				<div class="modal-content bg-transparent border-5">
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-8 mx-auto">
									<div class="d-flex justify-content-center pb-4">
										<button button type="button" class="bg-transparent border-0 p-0" data-bs-dismiss="modal" aria-label="Close">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle text-white" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
										<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
										</svg>
										</button>
									</div><!-- flex- -->
										<?php get_search_form(); ?>
								</div><!-- col- -->
							</div><!-- row- -->
						</div><!-- container- -->
					</div><!-- modal-body- -->
				</div><!-- modal-content- -->
			</div><!-- modal-dialog- -->
		</div><!-- modal-fade- -->
	</div><!-- header-modal -->
<!-- Modal -->
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
			<div class="container">
				<div class="site-branding me-auto">
				<?php
					the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
						<h1 class="site-title h2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title h2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$aweco_description = get_bloginfo( 'description', 'display' );
					if ( $aweco_description || is_customize_preview() ) :
						?>
						<p class="site-description small"><?php echo esc_html( '$aweco_description;' ); ?></p>
					<?php endif; ?>
					</div><!--site-branding-->
					<button type="button" class="btn px-1 border-0 search-button me-1 me-lg-0" data-bs-toggle="modal" data-bs-target="#searchModal">
					<i class="bi bi-search"></i>
					</button>

					<button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#AwecoNav" aria-controls="AwecoNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="AwecoNav">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'Header-Menu',
								'menu_id'        => 'primary-menu',
								'container'      => 'ul',
								'menu_class'     => 'nav-menu navbar-nav ms-auto my-1 my-lg-0',
							)
						);
						?>
					</div>
			</div><!--container-->
		</nav><!--navbar-->
	</header><!--header-->
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
