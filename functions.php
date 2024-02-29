<?php
/**
 * aksu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aksu
 */
function dd($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function aksu_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on aksu, use a find and replace
        * to change 'aksu' to the name of your theme in all the template files.
        */
    load_theme_textdomain('aksu', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');


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
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'aksu_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aksu_content_width()
{
    $GLOBALS['content_width'] = apply_filters('aksu_content_width', 640);
}

add_action('after_setup_theme', 'aksu_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aksu_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'aksu'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'aksu'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

//add_action('widgets_init', 'aksu_widgets_init');
//if (function_exists('acf_add_options_page')) {
//
//    acf_add_options_page();
//
//}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Сторінка лабораторій',
        'menu_title' => 'Налаштування сторінки лабораторії',
        'menu_slug' => 'settings-1',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_page(array(
        'page_title' => 'Сторінка випускників',
        'menu_title' => 'Налаштування сторінки випускники',
        'menu_slug' => 'settings-3',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_page(array(
        'page_title' => 'Опції',
        'menu_title' => 'Налаштування опцій',
        'menu_slug' => 'settings-2',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

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

    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/assets/scripts/header-menu.js', array('jquery'), null, true);

    wp_enqueue_script('postgraduate-course', get_template_directory_uri() . '/assets/scripts/grad-defense-slider.js', array('jquery'), null, true);


    if (is_front_page()) {
        wp_enqueue_script('aksu-swiper-home-news', get_template_directory_uri() . '/assets/scripts/main-news-slider.js', array('jquery'), null, true);
    }

    if (is_singular('news')) {
        wp_enqueue_script('second-news-slider', get_template_directory_uri() . '/assets/scripts/news-post-slider.js', array('jquery'), null, true);
        wp_enqueue_script('first-news-slider', get_template_directory_uri() . '/assets/scripts/news-post-slider-img.js', array('jquery'), null, true);

    }
    if (is_singular('conferences')) {
        wp_enqueue_script('conferences-img-slider', get_template_directory_uri() . '/assets/scripts/conferences-img-slider.js', array('jquery'), null, true);
    }


    if (is_singular('laboratory')) {
        wp_enqueue_script('img-slider-labs', get_template_directory_uri() . '/assets/scripts/labs-post-slider-img.js', array('jquery'), null, true);
    }
}
function enqueue_custom_script_for_archive_page() {
    if (is_archive('teachers')) {
        wp_enqueue_script('img-slide', get_template_directory_uri() . '/assets/scripts/archive-teacher.js', array('jquery'), null, true);
    }
}

function enqueue_custom_script_for_archive_page_graduates() {
    if (is_archive('graduates')) {
        wp_enqueue_script('pop-up', get_template_directory_uri() . '/assets/scripts/our-graduates-single.js', array('jquery'), null, true);
        $icon_close_url = get_template_directory_uri() . '/assets/images/icons/icons.svg#icon-close';
        wp_localize_script('pop-up', 'ajax_object', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'iconCloseURL' => $icon_close_url
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script_for_archive_page_graduates');

add_action('wp_enqueue_scripts', 'aksu_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

require_once(get_template_directory() . '/news-post-type.php');

require_once(get_template_directory() . '/conferences-post-type.php');

require_once(get_template_directory() . '/teachers-post-type.php');

require_once(get_template_directory() . '/laboratory-post-type.php');


require_once(get_template_directory() . '/graduates-post-type.php');

require get_template_directory() . '/inc/project-translate.php';

require_once(get_template_directory() . '/ajax-pop-up.php');



require (get_template_directory() . '/inc/project-translate.php');

require (get_template_directory() . '/inc/menu.php');

