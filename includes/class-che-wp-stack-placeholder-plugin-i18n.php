<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       ethosengine.com
 * @since      1.0.0
 *
 * @package    Che_Wp_Stack_Placeholder_Plugin
 * @subpackage Che_Wp_Stack_Placeholder_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Che_Wp_Stack_Placeholder_Plugin
 * @subpackage Che_Wp_Stack_Placeholder_Plugin/includes
 * @author     Matthew Dowell <mbd06b@gmail.com>
 */
class Che_Wp_Stack_Placeholder_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'che-wp-stack-placeholder-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
