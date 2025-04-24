<?php

class carl_trainings_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'carl_trainings_init' ) );
	}

	/**
	 * Register a custom post type called "trainings".
	 * @return void
	 */
	function carl_trainings_init() {
	    $labels = array(
	        'name'                  => _x( 'What We Do', 'Post type general name', 'carl_trainings' ),
	        'singular_name'         => _x( 'What We Do', 'Post type singular name', 'carl_trainings' ),
	        'menu_name'             => _x( 'What We Do', 'Admin Menu text', 'carl_trainings' ),
	        'name_admin_bar'        => _x( 'What We Do', 'Add New on Toolbar', 'carl_trainings' ),
	        'add_new'               => __( 'Add New', 'carl_trainings' ),
	        'add_new_item'          => __( 'Add New What We Do', 'carl_trainings' ),
	        'new_item'              => __( 'New What We Do', 'carl_trainings' ),
	        'edit_item'             => __( 'Edit What We Do', 'carl_trainings' ),
	        'view_item'             => __( 'View What We Do', 'carl_trainings' ),
	        'all_items'             => __( 'All What We Do', 'carl_trainings' ),
	        'search_items'          => __( 'Search What We Do', 'carl_trainings' ),
	        'parent_item_colon'     => __( 'Parent What We Do:', 'carl_trainings' ),
	        'not_found'             => __( 'No What We Do found.', 'carl_trainings' ),
	        'not_found_in_trash'    => __( 'No What We Do found in Trash.', 'carl_trainings' ),
	        'featured_image'        => _x( 'What We Do Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'carl_trainings' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'carl_trainings' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'carl_trainings' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'carl_trainings' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'what-we-do' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'      		=> 'dashicons-marker',
	    );

	    register_post_type( 'what-we-do', $args );
	}

}
new carl_trainings_post_type();