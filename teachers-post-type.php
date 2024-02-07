<?php
function teachers_post_type() {
    $labels = array(
        'name'               => _x( 'Викладачі', 'назва типу запису загальна' ),
        'singular_name'      => _x( 'Викладач', 'назва типу запису унікальна' ),
        'menu_name'          => _x( 'Викладачі', 'адміністративне меню' ),
        'name_admin_bar'     => _x( 'Викладач', 'додати новий на панелі інструментів адміністратора' ),
        'add_new'            => _x( 'Додати нового викладача', 'запис' ),
        'add_new_item'       => __( 'Додати нового викладача' ),
        'new_item'           => __( 'Новий викладач' ),
        'edit_item'          => __( 'Редагувати викладача' ),
        'view_item'          => __( 'Переглянути викладача' ),
        'all_items'          => __( 'Всі викладачі' ),
        'search_items'       => __( 'Шукати викладачів' ),
        'parent_item_colon'  => __( 'Батьківський викладач:' ),
        'not_found'          => __( 'Викладачів не знайдено.' ),
        'not_found_in_trash' => __( 'Викладачів в кошику не знайдено.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'teachers' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );

    register_post_type( 'teachers', $args );
}


function teachers_taxonomy() {
    $labels = array(
        'name' => _x( 'Посади', 'taxonomy general name' ),
        'singular_name' => _x( 'Посада', 'taxonomy singular name' ),
        'search_items' =>  __( 'Пошук посад' ),
        'all_items' => __( 'Всі посади' ),
        'parent_item' => __( 'Батьківська посада' ),
        'parent_item_colon' => __( 'Батьківська посада:' ),
        'edit_item' => __( 'Редагувати посаду' ),
        'update_item' => __( 'Оновити посаду' ),
        'add_new_item' => __( 'Додати нову посаду' ),
        'new_item_name' => __( 'Назва нової посади' ),
        'menu_name' => __( 'Посади' ),
    );

    register_taxonomy('positions',array('teachers'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'positions' ),
    ));
}

function register_post_type_taxonomy_teacher(){
    teachers_taxonomy();
    teachers_post_type();
}
add_action( 'init', 'register_post_type_taxonomy_teacher');
