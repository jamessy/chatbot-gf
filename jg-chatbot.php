<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://james-godwin.co.uk
 * @since             1.0.0
 * @package           Jg_Chatbot
 *
 * @wordpress-plugin
 * Plugin Name:       ChatBot
 * Plugin URI:        https://jg-chatbot
 * Description:       A custom plugin mimicking a chatbot, and integrating Gravity Forms
 * Version:           1.0.0
 * Author:            James Godwin
 * Author URI:        https://james-godwin.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jg-chatbot
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
define( 'JG_CHATBOT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jg-chatbot-activator.php
 */
function activate_jg_chatbot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jg-chatbot-activator.php';
	Jg_Chatbot_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jg-chatbot-deactivator.php
 */
function deactivate_jg_chatbot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jg-chatbot-deactivator.php';
	Jg_Chatbot_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jg_chatbot' );
register_deactivation_hook( __FILE__, 'deactivate_jg_chatbot' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jg-chatbot.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jg_chatbot() {

	$plugin = new Jg_Chatbot();
	$plugin->run();

}
run_jg_chatbot();
