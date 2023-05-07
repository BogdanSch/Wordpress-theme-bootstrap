<?php
/*
Plugin Name: Breadcrumbs
Plugin URI: https://example.com/
Description: Breadcrumbs, navigation scheme
Version: 1.0
Author: Bohdan Shcherbak
Author URI: https://example.com/
License: GPL2
*/
if ( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin, no much I can do when called directly.";
    exit;
}
function breadcrumbs()
{
    if (!is_front_page()) {
        echo '<ol class="breadcrumb">';
        echo '<li class="breadcrumb-item"><a href="';
        echo get_option('home');
        echo '">' . __("Home") . '</a></li>';
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb-item">';
            // the_category(', ');?>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a>
            <?php
            echo '</li>';
            if (is_single()) {
                echo '<li class="breadcrumb-item active">';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="breadcrumb-item active">';
            echo the_title();
            echo '</li>';
        }
        elseif (is_home()){
            echo '<li class="breadcrumb-item active">Blog</li>';
        }
        echo '</ol>';
    } 
}
add_action('wp_head', 'breadcrumbs');