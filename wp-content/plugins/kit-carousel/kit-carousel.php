<?php
/*
 * Plugin Name: Kit Carousel
 * Plugin URI:
 * Description: Simple carousel with pictures
 * Version: 1.0
 * Автор: Bsch
 * Author URI: https://github.com/miwanoff/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

if (!function_exists('add_action')) {
    echo "Hi there! I'm just a plugin, no much I can do when called directly.";
    exit;
}

// Setup
define('KC_PLUGIN_URL', __FILE__);
// Includes
include 'includes/admin/admin.php';
include "includes/front/enqueue.php";
include 'process/kc_show_carousel.php';
// Hooks
add_action('wp_enqueue_scripts', 'kc_enqueue_scripts', 100);
add_action('admin_menu', 'kc_create_menu');
// add_filter('the_content', 'kc_show_carousel');
// Shortcodes
function kc_show_carousel_shortcode($atts, $content)
{
    return kc_show_carousel($content);
}
add_shortcode('kc_show_carousel', 'kc_show_carousel_shortcode');
