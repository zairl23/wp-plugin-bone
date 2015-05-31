<?php namespace PluginBone\Dashboard;

/*
 |--------------------------------------------------------------------------
 | Dashboard Setting Page Handler For WordPress
 |--------------------------------------------------------------------------
 |
 */
class Dashboard  {


	const WP_PLUGIN_BONE_VERSION = '0.0.1';

	
	public static function wp_plugin_bone_enqueue_admin()
	{		
		// Admin Script
		// wp_enqueue_script(
		// 	'plugin_bone-admin',
		// 	plugins_url( 'public/dashboard/js/plugin_bone-admin.js', __DIR__.'/../../../'),
		// 	array(),
		// 	QDISCUSS_VERSION
		// );

		// wp_localize_script( 'plugin_bone-admin', 'plugin_bone_admin_params', array(
		// 	'config_settings_redirect' =>  './admin.php?page=plugin_bone-settings',
		// 	'extensions_settings_redirect' => './admin.php?page=plugin_bone-extensions',	
		// ));

		// // Admin Style
		// wp_enqueue_style(
		// 	'plugin_bone-admin',
		// 	plugins_url( 'public/dashboard/css/plugin_bone-admin.css', __DIR__.'/../../../'),
		// 	array(),
		// 	QDISCUSS_VERSION,
		// 	'all'
		// );
		
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

	public static function wp_plugin_bone_settings_page()
	{

		include __DIR__ . "/settings-page.php";
	}

	public static function plugin_bone_ajax_admin_save() 
	{
		wp_parse_str(stripslashes($_POST['data']), $data);
		// codes here
	}

}