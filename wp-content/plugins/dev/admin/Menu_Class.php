<?php

class Menu_Class {
  
    public static function createMenu() {
        
        add_menu_page(
            'page Title',
            'Menu Title',
            'administrator',
            'our_menu_slug',
            array('Menu_Class','menuCallback'),
            'dashicons-smiley',
            45
        ); 

        add_submenu_page(
            'our_menu_slug',
            'Sub-Menu Title',
            'Sub Menu',
            'administrator',
            'our_submenu_slug',
            array('Menu_Class','menuCallback'),
        );
    
    }

    public static function menuCallback()
    {
        wp_enqueue_script('learn-wp-ajax-js', plugins_url(). '/dev/admin/js/dev-ajax.js', array('jquery'));
        wp_localize_script('learn-wp-ajax-js', 'LearnWPAjax', array('security' => wp_create_nonce( 'abc' )) );
        ?>
        <h1><?php _e('Our first Settings :', ' dev')?></h1>
        <form action="options.php" method="post">
           <?php 
               // settings_fields('our-settings-group');
           ?>
            
            <input id="hide-main" type="checkbox" name="our-first-option" class="hide-admin-cb" value="yes" <?php checked( get_option('our-first-option'),'yes' ) ?>>
            <label for="hide-admin"><?php _e('Hide Admin Bar in Frontend') ?></label>
            

            <?php // submit_button('Save') ?>
        </form>
       <?php
    }
    public static function hideAdminBar()
    {
         $option = get_option('our-first-option');

        if($option === 'yes')
        {
            add_filter('show_admin_bar', '__return_false');
        }
    }

    public static function registerSettings(){
        register_setting('our-settings-group', 'our-first-option');
    }
}
