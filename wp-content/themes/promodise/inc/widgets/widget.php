<?php
add_action('widgets_init', 'my_vitos_widgets_init');

function my_vitos_widgets_init(){
    register_sidebar(array(
        'name' => 'Виджет ввывода категории',
        'id' => 'category_widget',
        'description' => 'Выводиться как боковая панель только на главной странице сайта.',
        'before_widget' => '<div class="sidebar-widget category">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="mb-3">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Виджет ввывода тегов',
        'id' => 'category_tags',
        'description' => 'Выводиться под боковой панелью',
        'before_widget' => '<div class="sidebar-widget tag">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Виджет ввывода текста',
        'id' => 'category_text',
        'description' => 'Вывод текста',
        'before_widget' => '<div class="sidebar-widget tag">', // next level
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
            'name' => esc_html__('Blog Sidebar Text Widget'), // esc_html - функция, которая позволяет подготовить файл для перевода
            'id' => 'text-widget',
            'description' => esc_html__('Add widgets here.'),
            'before_widget' => '<div class="sidebar-widget download %2$s">', // чтобы не списком шли виджеты, а секциями
            'after_widget' => '</div>',
            'before_title' => '<h5 class="mb-4">',
            'after_title' => '</h5  >',
        )
    );
    register_sidebar(array(
        'name' => 'Виджет ввывода информации футера',
        'id' => 'info_footer',
        'description' => 'Выводиться слева в футере',
        'before_widget' => '<div class="footer-widget footer-link">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Виджет ввывода меню информации футера',
        'id' => 'left_menu_footer',
        'description' => 'Выводиться слева в футере',
        'before_widget' => '<div class="footer-widget footer-link">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Виджет ввывода меню ссылки футера',
        'id' => 'right_menu_footer',
        'description' => 'Выводиться справа в футере',
        'before_widget' => '<div class="footer-widget footer-link">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Виджет ввывода контактов',
        'id' => 'contacts',
        'description' => 'Выводиться внизу в футере',
        'before_widget' => '<div class="footer-widget footer-text">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Виджет ввывода прав',
        'id' => 'footer_law',
        'description' => 'Выводиться внизу в футере',
        'before_widget' => '<div class="footer-copy">',
        'after_widget' => '</div>',
    ));
    register_widget('promodise_widget_text');
    register_widget('promodise_widget_download');

}
?>