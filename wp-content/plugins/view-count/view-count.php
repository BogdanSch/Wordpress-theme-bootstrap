<?php
/*
Plugin Name: View Count
Plugin URI: https://ex.com
Description: Output count of post view
Version: 1.0
Автор: Bohdan Sch
Author URI: https://ex.com
*/

if (!function_exists('add_action')) {
    echo "Hi there! I'm just a plugin, no much I can do when called directly.";
    exit;
}

function view_count()
{
    global $wpdb;
    $query = "SELECT view_count FROM wp_posts";
    $result = $wpdb->get_row($query);
    if (!is_null($result)) {
        return;
    }
    $query = "ALTER TABLE
                  " . $wpdb->posts . "
              ADD
                  `view_count` BIGINT UNSIGNED NOT NULL DEFAULT 0
              AFTER
                  `comment_count`";
    $wpdb->query($query);
}
register_activation_hook(__FILE__, "view_count");

function show_view_count($content)
{
    if (!is_single()) {
        return $content;
    }
    global $post;
    $views = $post->view_count;
    $text = '<p>' . __('Post viewed: ', 'view_count') . $views . '</p>';
    return $content . $text;
}
add_filter('the_content', 'show_view_count');

function update_view_count()
{
    if (!is_single()) {
        return;
    }
    global $post, $wpdb;
    $views = $post->view_count + 1;
    $wpdb->update(
        $wpdb->posts,
        ['view_count' => $views],
        ['ID' => $post->ID]
    );
}
add_action('wp_head', 'update_view_count');