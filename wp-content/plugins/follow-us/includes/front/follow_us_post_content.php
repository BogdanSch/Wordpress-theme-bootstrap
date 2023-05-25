<?php
function follow_us_to_post_content($content)
{
    if(is_single()){
        return '<div class="follow-us"><a href="https://www.instagram.com/bogsvity_777/" target="_blank">'.__('Follow us').'<i class="fa fa-heart"></i></a></div>' . $content;
    }
    // if(is_home()){
    //     return 
    // }
    return $content;
}