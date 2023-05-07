<?php
/*
Plugin Name: Hook Example
*/
function added_footer()
{
    echo 'Added to footer by hook-example plugin' . date("l");
}
add_action('wp_footer', 'added_footer');
function remove_added_footer()
{
    if (date("l") === "Sunday") {
// Target the 'wp_footer' action, remove the 'added_footer' function from it
        remove_action("wp_footer", "added_footer");
    }
}
add_action("wp_head", "remove_added_footer");