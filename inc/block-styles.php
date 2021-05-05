<?php

/**
 * Block Styles
 */
if ( function_exists('register_block_style') ) {
    /**
     * Register block styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function iphan_block_styles() {

        register_block_style(
            'core/heading',
            array(
                'name'  => 'ctrls-titulo', 'ctrl-s',
                'label' =>  'Títulos do CTRL+S',
                'isDefault' => true,
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'ctrls-subheading', 'ctrl-s',
                'label' =>  'Fonte dos títulos do CTRL+S',
                'isDefault' => false,
            )
        );
    }
    add_action('init', 'iphan_block_styles');
}