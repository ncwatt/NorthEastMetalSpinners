<?php

function load_loadstylesheets()
{
	wp_register_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', '', 1, 'all');
	wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_loadstylesheets');

function load_javascript()
{
	wp_register_script('custom', get_template_directory_uri() . '/js/app.js', 'jquery', 1, true);
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add functions to theme
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Add title tag to head of pages
function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

// Register menus
register_nav_menus(
	array (
		'top-menu' => __('Top Menu', 'metalspinners')
	)
);

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the top-menu menu
    if( $args->theme_location == 'top-menu' ) {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

// Add images sizes
add_image_size('post_image', 1200, 628, false);

// WooCommerce Support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );