<?php

/**
 * [wp_theme_blank_enqueue_style single call to wp_enqueue_style]
 * @return [void] [queues styles for injection into head]
 */
function wp_theme_blank_enqueue_style() {

	wp_enqueue_style( 'custom-css', 'style.css'); 
}

/**
 * [wp_theme_blank_enqueue_script single call to wp_enqueue_script]
 * @return [type] [queues scripts for injection into head]
 */
function wp_theme_blank_enqueue_script() {

	wp_enqueue_script( 'app-js', 'resources/js/app.js');
}

/**
 * Execute queued actions [Insert queued styles and scripts into head and/or footer]
 */
add_action( 'wp_enqueue_scripts', 'wp_theme_blank_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'wp_theme_blank_enqueue_script' );