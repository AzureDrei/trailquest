<?php

function trailquest_enqueue_styles() {

    wp_enqueue_style(
        'trailquest-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

}

add_action('wp_enqueue_scripts', 'trailquest_enqueue_styles');