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
}
add_action( 'wp_enqueue_scripts', 'ctrl_s_enqueue_styles_and_scripts');

/* Enqueues block side CSS files */
function ctrl_s_editor_side_enqueues() {
	wp_enqueue_style( 'museu-boulieu-editor-styles', get_stylesheet_directory_uri() . '/editor-styles.css', array(), ctrl_s_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'ctrl_s_editor_side_enqueues');

/* Child Theme setup */
function ctrl_s_theme_setup() {
	
	/* Set headings font family */
	$bebas_neue = array(
		"family" => "Bebas Neue",
		"letter-spacing" => "CT_CSS_SKIP_RULE",
		"line-height" => "1.5",
		"size" => "40px",
		"text-decoration" => "CT_CSS_SKIP_RULE",
		"text-transform" => "CT_CSS_SKIP_RULE",
		"variation" => "n4"
	);

	set_theme_mod('h1Typography', $bebas_neue);
	set_theme_mod('h2Typography', array_merge($bebas_neue, array(
		"size" => "35px"
	)) );
	set_theme_mod('h3Typography', array_merge($bebas_neue, array(
		"size" => "30px"
	)) );
	set_theme_mod('h4Typography', array_merge($bebas_neue, array(
		"size" => "25px"
	)) );
	set_theme_mod('h5Typography', array_merge($bebas_neue, array(
		"size" => "20px"
	)) );
	set_theme_mod('h6Typography', array_merge($bebas_neue, array(
		"size" => "18px"
	)) );

	set_theme_mod('single_blog_post_pageTitleFont', array(
		"family" => "Default",
		"letter-spacing" => "CT_CSS_SKIP_RULE",
		"line-height" => "CT_CSS_SKIP_RULE",
		"size" => array(
			"desktop" => "46px", 
			"tablet" => "42px",
			"mobile" => "35px"
		),
		"text-decoration" => "CT_CSS_SKIP_RULE",
		"text-transform" => "CT_CSS_SKIP_RULE",
		"variation" => "default"
	) );
}
add_action( 'after_setup_theme', 'ctrl_s_theme_setup' );

/* Theme special features */
function ctrl_s_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', 'vh', 'vw' );
}
add_action( 'after_setup_theme', 'ctrl_s_theme_supported_features' );


/* Filters possible Blocksy color palletes */
function ctrl_s_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Azul escuro CTRL+S',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #1a557f)'
		),
		array(
			'name' => 'Azul claro CTRL+S',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #187a9f)'
		),
		array(
			'name' => 'Cinza escuro CTRL+S',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #282828)'
		),
		array(
			'name' => 'Preto CTRL+S',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #000000)'
		), 
		array(
			'name' => 'Branco CTRL+S',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #ffffff)'
		),
		array(
			'name' => 'Cinza Claro CTRL+S',
			'slug' => 'palette-color-6',
			'color' => 'var(--paletteColor6, #f2f2f2)'
		),
		array(
			'name' => 'Laranja escuro CTRL+S',
			'slug' => 'palette-color-7',
			'color' => 'var(--paletteColor7, #f95e05)'
		),
		array(
			'name' => 'Laranja claro CTRL+S',
			'slug' => 'palette-color-8',
			'color' => 'var(--paletteColor8, #fa8e00)'
		),
		array(
			'name' => 'Laranja escuro alt CTRL+S',
			'slug' => 'palette-color-9',
			'color' => 'var(--paletteColor9, #7baccd)'
		),
		array(
			'name' => 'Laranja claro alt CTRL+S',
			'slug' => 'palette-color-10',
			'color' => 'var(--paletteColor10, #9bd1dc)'
		),
		array(
			'name' => 'Laranja escuro alt CTRL+S',
			'slug' => 'palette-color-11',
			'color' => 'var(--paletteColor11, #fdb992)'
		),
		array(
			'name' => 'Laranja claro alt CTRL+S',
			'slug' => 'palette-color-12',
			'color' => 'var(--paletteColor12, #ffd299)'
		),
	);
}
add_filter( 'blocksy:editor-color-palette', 'ctrl_s_filter_palette' );

// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Registers Block patterns
require get_stylesheet_directory() . '/inc/block-patterns.php';