<?php 
/*
Plugin Name:    Dev Plugin 
Plugin URI:     http://devplugin.com
Description:    This is a development plugin 
Vesrion:        1.0.0
Author:         Umair
Author URI:     http://umair.com

*/   

final class dev {
    private static $instance = null;

    //Constructor
    public function __construct(){
        //die('dddddd');
        $this->initalHooks();
        $this->setupDatabase();
    }

    public static function getInstance(){
        if(is_null(self::$instance))
            self::$instance = new self();
    }

    private function initalHooks() 
    {
    //    if(is_admin()) {
    //       require_once('admin/admin.php');
    //    }
    //Menu File
       require_once('admin/admin.php');
       require_once('public/public.php');
    }
    
    private function setupDatabase() {
        require_once('admin/Our_Database.php');
        register_activation_hook(__FILE__, array('Our_Database', 'setup' ));
        
       add_action('wp_login', array('Our_Database', 'createDatabaseEntry'), 10, 2);
    }
}

dev::getInstance();
//dev::initalHooks();

