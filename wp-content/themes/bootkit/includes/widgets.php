<?php
function bootkit_widgets()
{
    register_sidebar([
        'name' => __('Bootkit first Sidebar', 'bootkit'),
        'id' => 'bootkit_sidebar',
        'description' => __('Bootkit first Sidebar for something.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name' => 'Bootkit second Sidebar',
        'id' => 'bootkit_sidebar_2',
        'description' => __('Bootkit second Sidebar for something.'),
        'before_widget' => '<div id="%1$s" class="backgroundlist %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);
}