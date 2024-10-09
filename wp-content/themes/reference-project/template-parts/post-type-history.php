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
        'taxonomies' => array('category', 'post_tag'),
    );

    register_post_type('historia', $args);
}
add_action('init', 'create_historia_post_type');

// Verificar se a imagem destacada está presente ao salvar o post e exibir um erro
function check_featured_image($post_id) {
    // Verifica se é um salvamento automático ou se o usuário não tem permissão para editar posts
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Verifica se o post é do tipo 'historia'
    $post_type = get_post_type($post_id);
    if ($post_type !== 'historia') {
        return;
    }

    // Verifica se a imagem destacada está presente
    if (!has_post_thumbnail($post_id)) {
        // Define o erro e impede a publicação
        set_transient("featured_image_error_{$post_id}", 'Por favor, adicione uma imagem destacada antes de publicar a história.', 10);

        // Verifica se o post está sendo excluído
        if (isset($_POST['post_status']) && $_POST['post_status'] !== 'trash') {
            // Atualiza o post para rascunho se não estiver sendo excluído
            remove_action('save_post', 'check_featured_image');
            wp_update_post(array(
                'ID' => $post_id,
                'post_status' => 'draft',
            ));
            add_action('save_post', 'check_featured_image');
        }
    }
}
add_action('save_post', 'check_featured_image');

// Exibir a mensagem de erro se não houver imagem destacada
function show_featured_image_error() {
    global $post;

    if (!$post) {
        return;
    }

    $error = get_transient("featured_image_error_{$post->ID}");
    if ($error) {
        echo '<div class="notice notice-error"><p>' . esc_html($error) . '</p></div>';
        delete_transient("featured_image_error_{$post->ID}");
    }
}
add_action('admin_notices', 'show_featured_image_error');
