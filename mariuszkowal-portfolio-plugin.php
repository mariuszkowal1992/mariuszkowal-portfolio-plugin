<?php
/**
 * Plugin Name: Mariusz Kowal Portfolio Plugin
 * Description: Wtyczka dodaje funkcjonalnosc portfolio do motywu MARIUSZKOWAL - WordPress.
 * Version: 1.0.0
 * Author: Mariusz Kowal
 * Text Domain: mariuszkowal-portfolio-plugin
 * Domain Path: /languages
 *
 * @package MariuszKowalPortfolioPlugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MKPP_VERSION', '1.0.0' );
define( 'MKPP_PLUGIN_FILE', __FILE__ );
define( 'MKPP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MKPP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once MKPP_PLUGIN_DIR . 'includes/class-mariuszkowal-portfolio-plugin.php';

register_activation_hook( MKPP_PLUGIN_FILE, array( 'MariuszKowal_Portfolio_Plugin', 'activate' ) );
register_deactivation_hook( MKPP_PLUGIN_FILE, array( 'MariuszKowal_Portfolio_Plugin', 'deactivate' ) );

/**
 * Starts the plugin.
 */
function mkpp_init() {
	$plugin = new MariuszKowal_Portfolio_Plugin();
	$plugin->init();
}
add_action( 'plugins_loaded', 'mkpp_init' );
