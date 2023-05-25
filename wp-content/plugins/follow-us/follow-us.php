<?php
/*
Plugin Name: Follow us
Text Domain: follow-us
Description: This plugin adds follow us link to the post, font awesome required
Version: 1.0
Author: RoCreator
Author URI: https://example.com/
License: GPL2
*/

if ( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin, no much I can do when called directly.";
    exit;
}
//Includes
include "includes/front/enqueue.php";
include "includes/front/follow_us_post_content.php";
//Plugin
add_filter('the_content', 'follow_us_to_post_content');
//Add localization
function follow_load_plugin_textdomain()
{
    load_plugin_textdomain('follow-us', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'follow_load_plugin_textdomain');