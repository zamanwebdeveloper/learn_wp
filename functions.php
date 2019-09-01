<?php
/*
* My Theme functions
*/
// Theme title tag

add_theme_support('title-tag');

// All CSS and jQuery Files

function zaman_css_calling(){
	wp_enqueue_style('zaman-style', get_stylesheet_uri());
	wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '3.3.7', 'all');
	wp_enqueue_style('custom');
	wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'zaman_css_calling');
