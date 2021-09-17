<?php
/**
 * Aweco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aweco
 */

if ( ! defined( 'AWECO_THEME_VERSION' ) ) {
	
	define( 'AWECO_THEME_VERSION', '1.0.0' );
}


if ( ! function_exists( 'aweco_setup' ) ) :

	function aweco_setup() {
		
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );
	
		add_theme_support( 'custom-units' );

		add_image_size( 'featured-image', 500, 250, true );

		add_image_size( 'single-image', 1280, 9999 );

		add_editor_style( 'css/editor-style.css' );  //** optional */

		register_nav_menus(
			array(
				'Header-Menu' => esc_html__( 'Primary', 'aweco' ),
			)
		);

		
		add_theme_support( 
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'aweco_custom_background_args', 
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'aweco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aweco_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aweco_content_width', 640 );
}
add_action( 'after_setup_theme', 'aweco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aweco_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One Column', 'aweco' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Footer One Column Widget Area.', 'aweco' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two Column', 'aweco' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Footer Two Column Widget Area.', 'aweco' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Thre Column', 'aweco' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Footer Three Column Widget Area..', 'aweco' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Four Column', 'aweco' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Footer Four Column Widget Area..', 'aweco' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'aweco_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aweco_scripts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif&family=Poppins:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'bootstrap-icon-fonts', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), AWECO_THEME_VERSION );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.js', array(), null, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aweco_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
*OPTIONAL
*function example_theme_support() {
*remove_theme_support( 'widgets-block-editor' );
*}
*add_action( 'after_setup_theme', 'example_theme_support' );
*/
