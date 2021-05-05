<?php
/**
 * Creates taxonomy status do projeto.
 */
function ctrl_s_register_projetos_post_type_and_taxonomy() {

    // Add new post type projetos
    $labels = array(
        'name'                  => _x( 'Projetos', 'Post type general name', 'ctrl-s' ),
        'singular_name'         => _x( 'Projeto', 'Post type singular name', 'ctrl-s' ),
        'menu_name'             => _x( 'Projetos', 'Admin Menu text', 'ctrl-s' ),
        'name_admin_bar'        => _x( 'Projeto', 'Add New on Toolbar', 'ctrl-s' ),
        'add_new'               => __( 'Adicionar novo', 'ctrl-s' ),
        'add_new_item'          => __( 'Adicionar novo projeto', 'ctrl-s' ),
        'new_item'              => __( 'Novo projeto', 'ctrl-s' ),
        'edit_item'             => __( 'Editar projeto', 'ctrl-s' ),
        'view_item'             => __( 'Ver projeto', 'ctrl-s' ),
        'all_items'             => __( 'Todos os projetos', 'ctrl-s' ),
        'search_items'          => __( 'Pesquisar projetos', 'ctrl-s' ),
        'parent_item_colon'     => __( 'Projeto pai:', 'ctrl-s' ),
        'not_found'             => __( 'Nenhum projeto encontrado.', 'ctrl-s' ),
        'not_found_in_trash'    => __( 'Nenhum projeto encontrado na lixeira.', 'ctrl-s' ),
        'featured_image'        => _x( 'Imagem de destaque do projeto', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ctrl-s' ),
        'set_featured_image'    => _x( 'Atribuir imagem de destaque', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ctrl-s' ),
        'remove_featured_image' => _x( 'Remover imagem de destaque', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ctrl-s' ),
        'use_featured_image'    => _x( 'Usar como imagem de destaque', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ctrl-s' ),
        'archives'              => _x( 'Listas de projetos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ctrl-s' ),
        'insert_into_item'      => _x( 'Inserir no projeto', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ctrl-s' ),
        'uploaded_to_this_item' => _x( 'Enviar para este projeto', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ctrl-s' ),
        'filter_items_list'     => _x( 'Filtrar lista de projetos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ctrl-s' ),
        'items_list_navigation' => _x( 'Lista de navegação de projetos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ctrl-s' ),
        'items_list'            => _x( 'Lista de projetos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ctrl-s' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projeto' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'projeto', $args );

    unset($args);
    unset($labels);

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Tipo de Projeto', 'taxonomy general name', 'ctrl-s' ),
        'singular_name'     => _x( 'Projetos', 'taxonomy singular name', 'ctrl-s' ),
        'search_items'      => __( 'Pesquisar por tipo de projetos', 'ctrl-s' ),
        'all_items'         => __( 'Todos os tipos de projetos', 'ctrl-s' ),
        'parent_item'       => __( 'Tipo de projeto pai', 'ctrl-s' ),
        'parent_item_colon' => __( 'Tipo de projeto pai:', 'ctrl-s' ),
        'edit_item'         => __( 'Editar tipo de projeto', 'ctrl-s' ),
        'update_item'       => __( 'Atualizar tipo de projeto', 'ctrl-s' ),
        'add_new_item'      => __( 'Adicionar novo tipo de projeto', 'ctrl-s' ),
        'new_item_name'     => __( 'Nome do novo tipo de projeto', 'ctrl-s' ),
        'menu_name'         => __( 'Tipo de Projeto', 'ctrl-s' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tipo-de-projeto' ),
    );
 
    register_taxonomy( 'tipo-de-projeto', array( 'projeto' ), $args );
}
add_action( 'init', 'ctrl_s_register_projetos_post_type_and_taxonomy', 0 );
