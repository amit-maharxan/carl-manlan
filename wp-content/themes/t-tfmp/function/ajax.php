<?php
add_action( 'wp_ajax_dlc_order_menu_item', 'dlc_order_menu_item' );
add_action( 'wp_ajax_nopriv_dlc_order_menu_item', 'dlc_order_menu_item' );

function dlc_order_menu_item() {
	for ( $i = 0; $i < count( $_POST['order'] ); $i ++ ) {
		get_the_title( $_POST['order'][ $i ] );
		update_post_meta(
			(int) $_POST['order'][ $i ],
			'dlc_order_menu_item-' . $_POST['id_cat'] . '-' . $_POST['id_enseigne'],
			$i );
	}

	die( json_encode( [
		'message' => 'Positions sauvegardées'
	] ) );
}



add_action( 'wp_ajax_dlc_order_menu_categories', 'dlc_order_menu_categories' );
add_action( 'wp_ajax_nopriv_dlc_order_menu_categories', 'dlc_order_menu_categories' );

function dlc_order_menu_categories() {
	for ( $i = 0; $i < count( $_POST['order'] ); $i ++ ) {
		get_the_title( $_POST['order'][ $i ] );
		update_term_meta(
			(int) $_POST['order'][ $i ],
			'dlc_order_menu_cat-'. $_POST['id_enseigne'],
			$i );
	}
	die( json_encode( [
		'message' => 'Positions sauvegardées'
	] ) );
}
