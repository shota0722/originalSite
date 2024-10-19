<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );
    wp_register_style(
        'google_font1',
        'https://fonts.googleapis.com/css2?family=League+Gothic&display=swap',
        array(),
        '1.0'
    );

    wp_register_style(
        'google_font2',
        'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/scss/stylesheet.css',
        array('reset_style', 'google_font1', 'google_font2'),
        '1.0'
    );

    wp_deregister_script('jquery');

    wp_register_script(
        'jquery_script',
        'https://code.jquery.com/jquery-3.7.1.min.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script'),
        '1.0',
        true
    );
}
