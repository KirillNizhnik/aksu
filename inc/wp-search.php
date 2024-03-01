<?php
function my_searchwp_live_search_configs( $configs ) {
    // override some defaults
    $configs['default'] = array(
        'engine' => 'default',                      // search engine to use (if SearchWP is available)
        'input' => array(
            'delay'     => 400,                 // wait 500ms before triggering a search
            'min_chars' => 5,                   // wait for at least 3 characters before triggering a search
        ),
        'parent_el' => 'body',                      // selector of the parent element for the results container
        'results' => array(
            'position'  => 'bottom',            // where to position the results (bottom|top)
            'width'     => 'auto',              // whether the width should automatically match the input (auto|css)
            'offset'    => array(
                'x' => 0,                   // x offset (in pixels)
                'y' => 5                    // y offset (in pixels)
            ),
        ),
        'spinner' => array( // Powered by http://spin.js.org/
            'lines'     => 13,                                 // The number of lines to draw
            'length'    => 38,                                 // The length of each line
            'width'     => 16,                                 // The line thickness
            'radius'    => 10,                                 // The radius of the inner circle
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

    // add an additional config called 'my_config'
    $configs['my_config'] = array(
        'engine' => 'supplemental',                 // search engine to use (if SearchWP is available)
        'input' => array(
            'delay'     => 300,                 // wait 500ms before triggering a search
            'min_chars' => 2,                   // wait for at least 3 characters before triggering a search
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
            'width'     => 16,                                 // The line thickness
            'radius'    => 10,                                 // The radius of the inner circle
            'scale'     => 1,                                  // Scales overall size of the spinner
            'corners'   => 1,                                  // Corner roundness (0..1)
            'color'     => '#000000',                          // CSS color or array of colors
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

function register_custom_sidebar() {
    register_sidebar(array(
        'name'          => 'Search', // Название вашего сайдбара
        'id'            => 'search_sidebar', // Уникальный ID
        'description'   => 'Search',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'register_custom_sidebar');
