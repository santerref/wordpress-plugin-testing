<?php
/*
Plugin Name: WordPress plugin testing
Plugin URI: https://wordpress.org/plugins/mag-products-integration/
Description: Sample WordPress plugin to see how testing works.
Version: 1.0.0
Requires at least: 4.0
Author: Francis Santerre
Author URI: http://santerref.com/
*/

require 'autoload.php';

if ( ! function_exists( 'wordpress_plugin_testing' ) ) {

	/**
	 * Function to get the instance of the plugin.
	 * This allows other developers to remove or alter our filters and actions functions.
	 *
	 * @return \wordpress_plugin_testing\Plugin_Singleton
	 */
	function wordpress_plugin_testing() {
		static $plugin_instance;

		if ( ! isset( $plugin_instance ) ) {
			$plugin_instance = \wordpress_plugin_testing\Plugin_Singleton::get_instance();
		}

		return $plugin_instance;
	}

	wordpress_plugin_testing();

}