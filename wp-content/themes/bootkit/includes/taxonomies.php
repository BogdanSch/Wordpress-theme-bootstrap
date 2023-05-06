<?php
function bootkit_taxonomies()
{
    register_taxonomy('genre',
        array('post'),
        array(
            'hierarchical' => true,
            /* true: like categories, false: like tags,
            default: false */
            'labels' => array(
                'name' => 'Movies genres',
                'singular_name' => 'Genre',
                'search_items' => 'Search genre',
                'popular_items' => 'Popular genres',
                'all_items' => 'All genres',
                'parent_item' => 'Parent Genre',
                'parent_item_colon' => 'Parent Genre',
                'edit_item' => 'Edit genre',
                'update_item' => 'Update genre',
                'add_new_item' => 'Add new genre',
                'new_item_name' => 'New Genre name',
                'separate_items_with_commas' => 'Separate Genres with commas',
                'add_or_remove_items' => 'Add or remove genre',
                'choose_from_most_used' => 'Choose from the most used genres',
                'menu_name' => 'Genre',
            ),
            'public' => true,
            'taxonomies' => array('category', 'genre', 'director'),
            /* for all users - true */
            'show_in_nav_menus' => true,

            /* add to Menu */
            'show_ui' => true,

            /* add User Interface */
            'show_tagcloud' => true,

            /* permit tagcloud */
            'update_count_callback' => '_update_post_term_count',

            /* callback-function to update the counter $object_type */
            'query_var' => true,

            'rewrite' => array(
                'slug' => 'genre', // slug
                'hierarchical' => false,
            ),
        )
    );
}