<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bisratberhanu.me
 * @since             1.0.0
 * @package           Helloworld
 *
 * @wordpress-plugin
 * Plugin Name:       helloworld
 * Plugin URI:        https://demo
 * Description:       demo plugin
 * Version:           1.0.0
 * Author:            bisrat
 * Author URI:        https://bisratberhanu.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       helloworld
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
define( 'HELLOWORLD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-helloworld-activator.php
 */
function activate_helloworld() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-helloworld-activator.php';
	Helloworld_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-helloworld-deactivator.php
 */
function deactivate_helloworld() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-helloworld-deactivator.php';
	Helloworld_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_helloworld' );
register_deactivation_hook( __FILE__, 'deactivate_helloworld' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-helloworld.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_helloworld() {

	$plugin = new Helloworld();
	$plugin->run();

}
run_helloworld();
