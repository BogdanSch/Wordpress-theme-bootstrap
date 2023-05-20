<?php
function r_daily_generate_post()
{
    set_transient(
        'r_daily_post',
        r_get_random_post(),
        DAY_IN_SECONDS
    );
}