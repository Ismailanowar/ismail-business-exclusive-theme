<?php
function ismail_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'ismail_theme_setup');

function ismail_cpt() {
    register_post_type('service', [
        'label' => 'Services',
        'public' => true,
        'supports' => ['title','editor','thumbnail']
    ]);
}
add_action('init','ismail_cpt');

function ismail_enqueue_assets() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    );

    // Custom CSS
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'ismail_enqueue_assets');

function ismail_service_taxonomy() {

    register_taxonomy('service_category', 'service', [
        'label' => 'Service Categories',
        'hierarchical' => true, // category like
        'public' => true,
        'rewrite' => ['slug' => 'service-category']
    ]);

}
add_action('init', 'ismail_service_taxonomy');

function theme_menus() {
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
    ]);
}
add_action('after_setup_theme', 'theme_menus');

