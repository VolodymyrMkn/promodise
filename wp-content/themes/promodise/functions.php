<?php
if (!defined('VERSION')) {
    // Replace the version number of the theme on each release.
    define('VERSION', '1.0.10');
}
require_once "inc/class-wp-bootstrap-navwalker.php";
require_once "inc/walker-comments.php";
require_once "inc/widgets/widget.php";
require_once "inc/widgets/widget-text.php";
require_once "inc/widgets/widget-download.php";
require_once "inc/register-custom-post-type.php";
require_once "ajax/form-ajax.php";
require_once "ajax/post-ajax.php";
add_action('wp_enqueue_scripts', 'promodise_scripts');
add_action('after_setup_theme', 'promodise_configuration');


function promodise_configuration() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo',array(
        'height' => 50,
        'width' => 130,
        'flex-width' => false, // true - чтобы логотип подстраивался под ширину
        'flex-height' => false, // true - чтобы логотип подстраивался под высоту
        'header-text' => 'dddddddd',
        'unlink-homepage-logo' => true,
    ));
    register_nav_menus(array(
            'header' => 'Header menu',
            'footer_left' => 'Footer left',
            'footer_right' => 'Footer right'
        ));
}

function promodise_scripts()
{
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.css', '', VERSION);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.css', '', VERSION);
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/plugins/animate-css/animate.css', '', VERSION);
    wp_enqueue_style('icofont', get_template_directory_uri() . '/plugins/icofont/icofont.css', '', VERSION);
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', '', VERSION);
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), VERSION);
    // main-style отвечает за корн.папку css
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js', array(), VERSION, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script("popper", get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js',array("jquery"),VERSION, true);
    wp_enqueue_script("bootstrap-script", get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js',array("jquery"),VERSION, true);
    wp_enqueue_script("wow", get_template_directory_uri() . '/plugins/counterup/wow.min.js',array("jquery"),VERSION, true);
    wp_enqueue_script("jquery_easing", get_template_directory_uri() . '/plugins/counterup/jquery.easing.1.3.js',array("jquery"),VERSION, true);
    wp_enqueue_script("jquery_waypoints", get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.js',array("jquery"),VERSION, true);
    wp_enqueue_script("jquery_counterup", get_template_directory_uri() . '/plugins/counterup/jquery.counterup.min.js',array("jquery"),VERSION, true);
    wp_enqueue_script("contact.js", get_template_directory_uri() . '/plugins/form/contact.js',array("jquery"),VERSION, true);
    wp_enqueue_script("custom.js", get_template_directory_uri() . '/js/custom.js',array("jquery"),VERSION, true);
    wp_localize_script('custom.js','ajax_links', array(
        'url' => admin_url('admin-ajax.php'),
    ));
    }
function print_anyarray($any_array) {
            echo '<pre>';
            print_r($any_array);
            echo '</pre>';
}

if(function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Contact info',
        'menu_title'    => 'Contact',
        'menu_slug'     => 'contact-info',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
?>