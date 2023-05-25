<?php
function follow_us_scripts()
{
    $version = time();
    wp_register_style('follow_us_font-awesome_fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', [], $version);
    wp_enqueue_style('follow_us_font-awesome_fonts');
}
add_action('wp_enqueue_scripts', 'follow_us_scripts');