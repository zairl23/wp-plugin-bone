<?php namespace PluginBone\Dashboard;

/*
 |--------------------------------------------------------------------------
 | Dashboard Setting Page Handler For WordPress
 |--------------------------------------------------------------------------
 |
 */
class Dashboard  {


	const Wp_Plugin_Bone_VERSION = '0.0.2';

	
	public static function wp_plugin_bone_enqueue_admin()
	{		
		// General Admin Script
		// wp_enqueue_script(
		// 	'wp_plugin_bone-admin',
		// 	plugins_url( 'public/dashboard/js/wp_plugin_bone-admin.js', __DIR__.'/../../../'),
		// 	array( 'jquery', 'jquery-ui-core', 'jquery-ui-draggable', 'jquery-ui-droppable','jquery-ui-selectable'),
		// 	QDISCUSS_VERSION
		// );

		// Admin Style
		// wp_register_style(
		// 	'wp_plugin_bone-admin',
		// 	plugins_url( 'public/dashboard/css/wp_plugin_bone-admin.css', __DIR__.'/../../../'),
		// 	false,
		// 	QDISCUSS_VERSION,
		// 	'all'
		// );
		
		// Let others play
		do_action( 'mycred_admin_enqueue' );
	}

	public static function wp_plugin_bone_admin_menu()
	{
		global  $wp_version;

		$pages = array();
		
		$menu_icon = 'dashicons-star-filled';
		if ( version_compare( $wp_version, '3.8', '<' ) )
			$menu_icon = '';

		$title = 'Wp_Plugin_Bone';
		$menu_slug = 'wp_plugin_bone-dashboard';
		$pages[] = add_menu_page(
			$title,
			$title,
			'add_users',
			$menu_slug,
			array('Dashboard', 'wp_plugin_bone_settings_page'),
			$menu_icon
		);

		// $pages[] = add_submenu_page(
		// 	$menu_slug, 
		// 	'Users', 
		// 	'Users', 
		// 	'add_users', 
		// 	'wp_plugin_bone-users',
		// 	array('Dashboard', 'wp_plugin_bone_users_page')
		// );		

		// $pages[] = add_submenu_page(
		// 	'admin.php', 
		// 	'role setting', 
		// 	'role setting', 
		// 	'manage_options', 
		// 	'wp_plugin_bone-config-settings',
		// 	array('Dashboard', 'wp_plugin_bone_config_settings_page')
		// );

		$pages = apply_filters( 'wp_plugin_bone_admin_pages', $pages);

		// foreach ( $pages as $page ) {
		//         add_action( 'admin_print_styles-' . $page, array('\Wp_Plugin_Bone\Dashboard\Dashboard', 'wp_plugin_bone_admin_page_styles' ));
		// }

	}

	public static function wp_plugin_bone_admin_page_styles()
	{
		wp_enqueue_style( 'wp_plugin_bone-admin' );
	}

	public static function wp_plugin_bone_settings_page()
	{

		include __DIR__ . "/settings-page.php";
	}

}