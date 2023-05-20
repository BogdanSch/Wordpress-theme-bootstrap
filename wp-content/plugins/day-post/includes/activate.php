<?php
function r_activate_plugin()
{
    wp_schedule_event(time(), 'daily', 'r_daily_post_hook');
}