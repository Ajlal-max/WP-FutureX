<?php 
//Class

require_once('Menu_Class.php');

//Hooks
add_action('init', array('Menu_Class', 'registerSettings'));
add_action('admin_init', array('Menu_Class', 'hideAdminBar'));
add_action('admin_menu', array('Menu_Class', 'createMenu'));

function learn_wp_ajax_handler(){
    if( check_ajax_referer('abc', 'security')) {
        $current_option = get_option('our-first-option');
        if( false === $current_option || 'yes' !== $current_option ){
            update_option('our-first-option', 'yes');
        }else {
            update_option('our-first-option', 'no');
        }
        wp_send_json_success($data);
    }
}

add_action('wp_ajax_our-ajax-action-name', 'learn_wp_ajax_handler');