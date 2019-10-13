<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/IJustDev
 * @since             1.0.0
 * @package           BuyMyTexts
 *
 * @wordpress-plugin
 * Plugin Name:       BuyMyTexts
 * Plugin URI:        https://github.com/IJustDev/BuyMyTexts
 * Description:       A plugin for automatically importing texts from the text portal called "Textbroker"
 * Version:           1.0.0
 * Author:            IJustDEv
 * Author URI:        https://github.com/IJustDev
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/quick-guide-gplv3
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

defined('ABSPATH') or die('Something went wrong.');
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'BUYMYTEXTS_VERSION', '1.0.0' );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'Textbroker-php5-client/Textbroker.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buy-my-texts-activator.php';
    Buy_My_Texts_Activator::activate();
}
