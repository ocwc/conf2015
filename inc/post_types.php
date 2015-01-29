<?php

function cf_posttype_slideshow() {
	$labels = array(
		'name'                => 'Slideshows',
		'singular_name'       => 'Slideshow',
		'menu_name'           => 'Slideshow',
		'parent_item_colon'   => 'Parent Slideshow:',
		'all_items'           => 'All Slideshows',
		'view_item'           => 'View Slideshow',
		'add_new_item'        => 'Add New Slideshow',
		'add_new'             => 'New Slideshow',
		'edit_item'           => 'Edit Slideshow',
		'update_item'         => 'Update Slideshow',
		'search_items'        => 'Search slideshows',
		'not_found'           => 'No slideshows found',
		'not_found_in_trash'  => 'No slideshows found in Trash',
	);
	$args = array(
		'label'               => 'slideshow',
		'description'         => 'Home page slideshow',
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt2',
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'slideshow', $args );
}
add_action( 'init', 'cf_posttype_slideshow', 0 );

function cf_posttype_presentation() {

	$labels = array(
		'name'                => 'Presentations',
		'singular_name'       => 'Presentation',
		'menu_name'           => 'Presentation',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Items',
		'view_item'           => 'View Item',
		'add_new_item'        => 'Add New Item',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Item',
		'update_item'         => 'Update Item',
		'search_items'        => 'Search Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'presentation',
		'description'         => 'Presentation',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'presentation', $args );

}
add_action( 'init', 'cf_posttype_presentation', 0 );
