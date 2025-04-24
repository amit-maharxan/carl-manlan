<?php

class carl_news_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'carl_news_init' ) );
	}

	/**
	 * Register a custom post type called "news".
	 * @return void
	 */
	function carl_news_init() {
	    $labels = array(
	        'name'                  => _x( 'News', 'Post type general name', 'carl_news' ),
	        'singular_name'         => _x( 'News', 'Post type singular name', 'carl_news' ),
	        'menu_name'             => _x( 'News', 'Admin Menu text', 'carl_news' ),
	        'name_admin_bar'        => _x( 'News', 'Add New on Toolbar', 'carl_news' ),
	        'add_new'               => __( 'Add New', 'carl_news' ),
	        'add_new_item'          => __( 'Add New News', 'carl_news' ),
	        'new_item'              => __( 'New News', 'carl_news' ),
	        'edit_item'             => __( 'Edit News', 'carl_news' ),
	        'view_item'             => __( 'View News', 'carl_news' ),
	        'all_items'             => __( 'All News', 'carl_news' ),
	        'search_items'          => __( 'Search News', 'carl_news' ),
	        'parent_item_colon'     => __( 'Parent News:', 'carl_news' ),
	        'not_found'             => __( 'No News found.', 'carl_news' ),
	        'not_found_in_trash'    => __( 'No News found in Trash.', 'carl_news' ),
	        'featured_image'        => _x( 'News Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'carl_news' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'carl_news' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'carl_news' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'carl_news' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'news' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'      		=> 'dashicons-marker',
	    );

	    register_post_type( 'news', $args );
	}

}
new carl_news_post_type();