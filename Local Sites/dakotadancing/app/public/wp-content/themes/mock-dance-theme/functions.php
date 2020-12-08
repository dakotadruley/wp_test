<?php 

function dancing_files() {
    wp_enqueue_style('font_awesome', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('dancing_main_styles', get_stylesheet_uri());
}

function dance_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
}

function dance_adjust_queries($query) {
    if (!is_admin() AND is_post_type_archive('class') AND $query-> is_main_query()) {
        $today = date('Ymd');
        $query-> set('meta_key', 'class_date');
        $query-> set('orderby', 'title');
        $query-> set('order', 'ASC');
        $query-> set('posts_per_page', -1);
        $query-> set('meta_query', array(
            array(
              'key' => 'class_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
            ));
    }
}

add_action('wp_enqueue_scripts', 'dancing_files');
add_action('after_setup_theme', 'dance_features');
add_action('pre_get_posts', 'dance_adjust_queries');

?>