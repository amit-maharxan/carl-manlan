<?php

class carl_blueprints_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'carl_blueprints_init' ), 0 ); // Register CPT early
		add_action( 'init', array( $this, 'add_category_to_blueprints' ) ); // Register taxonomy after
	}

	/**
	 * Register the custom post type
	 */
	public function carl_blueprints_init() {
	    $labels = array(
	        'name'               => _x( 'Blueprints', 'Post type general name', 'carl_blueprints' ),
	        'singular_name'      => _x( 'Blueprint', 'Post type singular name', 'carl_blueprints' ),
	        'menu_name'          => _x( 'Blueprints', 'Admin Menu text', 'carl_blueprints' ),
	        'name_admin_bar'     => _x( 'Blueprint', 'Add New on Toolbar', 'carl_blueprints' ),
	        'add_new'            => __( 'Add New', 'carl_blueprints' ),
	        'add_new_item'       => __( 'Add New Blueprint', 'carl_blueprints' ),
	        'edit_item'          => __( 'Edit Blueprint', 'carl_blueprints' ),
	        'new_item'           => __( 'New Blueprint', 'carl_blueprints' ),
	        'view_item'          => __( 'View Blueprint', 'carl_blueprints' ),
	        'all_items'          => __( 'All Blueprints', 'carl_blueprints' ),
	        'search_items'       => __( 'Search Blueprints', 'carl_blueprints' ),
	        'not_found'          => __( 'No blueprints found.', 'carl_blueprints' ),
	        'not_found_in_trash' => __( 'No blueprints found in Trash.', 'carl_blueprints' ),
	    );

	    $args = array(
	        'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => 'blueprints' ),
	        'capability_type'    => 'post',
	        'has_archive'        => true,
	        'hierarchical'       => false,
	        'menu_position'      => null,
	        'supports'           => array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'          => 'dashicons-marker',
	    );

	    register_post_type( 'blueprints', $args );
	}

	/**
	 * Add category taxonomy to custom post type
	 */
	public function add_category_to_blueprints() {
	    register_taxonomy_for_object_type( 'category', 'blueprints' );
	}
}
new carl_blueprints_post_type();
