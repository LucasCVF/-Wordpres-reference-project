<?php
// Registrar o tipo de post 'historia'
function create_historia_post_type() {
    $labels = array(
        'name' => 'Histórias',
        'singular_name' => 'História',
        'menu_name' => 'Histórias',
        'name_admin_bar' => 'História',
        'add_new' => 'Adicionar Nova',
        'add_new_item' => 'Adicionar Nova História',
        'new_item' => 'Nova História',
        'edit_item' => 'Editar História',
        'view_item' => 'Ver História',
        'all_items' => 'Todas as Histórias',
        'search_items' => 'Buscar Histórias',
        'not_found' => 'Nenhuma história encontrada.',
        'not_found_in_trash' => 'Nenhuma história encontrada na lixeira.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'historia'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag'), // Adiciona suporte a categorias e tags
    );
    

    register_post_type('historia', $args);
}

// Hook para registrar o tipo de post
add_action('init', 'create_historia_post_type');
