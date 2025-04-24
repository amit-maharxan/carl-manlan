<?php
/**
 * CARL enqueue functions and definitions
 *
 * @package CARL
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue scripts and styles.
 */
function carl_scripts() {
	wp_enqueue_style('carl-menu-css', DK_CSS . '/menu.css');
	wp_enqueue_style('carl-lenis-css', DK_CSS . '/lenis.min.css');
	wp_enqueue_style('carl-main-css', DK_CSS . '/main.css');
	wp_enqueue_style('carl-output-css', DK_CSS . '/output.css');
	wp_enqueue_style('carl-splide-css', DK_CSS . '/splide.min.css');
	wp_enqueue_style('carl-custom-css', DK_CSS . '/custom.css');

	// Enqueue script starts
	// Remove default jQuery.
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.js', array(), 'v3.6.1', false );
	wp_enqueue_script( 'carl-feather-js', DK_JS . '/feather.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'carl-seedrandom-js', DK_JS . '/seedrandom.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script_module( 'carl-main-js', DK_JS . '/main.js', array( 'jquery' ), time(), true );
	wp_enqueue_script_module( 'carl-menu-js', DK_JS . '/menu.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'carl-splide-js', DK_JS . '/splide.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'carl-gsap-js', DK_JS . '/gsap.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'carl-gsapScrollTrigger-js', DK_JS . '/gsapScrollTrigger.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script_module( 'carl-TimelineText-js', DK_JS . '/TimelineText.js', array( 'jquery' ), time(), true );
	wp_enqueue_script_module( 'carl-utilFunctions-js', DK_JS . '/utilFunctions.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'carl-lenis-js', DK_JS . '/lenis.min.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'carl-custom-js', DK_JS . '/custom.js', array( 'jquery' ), time(), true );
}
add_action( 'wp_enqueue_scripts', 'carl_scripts' );