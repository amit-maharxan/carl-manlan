<?php

class carl_podcasts_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'carl_podcasts_init' ), 0 );
	}

	/**
	 * Register the custom post type
	 */
	public function carl_podcasts_init() {
	    $labels = array(
	        'name'               => _x( 'Podcasts', 'Post type general name', 'carl_podcasts' ),
	        'singular_name'      => _x( 'Podcasts', 'Post type singular name', 'carl_podcasts' ),
	        'menu_name'          => _x( 'Podcasts', 'Admin Menu text', 'carl_podcasts' ),
	        'name_admin_bar'     => _x( 'Podcasts', 'Add New on Toolbar', 'carl_podcasts' ),
	        'add_new'            => __( 'Add New', 'carl_podcasts' ),
	        'add_new_item'       => __( 'Add Podcasts', 'carl_podcasts' ),
	        'edit_item'          => __( 'Edit Podcasts', 'carl_podcasts' ),
	        'new_item'           => __( 'New Podcasts', 'carl_podcasts' ),
	        'view_item'          => __( 'View Podcasts', 'carl_podcasts' ),
	        'all_items'          => __( 'All Podcasts', 'carl_podcasts' ),
	        'search_items'       => __( 'Search Podcasts', 'carl_podcasts' ),
	        'not_found'          => __( 'No podcasts found.', 'carl_podcasts' ),
	        'not_found_in_trash' => __( 'No podcasts found in Trash.', 'carl_podcasts' ),
	    );

	    $args = array(
	        'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => 'podcasts' ),
	        'capability_type'    => 'post',
	        'has_archive'        => true,
	        'hierarchical'       => false,
	        'menu_position'      => null,
	        'supports'           => array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'          => 'dashicons-marker',
	    );

	    register_post_type( 'podcasts', $args );
	}
	
}
new carl_podcasts_post_type();
