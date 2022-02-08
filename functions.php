<?php

/**
 * Buson functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Buson
 */

if (!defined('BSN_VERSION')) {
  // Replace the version number of the theme on each release.
  define('BSN_VERSION', '1.0.0');
}

if (!function_exists('buson_setup')) {
  function buson_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on buson, use a find and replace
     * to change 'buson' to the name of your theme in all the template files.
     */
    load_theme_textdomain('buson', get_template_directory() . '/languages');

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

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
      array(
        'menu-1' => esc_html__('Primary', 'buson'),
      )
    );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    $logo_width = 180;
    $logo_height = 60;
    add_theme_support(
      'custom-logo',
      array(
        'height'      => $logo_height,
        'width'       => $logo_width,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
}
add_action('after_setup_theme', 'buson_setup');

/**
 * Enqueue scripts and styles.
 */
function buson_scripts() {
  //css
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), BSN_VERSION);
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), BSN_VERSION);
  wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), BSN_VERSION);
  wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), BSN_VERSION);
  wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), BSN_VERSION);
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), BSN_VERSION);
  wp_enqueue_style('root-style-file', get_stylesheet_uri());
  //js
  wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), BSN_VERSION, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), BSN_VERSION, true);
  wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), BSN_VERSION, true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), BSN_VERSION, true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), BSN_VERSION, true);
  wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), BSN_VERSION, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), BSN_VERSION, true);
}
add_action('wp_enqueue_scripts', 'buson_scripts');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function buson_sidebar_init() {
  register_sidebar(array(
    'name'          => __('Blog Sidebar', 'buson'),
    'id'            => 'blog-sidebar',
    'description'   => __('Widgets in this area will be shown on all posts pages.', 'buson'),
    'before_widget' => '<aside id="%1$s" class="single_sidebar_widget search_widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4 class="widget_title">',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'buson_sidebar_init');