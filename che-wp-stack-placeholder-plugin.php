<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ethosengine.com
 * @since             1.0.0
 * @package           Che_Wp_Stack_Placeholder_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Che WP Stack Placeholder Plugin
 * Plugin URI:        https://github.com/Mbd06b/bright
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matthew Dowell
 * Author URI:        ethosengine.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       che-wp-stack-placeholder-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CHE_WP_STACK_PLACEHOLDER_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-che-wp-stack-placeholder-plugin-activator.php
 */
function activate_che_wp_stack_placeholder_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-che-wp-stack-placeholder-plugin-activator.php';
	Che_Wp_Stack_Placeholder_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-che-wp-stack-placeholder-plugin-deactivator.php
 */
function deactivate_che_wp_stack_placeholder_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-che-wp-stack-placeholder-plugin-deactivator.php';
	Che_Wp_Stack_Placeholder_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_che_wp_stack_placeholder_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_che_wp_stack_placeholder_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-che-wp-stack-placeholder-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_che_wp_stack_placeholder_plugin() {

	$plugin = new Che_Wp_Stack_Placeholder_Plugin();
	$plugin->run();

}
run_che_wp_stack_placeholder_plugin();
