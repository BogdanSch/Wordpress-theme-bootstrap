<?php
function r_get_random_post()
{
    global $wpdb;
    return $wpdb->get_var("SELECT `ID` FROM `" . $wpdb->posts . "`
                        WHERE post_status='publish' AND post_type='post'
                        ORDER BY rand() LIMIT 1");
}