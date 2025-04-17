<?php
/**
 * LuWal Theme functions and definitions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Theme setup function
function luwal_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'luwal'),
        'footer' => esc_html__('Footer Menu', 'luwal'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for wide and full-width blocks
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'luwal_setup');

// Enqueue scripts and styles
function luwal_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('luwal-style', get_stylesheet_uri(), array(), '1.0.0');

    // Enqueue main script
    wp_enqueue_script('luwal-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'luwal_scripts');

// Register widget area
function luwal_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'luwal'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'luwal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'luwal_widgets_init');