<?php
/**
 *
 * @package aweco
 */

/**
 * @param array 
 * @return array
 */
function aweco_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'aweco_body_classes' );

function aweco_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'aweco_pingback_header' );





	function mytheme_custom_excerpt_length( $length ) {
		return 15;
	}
	add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
	
	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');


