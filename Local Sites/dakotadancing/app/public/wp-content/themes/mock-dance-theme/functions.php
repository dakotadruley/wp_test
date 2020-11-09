<?php 

function dancing_files() {
    wp_enqueue_style('font_awesome', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('dancing_main_styles', get_stylesheet_uri());
}

function dance_features() {
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
}

add_action('wp_enqueue_scripts', 'dancing_files');
add_action('after_setup_theme', 'dance_features');

?>