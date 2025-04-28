<?php
/**
 * CARL Template Hooks
 *
 * Action/filter hooks used for CARL functions/templates
 *
 * @package 	CARL
 *
 * @since     	CARL 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions
  ==================================================================================================*/

if (!function_exists('carl_output_header')){
	function carl_output_header(){
		get_header();
	}
}

if (!function_exists('carl_output_header_content')){
	function carl_output_header_content(){
		get_template_part('template-parts/header/content', 'header');
	}
}

if (!function_exists('carl_output_footer')){
	function carl_output_footer(){
		get_footer();
	}
}

if (!function_exists('carl_output_footer_content')){
	function carl_output_footer_content(){
		get_template_part('template-parts/footer/content', 'footer');
	}
}

// Carl Manlan Homepage Content Hooks
if (!function_exists('carl_homepage_banner')){
	function carl_homepage_banner(){
		get_template_part('template-parts/homepage/banner');
	}
}

if (!function_exists('carl_homepage_timeline')){
	function carl_homepage_timeline(){
		get_template_part('template-parts/homepage/timeline');
	}
}

if (!function_exists('carl_homepage_news')){
	function carl_homepage_news(){
		get_template_part('template-parts/homepage/news');
	}
}

if (!function_exists('carl_homepage_masonary')){
	function carl_homepage_masonary(){
		get_template_part('template-parts/homepage/masonary');
	}
}

// Carl Manlan About Content Hooks
if (!function_exists('carl_about_banner')){
	function carl_about_banner(){
		get_template_part('template-parts/about/banner');
	}
}

if (!function_exists('carl_about_about')){
	function carl_about_about(){
		get_template_part('template-parts/about/about');
	}
}

if (!function_exists('carl_about_timeline')){
	function carl_about_timeline(){
		get_template_part('template-parts/about/timeline');
	}
}

// Carl Manlan Media Content Hooks
if (!function_exists('carl_media_contents')){
	function carl_media_contents(){
		get_template_part('template-parts/media/media');
	}
}

/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Metas and Links
 * @see  carl_add_meta()
 * @see  carl_add_links()
 */
add_action( 'carl_meta', 'carl_add_meta' );
add_action( 'carl_links', 'carl_add_links' );

/**
* Header / Footer Content
* @see carl_output_header_content()
* @see carl_output_footer_content()
*/
 add_action('carl_header_content', 'carl_output_header_content', 10);
 add_action('carl_footer_content', 'carl_output_footer_content', 10);

/**
 * Header / Footer  
 */
add_action( 'carl_header', 'carl_output_header');
add_action( 'carl_footer', 'carl_output_footer');

/**
 * Homepage Hook
 */
add_action( 'carl_homepage_content', 'carl_homepage_banner', 10 );
add_action( 'carl_homepage_content', 'carl_homepage_timeline', 20 );
add_action( 'carl_homepage_content', 'carl_homepage_news', 30 );
add_action( 'carl_homepage_content', 'carl_homepage_masonary', 40 );

/**
 * About Hook
 */
add_action( 'carl_about_content', 'carl_about_banner', 10 );
add_action( 'carl_about_content', 'carl_about_about', 20 );
add_action( 'carl_about_content', 'carl_about_timeline', 30 );

/**
 * Media Hook
 */
add_action( 'carl_media_content', 'carl_media_contents', 10 );