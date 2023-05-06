<?php
function bootkit_enqueue()
{
    $version = BOOTSTRAPTOPIC_DEV_MODE ? time() : false;
    $url = get_theme_file_uri();
    wp_register_style('bootkit_google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', [], $version);
    wp_register_style('bootkit_bootstrap', $url . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], $version);
    wp_register_style('bootkit_modern_business', $url . '/assets/css/modern-business.css', [], $version);
    wp_register_script('bootkit_bootstrap', $url . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], $version, true);
    wp_register_style('bootkit_main', $url . '/assets/css/bootkit-main.css', [], $version);
    wp_register_style('bootkit_font-awesome_fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', [], $version);

    wp_enqueue_style('bootkit_google_fonts');
    wp_enqueue_style('bootkit_bootstrap');
    wp_enqueue_style('bootkit_font-awesome_fonts');
    wp_enqueue_style('bootkit_main');
    wp_enqueue_style('bootkit_modern_business');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootkit_bootstrap');
}