<?php

function sample_housing_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts-noto-open-bodoni', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Noto+Sans+JP:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', [], null);

    // Site Styles
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', [], '1.0.0');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0.0');

    // WordPress標準のjQueryを使用する
    wp_enqueue_script('jquery');

    // Slick Script
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], '1.0.0', true);

    // Custom Script (script.js)
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'sample_housing_enqueue_scripts');
