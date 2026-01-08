<?php
function zenfit_assets() {
    wp_enqueue_style(
        'zenfit-style',
        get_template_directory_uri() . '/assets.css'
    );

    wp_enqueue_script(
        'zenfit-script',
        get_template_directory_uri() . '/script.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'zenfit_assets');
