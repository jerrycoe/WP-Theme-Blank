<?php

define('THEME_BASE_URL', get_template_directory_uri());

/**
 * [wp_theme_blank_enqueue_style single call to wp_enqueue_style]
 * @return [void] [queues styles for injection into head]
 */
function wp_theme_blank_enqueue_style() {
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', '4.0.0')
	wp_enqueue_style( 'custom-css', 'style.css'); 
	wp_enqueue_style( 'dependency-specific-css', THEME_BASE_URL . '/resources/css/');
}

/**
 * [wp_theme_blank_enqueue_script single call to wp_enqueue_script]
 * @return [type] [queues scripts for injection into head]
 */
function wp_theme_blank_enqueue_script() {
	wp_enqueue_script( 'app-js', THEME_BASE_URL . '/resources/js/app.js');
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '3.2.1', true);
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', '1.12.9', true);
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '4.0.0', true)
}

/**
 * Execute queued actions [Insert queued styles and scripts into head and/or footer]
 */
add_action( 'wp_enqueue_scripts', 'wp_theme_blank_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'wp_theme_blank_enqueue_script' );
