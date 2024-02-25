<?php
function graduates_post_type() {
    $labels = array(
        'name'               => _x( 'Випускники', 'назва типу запису загальна' ),
        'singular_name'      => _x( 'Випускник', 'назва типу запису унікальна' ),
        'menu_name'          => _x( 'Випускники', 'адміністративне меню' ),
        'name_admin_bar'     => _x( 'Випускник', 'додати новий на панелі інструментів адміністратора' ),
        'add_new'            => _x( 'Додати нового випускника', 'запис' ),
        'add_new_item'       => __( 'Додати нового випускника' ),
        'new_item'           => __( 'Новий випускник' ),
        'edit_item'          => __( 'Редагувати випускника' ),
        'view_item'          => __( 'Переглянути випускника' ),
        'all_items'          => __( 'Всі випускники' ),
        'search_items'       => __( 'Шукати випускників' ),
        'parent_item_colon'  => __( 'Батьківський випускник:' ),
        'not_found'          => __( 'Випускників не знайдено.' ),
        'not_found_in_trash' => __( 'Випускників в кошику не знайдено.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'graduates' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );

    register_post_type( 'graduates', $args );
}

add_action( 'init', 'graduates_post_type' );
