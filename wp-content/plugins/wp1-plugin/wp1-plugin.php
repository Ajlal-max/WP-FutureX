<?php 
/**
 * @package wp1plugin
 */
/*
Plugin Name: wp1 Plugin
Plugin URI: http://wp-plugin.com/plugin
Description: Creating a new plugin from scratch 
Version: 1.0.0
Author: Umair
License: GPLv2 or later 
Text Domain: wp1-plugin
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

if ( ! function_exists( 'add_action' )) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

//Load Scripts
 require_once(plugin_dir_path(__FILE__).'/includes/wp1-plugin-scripts.php');

 //Load Class
 require_once(plugin_dir_path(__FILE__).'/includes/wp1-plugin-class.php');


 //Register Widget
 function register_wp1(){
      register_widget('wp1_Widget');
 }

 // Hook 
 add_action('widgets_init', 'register_wp1');