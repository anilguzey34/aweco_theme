<?php 

/**
 * Aweco Customizer functionality
 */

function aweco_customize_register( $wp_customize ) {

  $wp_customize->add_section( 'Aweco_Theme_Customization', array(
    'title'      => esc_html__( 'Theme Customization', 'aweco' ),
    'priority'   => 2,
  ) );

 // Primary link color change <a> element not belonging to any class
  $wp_customize->add_setting( 'Primary_Color', array(
    'default'   => '#00bf66',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  
  $wp_customize->add_setting( 'Primary_Color_Hover', array(
    'default'   => '#209b68',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Primary_Color', array(
    'description' => esc_html__( 'Standard link color change <a> element not belonging to any class', 'aweco' ),
    'label'   => esc_html__( 'Primary Link Color', 'aweco' ),
    'section'  => 'Aweco_Theme_Customization',
  ) ) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Primary_Color_Hover', array(
    'label'   => esc_html__( 'Primary Link Color Hover', 'aweco' ),
    'section'  => 'Aweco_Theme_Customization',
  ) ) );

  $wp_customize->add_setting( 'Aside_Background_Color', array(
    'default'   => '#f8f9fa',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Aside_Background_Color', array(
    'label'   => esc_html__( 'Sidebar Footer Background Color', 'aweco' ),
    'section'  => 'Aweco_Theme_Customization',
  ) ) );
}

add_action('customize_register', 'aweco_customize_register');

function aweco_customize_css()
{
    ?>
         <style type="text/css">
             a, .cat-links{ 
               color: <?php echo esc_url(get_theme_mod('Primary_Color', '#00bf66')); ?>;  
               transition: all 220ms;  
              }
             a:hover, a.page-numbers:hover, .nav-menu li a:hover, .site-header .search-button > .bi-search:hover{ color: <?php echo esc_url(get_theme_mod('Primary_Color_Hover', '#209b68')); ?>; }
            
             .pagination-row nav .current { 
               background-color: <?php echo esc_url(get_theme_mod('Primary_Color', '#00bf66')); ?>;  
              border-color : <?php echo esc_url(get_theme_mod('Primary_Color', '#00bf66')); ?>; 
              color:#FFF;
              }

             aside { 
               background-color: <?php echo esc_url(get_theme_mod('Aside_Background_Color', '#f8f9fa')); ?>;  
              
              }
         </style>
    <?php
}
add_action( 'wp_head', 'aweco_customize_css');

