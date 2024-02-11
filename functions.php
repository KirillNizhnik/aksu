<?php
/**
 * aksu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aksu
 */
function dd($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */



function aksu_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on aksu, use a find and replace
		* to change 'aksu' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'aksu', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'head_menu' => 'Header menu',
        )
    );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aksu_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'aksu_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aksu_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aksu_content_width', 640 );
}
add_action( 'after_setup_theme', 'aksu_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aksu_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aksu' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aksu' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'aksu_widgets_init' );
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}
/**
 * Enqueue scripts and styles.
 */
function aksu_scripts()
{
    wp_enqueue_style('aksu-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('aksu-style', 'rtl', 'replace');

    wp_enqueue_script('aksu-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('aksu-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/style/main.css');
    wp_style_add_data('aksu-style', 'rtl', 'replace');
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
//    wp_enqueue_script('swiper-1', 'https://unpkg.com/swiper@6.5.4/swiper-bundle.min.js', array(), null, true);


    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/assets/scripts/header-menu.js', array('jquery'), null, true);


    if(is_front_page()){
        wp_enqueue_script('aksu-swiper-home-news', get_template_directory_uri() . '/assets/scripts/main-news-slider.js', array('jquery'), null, true);

    }

    if (is_singular('news')) {
        wp_enqueue_script('second-news-slider', get_template_directory_uri() . '/assets/scripts/news-post-slider.js', array('jquery'), null, true);
        wp_enqueue_script('first-news-slider', get_template_directory_uri() . '/assets/scripts/news-post-slider-img.js', array('jquery'), null, true);

    }
    if (is_singular('conferences')) {
        wp_enqueue_script('img-slider', get_template_directory_uri() . '/assets/scripts/conferences-img-slider.js', array('jquery'), null, true);
    }

    wp_enqueue_script('slider-teacher', get_template_directory_uri() . '/assets/scripts/archive-teacher.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'aksu_scripts' );


add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// news-post-type.php
require_once(get_template_directory() . '/news-post-type.php');



require_once(get_template_directory() . '/conferences-post-type.php');

require_once(get_template_directory() . '/teachers-post-type.php');

//class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
//
//    public function start_lvl(&$output, $depth = 0, $args = null) {
//        $output .= '<ul class="header__nav">';
//    }
//
//    // Override start_el to add custom classes to menu items
//    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
////        dd($item);
//        $classes = empty($item->classes) ? array() : (array) $item->classes;
//        $classes[] = 'custom-menu-item';
//
//        $output .= '<li id="menu-item-' . $item->ID . '" class="menu-item-type-post_type' . implode(' ', $classes) . '">';
//        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
//    }
//}
//
//
//
//





//class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
//
//    public function start_lvl(&$output, $depth = 0, $args = null) {
//        $output .= '<ul class="header__nav">';
//    }
//
//    // Override start_el to add custom classes to menu items
//    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
////        dd($item);
//        $classes = empty($item->classes) ? array() : (array) $item->classes;
//        $classes[] = 'custom-menu-item';
//
//        $output .= '<li id="menu-item-' . $item->ID . '" class="menu-item-type-post_type' . implode(' ', $classes) . '">';
//        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
//    }
//}



class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    private $counter = 0;

    public function start_lvl(&$output, $depth = 0, $args = null) {
        // Reset the counter for each new menu
        $this->counter = 0;
        $output .= '<ul class="header__nav">';
    }


    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $this->counter++;


        $items_per_side = 3;


        if ($this->counter === $items_per_side + 1) {
            $output .= '<li class="menu-item-type-logo">';
            $output .= '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link" rel="home">';
            $output .= '<img src="' . esc_url(wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full')) . '" class="custom-logo" alt="' . get_bloginfo('name') . '">';
            $output .= '</a>';
            $output .= '</li>';
        }

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'custom-menu-item';

        $output .= '<li id="menu-item-' . $item->ID . '" class="menu-item-type-post_type ' . implode(' ', $classes) . '">';
        $output .= '<a href="' . $item->url . '">' . $item->title . '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="22" viewBox="0 0 19 22" fill="none">
<path d="M5 9.5L10.0008 14.08L15 9.5" stroke="#010E11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg> </a>';
    }
}

