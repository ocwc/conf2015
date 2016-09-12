<?php

function cf_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'cf' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'cf_wp_title', 10, 2 );

function cf_presentations( $posts ) {
	$custom_query = new WP_Query(array('post__in' => $posts, 'post_type' => 'any', 'orderby'=>'post__in'));

	ob_start();
	include(locate_template('partials/_presentation-schedule.php'));
	echo ob_get_clean();

	wp_reset_postdata();
}

// function ping_api_server( $entry, $form ) {
//     $url = 'http://members.oeconsortium.org/conferences/invoice/ping/';
//
//     $result = wp_remote_get( $url, array( 'timeout' => 120, 'httpversion' => '1.1' ) );
//     $response = wp_remote_retrieve_body( $result );
// }
// add_action( 'gform_after_submission', 'ping_api_server', 10, 2 );
