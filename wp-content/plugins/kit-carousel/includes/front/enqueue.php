<?php


function kc_enqueue_scripts()
{
    wp_register_style('kc_docs_theme', plugins_url('/assets/css/docs.theme.min.css', KC_PLUGIN_URL));
    wp_enqueue_style('kc_docs_theme');


    wp_register_style('kc_carousel', plugins_url('/assets/css/owl.carousel.min.css', KC_PLUGIN_URL));
    wp_enqueue_style('kc_carousel');


    wp_register_style('kc_theme', plugins_url('/assets/css/owl.theme.default.min.css', KC_PLUGIN_URL));
    wp_enqueue_style('kc_theme');


    wp_register_script(
        'kc_app',
        plugins_url('/assets/js/app.js', KC_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );


    wp_enqueue_script('kc_app');


    wp_register_script(
        'kc_foundation',
        plugins_url('/assets/js/foundation.min.js', KC_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_enqueue_script('kc_foundation');


    wp_register_script(
        'kc_carousel',
        plugins_url('/assets/js/owl.carousel.min.js', KC_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_enqueue_script('kc_carousel');


    wp_register_script(
        'kc_highlight',
        plugins_url('/assets/js/highlight.js', KC_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_enqueue_script('kc_highlight');


    wp_register_script(
        'kc_main',
        plugins_url('/assets/js/main.js', KC_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_enqueue_script('kc_main');
}