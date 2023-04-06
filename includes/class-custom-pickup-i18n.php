<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mithilesh.wisdmlabs.net/
 * @since      1.0.0
 *
 * @package    Custom_Pickup
 * @subpackage Custom_Pickup/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Custom_Pickup
 * @subpackage Custom_Pickup/includes
 * @author     Mithilesh <mithilesh.chaudhaudhari@wisdmlabs.com>
 */
class Custom_Pickup_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'custom-pickup',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
