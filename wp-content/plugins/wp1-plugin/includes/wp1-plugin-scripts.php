<?php 
//Add Scripts
function wp1_add_style(){
    //Add Main CSS
wp_enqueue_style('wp1-main-style', plugins_url(). '/wp1-plugin/css/style.css');
//Add Main Js
// wp_enqueue_scripts('wp1-main-script', plugins_url(). '/wp1-plugin/js/main.js');
}

add_action('wp_enqueue_scripts', 'wp1_add_style');

function wp1_add_scripts(){
   //Add Main Js
    wp_enqueue_script('wp1-main-script', plugins_url(). '/wp1-plugin/js/main.js');
    
    //Adding Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
    
}

add_action('wp_enqueue_scripts', 'wp1_add_scripts');