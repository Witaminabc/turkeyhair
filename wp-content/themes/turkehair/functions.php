<?php
add_action( 'wp_enqueue_scripts', 'style_theme');
function style_theme() {
wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/assets/css/style.css');


}

add_action( 'wp_footer', 'scripts_child_theme', 10);
function scripts_child_theme()
{
    wp_enqueue_script('jquery321min', get_stylesheet_directory_uri() . '/assets/js/app.js');
//    wp_enqueue_script('jquery-cookie', get_stylesheet_directory_uri() . '/assets/js/jquery.cookie.min.js');
}

