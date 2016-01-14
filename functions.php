<?php

function cf_setup() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'op' ),
	) );

	add_image_size( 'slideshow-image', 1450, 660, true);
	add_image_size( 'home-small', 362, 240, true);
	add_image_size( 'home-featured', 179, 103, true);

	register_sidebar( array(
	   'name' => __( 'Footer'),
	   'id' => 'footer',
	   'description' => __( 'Footer area', 'cf' ),
	   'before_widget' => '<div class="col-xs-12 col-sm-2"><aside id="%1$s" class="widget %2$s">',
	   'after_widget' => "</aside></div>",
	   'before_title' => '<h3 class="footer-title">',
	   'after_title' => '</h3>',
	) );

	register_sidebar( array(
	   'name' => __( 'Footer Wide'),
	   'id' => 'footer-wide',
	   'description' => __( 'Footer area', 'cf' ),
	   'before_widget' => '<div class="col-xs-12 col-sm-4"><aside id="%1$s" class="widget %2$s">',
	   'after_widget' => "</aside></div>",
	   'before_title' => '<h3 class="footer-title">',
	   'after_title' => '</h3>',
	) );

}
add_action( 'after_setup_theme', 'cf_setup' );

function cf_scripts() {
	wp_dequeue_style( 'style', get_stylesheet_uri() );

	if ( is_admin() ) {
		wp_enqueue_style( 'cf-admin', get_template_directory_uri() . '/css/admin.css' );
	} else {

	    if ( defined('OEC_DEBUG') && OEC_DEBUG === true ) {
	      wp_enqueue_style( 'cf-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	      wp_enqueue_style( 'cf-style', get_template_directory_uri() . '/css/style.css' );

	      wp_enqueue_script( 'cf-components', get_template_directory_uri() . '/js/components.js', array('jquery'), '', true );
	      wp_enqueue_script( 'cf-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
	    } else {
	      wp_enqueue_style( 'cf-style', get_template_directory_uri() . '/css/style.min.css' );
	      wp_enqueue_script( 'cf-script', get_template_directory_uri() . '/js/script.min.js', array( 'jquery' ), '', true );
	    }

	}
}
add_action( 'wp_enqueue_scripts', 'cf_scripts' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/post_types.php';

/**
 * Custom Menu Walker for Bootstrap 3
 */
require get_template_directory() . '/lib/wp_bootstrap_navwalker.php';

/**
 *  Excel Importer
 */
if ( defined('WP_CLI') && WP_CLI ) {
    require get_template_directory() . '/inc/cli-importer.php';
}
