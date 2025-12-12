<?php

/**
 *  Plugin Name: Test
 *  Version: 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! class_exists( 'Testing' ) ) {

	/**
	 * Class Testing
	 */
	class Test {
		public static function init() {
			add_action( 'wp_head', array( __CLASS__, 'covert_to_quote' ), 10 );
		}

		public static function covert_to_quote() {
			$array = array(
				'name1' => 'test',
				'name2' => 'test2',
				'name3' => 'test3',
				'name4' => 'test4',
			);
			extract( $array );
		}
	}

	Test::init();
}
