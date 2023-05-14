<?php
/*
Plugin Name: Load More
Plugin URI: http://ex.com/
Description: Simple Load More Button plugin with AJAX
Автор: Bohdan Sch
Version: 1.1
Author URI: http://ex.com/
 */

function create_button_and_script()
{
    global $wp_query;
    if ($wp_query->max_num_pages > 1) {
        echo '<div class="container">
        <div id="bootkit_loadmore" class="btn btn-primary">Load more</div>
        </div>';
        echo "\n<script>\n";
        echo "var ajaxurl = '" . site_url() . "/wp-admin/admin-ajax.php';\n";
        echo "var bootkit_posts = '" . serialize($wp_query->query_vars) . "';\n";
        $n = (get_query_var('paged')) ? get_query_var('paged') : 1;
        echo "var current_page=" . $n . ";\n";
        echo "var max_pages=" . $wp_query->max_num_pages . ";\n";
        echo "</script>\n";
    }
}
add_action('get_footer', 'create_button_and_script');
function bootkit_load_more_scripts()
{
    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');
    // register наш main script but do not enqueue it yet
    wp_register_script('loadmore', plugin_dir_url(__FILE__) . 'js/loadmore.js', array('jquery'));
    wp_enqueue_script('loadmore');
}
add_action('wp_enqueue_scripts', 'bootkit_load_more_scripts');

function bootkit_load_posts()
{
    $args = unserialize(stripslashes($_POST['query'])); // Запит від скрипту
    $args['paged'] = $_POST['page'] + 1; // Номер сторінки
    $args['post_status'] = 'publish'; // тільки опубліковані
    $args['posts_per_page'] = get_option('posts_per_page'); // скільки постів на сторінці (підвантажувати по 2)
    // визначаємо, які посади будуть показані у базовому циклі WordPress
    query_posts($args);
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            include "templates/template.php";
        }
    }
    die();
}
add_action('wp_ajax_loadmore', 'bootkit_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'bootkit_load_posts');