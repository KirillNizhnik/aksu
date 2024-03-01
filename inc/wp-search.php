<?php



function my_remove_searchwp_live_search_theme_css() {
	wp_dequeue_style( 'searchwp-live-search' );
}

add_action( 'wp_enqueue_scripts', 'my_remove_searchwp_live_search_theme_css', 20 );
function my_searchwp_live_search_configs( $configs ) {

	$configs['my_config'] = array(
		'engine' => 'supplemental',                 // search engine to use (if SearchWP is available)
		'input' => array(
			'delay'     => 300,                 // wait 500ms before triggering a search
			'min_chars' => 2,                   // wait for at least 3 characters before triggering a search
			'element'   => '<div class="search-trigger">' .
			               '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">' .
			               '<circle cx="11" cy="11" r="8"></circle>' .
			               '<line x1="21" y1="21" x2="16.65" y2="16.65"></line>' .
			               '</svg>' .
			               '</div>',
		),
		'results' => array(
			'position'  => 'top',               // where to position the results (bottom|top)
			'width'     => 'css',               // whether the width should automatically match the input (auto|css)
			'offset'    => array(
				'x' => 0,                   // x offset (in pixels)
				'y' => 0                    // y offset (in pixels)
			),
		),
		'spinner' => array( // Powered by http://spin.js.org/
			'lines'     => 13,                                 // The number of lines to draw
			'length'    => 38,                                 // The length of each line
			'width'     => 17,                                 // The line thickness
			'radius'    => 45,                                 // The radius of the inner circle
			'scale'     => 1,                                  // Scales overall size of the spinner
			'corners'   => 1,                                  // Corner roundness (0..1)
			'color'     => '#ffffff',                          // CSS color or array of colors
			'fadeColor' => 'transparent',                      // CSS color or array of colors
			'speed'     => 1,                                  // Rounds per second
			'rotate'    => 0,                                  // The rotation offset
			'animation' => 'searchwp-spinner-line-fade-quick', // The CSS animation name for the lines
			'direction' => 1,                                  // 1: clockwise, -1: counterclockwise
			'zIndex'    => 2e9,                                // The z-index (defaults to 2000000000)
			'className' => 'spinner',                          // The CSS class to assign to the spinner
			'top'       => '50%',                              // Top position relative to parent
			'left'      => '50%',                              // Left position relative to parent
			'shadow'    => '0 0 1px transparent',              // Box-shadow for the lines
			'position'  => 'absolute'                          // Element positioning
		),
	);
	return $configs;

}

add_filter( 'searchwp_live_search_configs', 'my_searchwp_live_search_configs' );


function register_custom_sidebar() {
    register_sidebar(array(
        'name'          => 'Search',
        'id'            => 'search_sidebar',
        'description'   => 'Search',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'register_custom_sidebar');
