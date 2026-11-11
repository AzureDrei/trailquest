<?php

function trailquest_enqueue_assets() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    // TrailQuest CSS
    wp_enqueue_style(
        'trailquest-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        wp_get_theme()->get('Version')
    );

    // Bootstrap JavaScript
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );

}

add_action('wp_enqueue_scripts', 'trailquest_enqueue_assets');