<?php
/*
Theme Name: CTRL+S
Description: Tema do Observatório da Literatura Digital Brasileira
Author: wetah
Version: 0.0.1
Text Domain: ctrl-s
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const CTRL_S_VERSION = '0.0.1';

/* Enqueues necessary JS and CSS files */
function ctrl_s_enqueue_styles_and_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'ctrl-s-style', get_stylesheet_uri(), array('parent-style'), CTRL_S_VERSION );
	wp_enqueue_script( 'ctrl-s-grid', get_stylesheet_directory_uri() . '/js/ctrl-s-grid.js', array('underscore'), CTRL_S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ctrl_s_enqueue_styles_and_scripts');

/* Enqueues block side CSS files */
function ctrl_s_editor_side_enqueues() {
	wp_enqueue_style( 'ctrl-s-editor-styles', get_stylesheet_directory_uri() . '/css/block-styles.css', array(), CTRL_S_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'ctrl_s_editor_side_enqueues');

/* Theme special features */
function ctrl_s_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', 'vh', 'vw' );
}
add_action( 'after_setup_theme', 'ctrl_s_theme_supported_features' );

// Registers custom projects
require get_stylesheet_directory() . '/inc/projects.php';

// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Registers Block patterns
require get_stylesheet_directory() . '/inc/block-patterns.php';

// Presets customizer values
require get_stylesheet_directory() . '/inc/customizer.php';