<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CARL
 */

if( !function_exists( 'carl_add_meta' ) ) :
   /**
	* Add meta tags.
	*/
	function carl_add_meta() { ?>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php }
endif;

if ( !function_exists( 'carl_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function carl_add_links() { ?>
        <link rel="preload" href="<?php echo DK_ASSEST_URI . '/fonts/Oswald-VariableFont_wght.ttf';?>" as="font" type="font/ttf" crossorigin />
        <link rel="preload" href="<?php echo DK_ASSEST_URI . '/fonts/OvertheRainbow-Regular.ttf';?>" as="font" type="font/ttf" crossorigin />
	<?php }
endif;

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'CARL MANLAN';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );