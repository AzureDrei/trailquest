<?php

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

}

add_action('wp_enqueue_scripts', 'trailquest_enqueue_assets');