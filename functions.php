<?php

// Theme setup
function trailquest_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'trailquest_theme_setup');


// Enqueue CSS and JavaScript
function trailquest_enqueue_assets() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    // Bootstrap JavaScript
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );

    // Navbar CSS
    wp_enqueue_style(
        'trailquest-navbar',
        get_template_directory_uri() . '/assets/css/header.css',
        array('bootstrap')
    );

    // Hero CSS
    wp_enqueue_style(
        'trailquest-hero',
        get_template_directory_uri() . '/assets/css/hero.css',
        array('bootstrap')
    );

    // About CSS
    wp_enqueue_style(
        'trailquest-about',
        get_template_directory_uri() . '/assets/css/about.css',
        array('bootstrap')
    );

    wp_enqueue_style(
        'trailquest-woocommerce',
        get_template_directory_uri() . '/assets/css/woocommerce.css',
        array('bootstrap'),
        '1.0.1'
    );
}

add_action('wp_enqueue_scripts', 'trailquest_enqueue_assets');