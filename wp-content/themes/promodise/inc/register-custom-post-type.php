<?php

add_action('init', 'my_custom_init');

function my_custom_init(){
    register_post_type( 'digital', [
        'label'  => null,
        'labels' => [
            'name'               => 'Диджитал Полного Цикла', // основное название для типа записи
            'singular_name'      => 'Digital', // название для одной записи этого типа
            'add_new'            => 'Добавить новую запись - digital', // для добавления новой записи
            'add_new_item'       => 'Добавление новго digital', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование digital', // для редактирования типа записи
            'new_item'           => 'Новый digital', // текст новой записи
            'view_item'          => 'Смотреть digital', // для просмотра записи этого типа.
            'search_items'       => 'Искать digital', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Просмотреть Digital Полного Цикла', // название меню
        ],
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-customizer',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
    ] );

    register_post_type( 'price', array(
        'label'  => null,
        'labels' => [
            'name'               => 'Цена', // основное название для типа записи
            'singular_name'      => 'Price', // название для одной записи этого типа
            'add_new'            => 'Добавить новую запись - price', // для добавления новой записи
            'add_new_item'       => 'Добавление новая price', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование price', // для редактирования типа записи
            'new_item'           => 'Новый price', // текст новой записи
            'view_item'          => 'Смотреть price', // для просмотра записи этого типа.
            'search_items'       => 'Искать price', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Просмотреть Price', // название меню
        ],
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-customizer',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
     ));

    register_post_type( 'testimonial', array(
        'label'  => null,
        'labels' => [
            'name'               => 'Отзыв', // основное название для типа записи
            'singular_name'      => 'testimonial', // название для одной записи этого типа
            'add_new'            => 'Добавить новую запись - testimonial', // для добавления новой записи
            'add_new_item'       => 'Добавление новая testimonial', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование testimonial', // для редактирования типа записи
            'new_item'           => 'Новый testimonial', // текст новой записи
            'view_item'          => 'Смотреть testimonial', // для просмотра записи этого типа.
            'search_items'       => 'Искать testimonial', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Просмотреть testimonial', // название меню
        ],
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-customizer',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
    ));

    register_post_type( 'partner', array(
        'label'  => null,
        'labels' => [
            'name'               => 'Партнеры', // основное название для типа записи
            'singular_name'      => 'partner', // название для одной записи этого типа
            'add_new'            => 'Добавить новую запись - partner', // для добавления новой записи
            'add_new_item'       => 'Добавление новая partner', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование partner', // для редактирования типа записи
            'new_item'           => 'Новый partner', // текст новой записи
            'view_item'          => 'Смотреть partner', // для просмотра записи этого типа.
            'search_items'       => 'Искать partner', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Просмотреть partner', // название меню
        ],
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-customizer',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
    ));
    register_post_type( 'counter', array(
        'label'  => null,
        'labels' => [
            'name'               => 'Счетчик', // основное название для типа записи
            'singular_name'      => 'counter', // название для одной записи этого типа
            'add_new'            => 'Добавить новую запись - counter', // для добавления новой записи
            'add_new_item'       => 'Добавление новая counter', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование counter', // для редактирования типа записи
            'new_item'           => 'Новый counter', // текст новой записи
            'view_item'          => 'Смотреть counter', // для просмотра записи этого типа.
            'search_items'       => 'Искать counter', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Просмотреть counter', // название меню
        ],
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-customizer',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
    ));

}

?>

