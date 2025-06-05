<?php
$templatepath = get_template_directory();
if ( defined( 'DOING_AJAX' ) && DOING_AJAX && is_admin() ) {
	include( $templatepath . '/function/ajax.php' );
} elseif ( is_admin() ) {
	include( $templatepath . '/function/admin.php' );
} elseif ( ! defined( 'XMLRPC_REQUEST' ) && ! defined( 'DOING_CRON' ) ) {
	include( $templatepath . '/function/front.php' );
}
include( $templatepath . '/function/all.php' );


remove_role('subscriber');
remove_role('contributor');
remove_role('editor');
remove_role('author');

// Ajout du rôle client
function createRoleClient() {
    global $wp_roles;
    if (!isset( $wp_roles )) {
        $wp_roles = new WP_Roles();
    }
    $adm = $wp_roles->get_role('administrator');
    $wp_roles->add_role('gerant', 'Gérant', $adm->capabilities);
}
add_action('init', 'createRoleClient');

/*//////////////////////////// Baltazare //////////////////////////////*/

// Page option
if( function_exists('acf_add_options_sub_page') ){
    acf_add_options_sub_page( 'Accueil' );
}

// Interdire l'accès au non administrateurs
$wpba_required_capability = 'edit_others_posts';
$wpba_redirect_to = '';
function no_more_dashboard() {
    global $wpba_required_capability, $wpba_redirect_to;
    if (
        stripos($_SERVER['REQUEST_URI'],'/wp-admin/') !== false
        &&
        stripos($_SERVER['REQUEST_URI'],'async-upload.php') == false
        &&
        stripos($_SERVER['REQUEST_URI'],'admin-ajax.php') == false
    ) {
        if (!current_user_can($wpba_required_capability)) {
            if ($wpba_redirect_to == '') { $wpba_redirect_to = get_option('siteurl')."/admin/"; }
            wp_redirect($wpba_redirect_to,302);
        }
    }
}
add_action('admin_init', 'no_more_dashboard');

// Image à la une
if(function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
}

// Hide AdminBar
add_filter('show_admin_bar', '__return_false');

function get_id_enseigne(){
	$current_user      = wp_get_current_user();
	$current_user_mail = $current_user->user_email;
	$gerant_enseigne   = new WP_Query( array(
		'post_type'      => 'restaurant',
		'posts_per_page' => 1,
		'meta_query'     => array(
			array(
				'key'     => 'mail_du_gerant_restaurant',
				'value'   => $current_user_mail,
				'compare' => 'LIKE',
			)
		)
	) );
	$id_enseigne       = wp_list_pluck( $gerant_enseigne->posts, 'ID' );
	$id_enseigne       = $id_enseigne[0];
	if ( ! $id_enseigne ) {
		$id_enseigne = 91;
	}

	return $id_enseigne;
}

