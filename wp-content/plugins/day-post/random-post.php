<?php
/*
 * Plugin Name: Post of the day
 * Plugin URI:
 * Description: Random post of the day
 * Version: 1.0
 * Автор: MAI
 * Author URI: https://github.com/miwanoff/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if (!function_exists('add_action')) {
    echo "Hi there! I'm just a plugin, no much I can do when called directly.";
    exit;
}
// Setup
define('RP_PLUGIN_URL', __FILE__);
// Includes
include dirname(RP_PLUGIN_URL) . '/includes/widgets.php';
include dirname(RP_PLUGIN_URL) . '/includes/widgets/daily-post.php';
include dirname(RP_PLUGIN_URL) . '/includes/utility.php';
include dirname(RP_PLUGIN_URL) . '/includes/deactivate.php';
include dirname(RP_PLUGIN_URL) . '/includes/cron.php';
// Hooks
add_action('widgets_init', 'r_widgets_init');
add_action('r_daily_post_hook', 'r_daily_generate_post');
// Shortcodes