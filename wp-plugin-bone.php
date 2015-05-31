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
require __DIR__."/vendor/autoload.php";

// Installation and uninstallation hooks
register_activation_hook(__FILE__, array('\PluginBone\App', 'activate'));
register_deactivation_hook(__FILE__, array('\PluginBone\App', 'deactivate'));

// instantiate the plugin class
$wp_plugin_bone = new \PluginBone\App();

//Dashboard
add_action( 'admin_enqueue_scripts', '\PluginBone\Dashboard\Dashboard::wp_plugin_bone_enqueue_admin');
add_action( 'admin_menu',     '\PluginBone\Dashboard\Dashboard::wp_plugin_bone_admin_menu', 999 );
add_action('wp_ajax_plugin_bone_ajax_admin_save', '\PluginBone\Dashboard::wp_plugin_bone_ajax_admin_save');
