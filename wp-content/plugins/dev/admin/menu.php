<?php 

function hide_action_bar(){
    $option = get_option('our-first-option');

    if($option === 'yes')
    {
        add_filter('show_admin_bar', '__return_false');
    }
}

add_action('init', 'hide_action_bar');

function register_our_settings(){
    register_setting('our-settings-group', 'our-first-option');
}

add_action('admin_init', 'register_our_settings');

function menu_callback(){
   ?>
    <form action="options.php" method="post">
       <?php
            settings_fields('our-settings-group');
       ?>
        
        <input id="hide-main" type="checkbox" name="our-first-option" value="yes" <?php checked( get_option('our-first-option'),'yes') ?>>
        <label for="hide-admin">Hide Admin Bar in Frontend</label>
        <?php submit_button('Save') ?>
    </form>
   <?php
}

function build_our_first_menu(){

    add_menu_page(
        'page Title',
        'Menu Title',
        'administrator',
        'our_menu_slug',
        'menu_callback',
        'dashicons-smiley',
        45
    ); 

    add_submenu_page(
        'our_menu_slug',
        'Sub-Menu Title',
        'Sub Menu',
        'administrator',
        'our_submenu_slug',
        'menu_callback'

    );
}

add_action('admin_menu', 'build_our_first_menu');