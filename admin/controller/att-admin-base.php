<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Att_admin
 * @subpackage Att_admin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Att_admin
 * @subpackage Att_admin/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class Att_admin_Base
{


	public function __construct()
	{
	}
	function att_base_menu_section()
	{



		$page_title = "ADA Tracking";
		$menu_title = "ADA Tracking";
		$capability = "manage_options";
		$menu_slug = "att-menu";
		$functionCallable = array($this, "att_menu_page_on_click");
		$icon_url = "";
		$position = 200;
		add_menu_page($page_title, $menu_title, $capability, $menu_slug, $functionCallable, $icon_url, $position);
		add_submenu_page($menu_slug, "My Receiving Address", "My Receiving Address", $capability, $menu_slug . '-receiving-address', array($this, "att_menu_receiving_address_OnClick"));
		add_submenu_page($menu_slug, "Setting", "setting", $capability, $menu_slug . '-setting', array($this, "att_menu_setting_OnClick"));
	}

	public function att_menu_page_on_click()
	{
		include_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/info/how-to-use.php';
	}

	public function att_menu_setting_OnClick()
	{
		include_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/settings/index.php';
	}

	public function att_menu_receiving_address_OnClick()
	{
		include_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/account/transactions.php';
	}

	
}
