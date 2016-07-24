<?php

namespace wordpress_plugin_testing;

class Plugin_SingletonTest extends \WP_UnitTestCase {

	function test_get_instance() {
		$instance = Plugin_Singleton::get_instance();

		$this->assertTrue( $instance instanceof Plugin_Singleton );
		$this->assertTrue( $instance instanceof Plugin );
	}

	function test_singleton() {
		$class = new \ReflectionClass( '\wordpress_plugin_testing\Plugin_Singleton' );

		$this->assertTrue( $class->isFinal() );
		$this->assertFalse( $class->isCloneable() );
		$this->assertFalse( $class->isInstantiable() );
	}

	function test_methods() {
		$class = new \ReflectionClass( '\wordpress_plugin_testing\Plugin_Singleton' );

		$this->assertTrue( $class->hasMethod( 'get_instance' ) );
	}
}

