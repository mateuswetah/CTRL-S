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
