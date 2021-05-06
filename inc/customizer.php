<?php 

/* Child Theme setup with some values for the customizer */
function ctrl_s_theme_setup() {
	
	/* Set headings font family */
	$bebas_neue = array(
		"family" => "Bebas Neue",
		"letter-spacing" => "CT_CSS_SKIP_RULE",
		"line-height" => "1.5",
		"size" => "3.052rem",
		"text-decoration" => "CT_CSS_SKIP_RULE",
		"text-transform" => "CT_CSS_SKIP_RULE",
		"variation" => "n4"
	);

	set_theme_mod('h1Typography', $bebas_neue);
	set_theme_mod('h2Typography', array_merge($bebas_neue, array(
		"size" => "2.441rem"
	)) );
	set_theme_mod('h3Typography', array_merge($bebas_neue, array(
		"size" => "1.953rem"
	)) );
	set_theme_mod('h4Typography', array_merge($bebas_neue, array(
		"size" => "1.563rem"
	)) );
	set_theme_mod('h5Typography', array_merge($bebas_neue, array(
		"size" => "1.25rem"
	)) );
	set_theme_mod('h6Typography', array_merge($bebas_neue, array(
		"size" => "1rem"
	)) );

	set_theme_mod('single_blog_post_pageTitleFont', array(
		"family" => "Default",
		"letter-spacing" => "CT_CSS_SKIP_RULE",
		"line-height" => "CT_CSS_SKIP_RULE",
		"size" => array(
			"desktop" => "3.815rem", 
			"tablet" => "3.25rem",
			"mobile" => "2.5rem"
		),
		"text-decoration" => "CT_CSS_SKIP_RULE",
		"text-transform" => "CT_CSS_SKIP_RULE",
		"variation" => "default"
	) );

	set_theme_mod('blog_pageTitleFont', array(
		"family" => "Default",
		"letter-spacing" => "CT_CSS_SKIP_RULE",
		"line-height" => "CT_CSS_SKIP_RULE",
		"size" => array(
			"desktop" => "3.815rem", 
			"tablet" => "3.25rem",
			"mobile" => "2.5rem"
		),
		"text-decoration" => "CT_CSS_SKIP_RULE",
		"text-transform" => "CT_CSS_SKIP_RULE",
		"variation" => "default"
	) );

    /* Header color */
    /*
    $header_placements = get_theme_mod('header_placements', array());
    if ( isset($header_placements['sections']) && count($header_placements['sections']) > 0 ) {
        
        foreach ( $header_placements['sections'] as $section ) {
            if ( isset($section['items'] ) ) {
                
                foreach ( $section['items'] as $item ) {
                    if ( isset($item['values'] ) ) {
                        
                        foreach ( $item['values'] as $key => $value ) {
                            if ( $key == 'headerRowBackground') {
                                
                                foreach ( array('desktop', 'tablet', 'mobile') as $size ) {
                                    $value[$size]['backgroundColor']['default']['color'] = '#f2f2f2';
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    set_theme_mod('header_placements', $header_placements);
    */
}
add_action( 'after_setup_theme', 'ctrl_s_theme_setup' );


/* Filters possible Blocksy color palletes */
function ctrl_s_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Azul mais escuro CTRL+S',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #1a557f)'
		),
		array(
			'name' => 'Azul escuro CTRL+S',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #187a9f)'
		),
		array(
			'name' => 'Cinza mais escuro CTRL+S',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #282828)'
		),
		array(
			'name' => 'Preto CTRL+S',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #000000)'
		), 
		array(
			'name' => 'Cinza escuro CTRL+S',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #dbdbdb)'
		),
		array(
			'name' => 'Cinza claro CTRL+S',
			'slug' => 'palette-color-6',
			'color' => 'var(--paletteColor6, #f2f2f2)'
		),
		array(
			'name' => 'Cinza mais claro CTRL+S',
			'slug' => 'palette-color-7',
			'color' => 'var(--paletteColor7, #fbf9f9)'
		),
		array(
			'name' => 'Branco CTRL+S',
			'slug' => 'palette-color-8',
			'color' => 'var(--paletteColor8, #ffffff)'
		),
		array(
			'name' => 'Laranja mais escuro CTRL+S',
			'slug' => 'palette-color-9',
			'color' => 'var(--paletteColor9, #f95e05)'
		),
		array(
			'name' => 'Laranja escuro CTRL+S',
			'slug' => 'palette-color-10',
			'color' => 'var(--paletteColor10, #fa8e00)'
		),
		array(
			'name' => 'Azul claro CTRL+S',
			'slug' => 'palette-color-11',
			'color' => 'var(--paletteColor11, #7baccd)'
		),
		array(
			'name' => 'Azul mais claro CTRL+S',
			'slug' => 'palette-color-12',
			'color' => 'var(--paletteColor12, #9bd1dc)'
		),
		array(
			'name' => 'Laranja claro CTRL+S',
			'slug' => 'palette-color-13',
			'color' => 'var(--paletteColor13, #fdb992)'
		),
		array(
			'name' => 'Laranja mais claro alt CTRL+S',
			'slug' => 'palette-color-14',
			'color' => 'var(--paletteColor14, #ffd299)'
		),
	);
}
add_filter( 'blocksy:editor-color-palette', 'ctrl_s_filter_palette' );
