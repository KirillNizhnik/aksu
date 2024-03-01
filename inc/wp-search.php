<?php


function my_remove_searchwp_live_search_theme_css() {
	wp_dequeue_style( 'searchwp-live-search' );
}

add_action( 'wp_enqueue_scripts', 'my_remove_searchwp_live_search_theme_css', 20 );

