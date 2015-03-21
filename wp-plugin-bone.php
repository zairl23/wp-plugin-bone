<?php
/*
Plugin Name: WP Plugin Bone
Plugin URI: http://github.com/zairl23/wp-plugin-bone
Description: A simple WordPress plugin bone
Version: 1.0
Author: zairl23
Author URI: http://www.github.com/zairl23
License: GPL2
*/
/*
Copyright 2015  zairl23  (email : zoobile@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('WP_Plugin_Bone'))
{
    class WP_Plugin_Bone
    {
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
            // register actions
        } // END public function __construct
    
        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        } // END public static function activate
    
        /**
         * Deactivate the plugin
         */     
        public static function deactivate()
        {
            // Do nothing
        } // END public static function deactivate
    } // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))

if(class_exists('WP_Plugin_Bone'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WP_Plugin_Bone', 'activate'));
    register_deactivation_hook(__FILE__, array('WP_Plugin_Bone', 'deactivate'));

    // instantiate the plugin class
    $wp_plugin_bone = new WP_Plugin_Bone();
}

?>
