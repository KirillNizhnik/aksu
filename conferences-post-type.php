<?php
function conferences_post_type() {
    $labels = array(
        'name'               => _x( 'Конференції', 'назва типу запису загальна' ),
        'singular_name'      => _x( 'Конференція', 'назва типу запису унікальна' ),
        'menu_name'          => _x( 'Конференції', 'адміністративне меню' ),
        'name_admin_bar'     => _x( 'Конференція', 'додати новий на панелі інструментів адміністратора' ),
        'add_new'            => _x( 'Додати нову конференцію', 'запис' ),
        'add_new_item'       => __( 'Додати нову конференцію' ),
        'new_item'           => __( 'Нова конференція' ),
        'edit_item'          => __( 'Редагувати конференцію' ),
        'view_item'          => __( 'Переглянути конференцію' ),
        'all_items'          => __( 'Всі конференції' ),
        'search_items'       => __( 'Шукати конференції' ),
        'parent_item_colon'  => __( 'Батьківська конференція:' ),
        'not_found'          => __( 'Конференції не знайдено.' ),
        'not_found_in_trash' => __( 'Конференцій в кошику не знайдено.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'conferences' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );

    register_post_type( 'conferences', $args );
}

add_action( 'init', 'conferences_post_type' );
