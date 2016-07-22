<?php

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