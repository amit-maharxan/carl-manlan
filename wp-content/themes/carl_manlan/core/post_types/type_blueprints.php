<?php

class carl_medias_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'carl_medias_init' ), 0 ); // Register CPT early
		add_action( 'init', array( $this, 'add_category_to_medias' ) ); // Register taxonomy after
	}

	/**
	 * Register the custom post type
	 */
	public function carl_medias_init() {
	    $labels = array(
	        'name'               => _x( 'News & Stories', 'Post type general name', 'carl_medias' ),
	        'singular_name'      => _x( 'News & Stories', 'Post type singular name', 'carl_medias' ),
	        'menu_name'          => _x( 'News & Stories', 'Admin Menu text', 'carl_medias' ),
	        'name_admin_bar'     => _x( 'News & Stories', 'Add New on Toolbar', 'carl_medias' ),
	        'add_new'            => __( 'Add New', 'carl_medias' ),
	        'add_new_item'       => __( 'Add News & Stories', 'carl_medias' ),
	        'edit_item'          => __( 'Edit News & Stories', 'carl_medias' ),
	        'new_item'           => __( 'New News & Stories', 'carl_medias' ),
	        'view_item'          => __( 'View News & Stories', 'carl_medias' ),
	        'all_items'          => __( 'All News & Stories', 'carl_medias' ),
	        'search_items'       => __( 'Search News & Stories', 'carl_medias' ),
	        'not_found'          => __( 'No news-stories found.', 'carl_medias' ),
	        'not_found_in_trash' => __( 'No news-stories found in Trash.', 'carl_medias' ),
	    );

	    $args = array(
	        'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => 'news-stories' ),
	        'capability_type'    => 'post',
	        'has_archive'        => true,
	        'hierarchical'       => false,
	        'menu_position'      => null,
	        'supports'           => array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'          => 'dashicons-marker',
	    );

	    register_post_type( 'news-stories', $args );
	}

	/**
	 * Add category taxonomy to custom post type
	 */
	public function add_category_to_medias() {
		$labels = array(
			'name'              => _x( 'News & Stories Categories', 'taxonomy general name', 'carl_medias' ),
			'singular_name'     => _x( 'News & Stories Category', 'taxonomy singular name', 'carl_medias' ),
			'search_items'      => __( 'Search News & Stories Categories', 'carl_medias' ),
			'all_items'         => __( 'All News & Stories Categories', 'carl_medias' ),
			'parent_item'       => __( 'Parent Category', 'carl_medias' ),
			'parent_item_colon' => __( 'Parent Category:', 'carl_medias' ),
			'edit_item'         => __( 'Edit Category', 'carl_medias' ),
			'update_item'       => __( 'Update Category', 'carl_medias' ),
			'add_new_item'      => __( 'Add New Category', 'carl_medias' ),
			'new_item_name'     => __( 'New Category Name', 'carl_medias' ),
			'menu_name'         => __( 'News & Stories Categories', 'carl_medias' ),
		);
	
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'news-stories-category' ),
		);
	
		register_taxonomy( 'news-stories-category', array( 'news-stories' ), $args );
	}
	
}
new carl_medias_post_type();
