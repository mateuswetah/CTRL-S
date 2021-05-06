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
                'name'  => 'ctrls-titulo',
                'label' =>  __('Títulos do CTRL+S', 'ctrl-s'),
                'isDefault' => true,
            )
        );

        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'ctrls-subheading',
                'label' =>  __('Fonte dos títulos do CTRL+S', 'ctrl-s'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'ctrls-button',
                'label' =>  __('Botão estilo link do CTRL+S', 'ctrl-s'),
                'isDefault' => true,
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'ctrls-button-light',
                'label' =>  __('Botão estilo link do CTRL+S (claro)', 'ctrl-s'),
                'isDefault' => true,
            )
        );
    }
    add_action('init', 'iphan_block_styles');
}