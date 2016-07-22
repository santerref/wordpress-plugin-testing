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

namespace wordpress_plugin_testing;

abstract class Plugin {

	public function __construct() {

	}

}

final class Plugin_Singleton extends Plugin {

	private static $instance;

	public static function get_instance() {
		if ( ! self::$instance instanceof self ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

}