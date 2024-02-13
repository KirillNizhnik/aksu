<?php
function labs_post_type() {
    $labels = array(
        'name'               => _x( 'Лабораторії', 'назва типу запису загальна' ),
        'singular_name'      => _x( 'Лабораторія', 'назва типу запису унікальна' ),
        'menu_name'          => _x( 'Лабораторії', 'адміністративне меню' ),
        'name_admin_bar'     => _x( 'Лабораторія', 'додати новий на панелі інструментів адміністратора' ),
        'add_new'            => _x( 'Додати нову лабораторію', 'запис' ),
        'add_new_item'       => __( 'Додати нову лабораторію' ),
        'new_item'           => __( 'Нова лабораторія' ),
        'edit_item'          => __( 'Редагувати лабораторію' ),
        'view_item'          => __( 'Переглянути лабораторію' ),
        'all_items'          => __( 'Всі лабораторії' ),
        'search_items'       => __( 'Шукати лабораторії' ),
        'parent_item_colon'  => __( 'Батьківська лабораторія:' ),
        'not_found'          => __( 'Лабораторій не знайдено.' ),
        'not_found_in_trash' => __( 'Лабораторій в кошику не знайдено.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'labs' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );

    register_post_type( 'laboratory', $args );
}

add_action( 'init', 'labs_post_type' );
