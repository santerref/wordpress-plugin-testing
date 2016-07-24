<?php

namespace wordpress_plugin_testing;

/**
 * Because we can't instantiate the singleton we need a way to test the Plugin
 * class's methods in our unit tests and this can be done by extending it.
 *
 * Class Plugin
 * @package wordpress_plugin_testing
 */
abstract class Plugin {

	public function init_hooks() {
		// actions and filters
	}

}

/**
 * Class Plugin_Singleton
 * @package wordpress_plugin_testing
 */
final class Plugin_Singleton extends Plugin {

	private static $instance;

	private function __construct() {
	}

	public static function get_instance() {
		if ( ! self::$instance instanceof self ) {
			self::$instance = new self();

			// This method replace the constructor since it has to be private in a singleton.
			// We don't want to duplicate the code if another class extends Plugin.
			self::$instance->init_hooks();
		}

		return self::$instance;
	}

	private function __clone() {
	}

}