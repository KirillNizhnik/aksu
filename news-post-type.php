<?php
function news_post_type() {
    $labels = array(
        'name'               => _x( 'Новини', 'назва типу запису загальна' ),
        'singular_name'      => _x( 'Новина', 'назва типу запису унікальна' ),
        'menu_name'          => _x( 'Новини', 'адміністративне меню' ),
        'name_admin_bar'     => _x( 'Новина', 'додати новий на панелі інструментів адміністратора' ),
        'add_new'            => _x( 'Додати нову новину', 'запис' ),
        'add_new_item'       => __( 'Додати нову новину' ),
        'new_item'           => __( 'Нова новина' ),
        'edit_item'          => __( 'Редагувати новину' ),
        'view_item'          => __( 'Переглянути новину' ),
        'all_items'          => __( 'Всі новини' ),
        'search_items'       => __( 'Шукати новини' ),
        'parent_item_colon'  => __( 'Батьківська новина:' ),
        'not_found'          => __( 'Новини не знайдено.' ),
        'not_found_in_trash' => __( 'Новин в кошику не знайдено.' )
    );


    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );

    register_post_type( 'news', $args );
}

add_action( 'init', 'news_post_type' );
?>

