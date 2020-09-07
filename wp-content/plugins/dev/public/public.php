<?php

/*
*   This File contains all the files for frontend
*/
require_once('dev_pub_sc.php');

add_shortcode('dev_pub_sc', array('dev_pub_sc', 'executeFirstShortcode'));
add_shortcode('dev_weather', array('dev_pub_sc', 'executeWeatherShortcode'));


//Check whether to show admin bar in frontend or not
function dev_hideAdminBar(){
    $option = get_option('our-first-option');
    if($option === 'yes')
    {
        add_filter('show_admin_bar', '__return_false');
    }
    
}
add_action('init', 'dev_hideAdminBar');