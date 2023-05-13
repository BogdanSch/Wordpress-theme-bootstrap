<?php
/*
Plugin Name: Follow us
Plugin URI: https://example.com/
Text Domain: follow-us
Description: This plugin adds follow us link to the post
Version: 1.0
Author: Bohdan Shcherbak
Author URI: https://example.com/
Ліцензія: GPL2
*/

if ( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin, no much I can do when called directly.";
    exit;
}

function follow_us_to_post_content($content)
{
    return '<div class="follow"><a href="https://www.instagram.com/bogsvity_777/" target="_blank">'.__('Follow us').'<i class="fa-regular fa-heart"></i></a></div>' . $content;
}
add_filter('the_content', 'follow_us_to_post_content');
//Add localization
function follow_load_plugin_textdomain()
{
    load_plugin_textdomain('follow-us', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'follow_load_plugin_textdomain');