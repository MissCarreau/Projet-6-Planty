<?php
add_action('wp_enqueue_scripts', function () {

    // Style du thème parent
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Style du thème enfant
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['parent-style'],
        wp_get_theme()->get('Version')
    );

});
