<?php
/**
 * CARL post-type register functions and definitions
 *
 * @package CARL
 */

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


/* custom options for additional data */
if( function_exists('acf_add_options_page') ) 
{ 
    acf_add_options_page('Other Settings');
}

/* custom navigation menus for header and footer */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );