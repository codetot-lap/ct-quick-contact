<?php

/**
 * @link              https://codetot.com
 * @since             1.0.0
 * @package           Codetot_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       CT Quick Contact
 * Plugin URI:        https://codetot.com
 * Description:       Quick contact widget for wordpress website.
 * Version:           1.0.0
 * Author:            CODE TOT JSC
 * Author URI:        https://codetot.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ct-quick-contact
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'CT_QUICK_CONTACT_VERSION', '1.0.0' );
define( 'CT_QUICK_CONTACT_PLUGIN_SLUG', 'ct-blocks' );
define( 'CT_QUICK_CONTACT_PLUGIN_NAME', esc_html_x('CT Quick Contact', 'plugin name', 'ct-quick-contact'));
define( 'CT_QUICK_CONTACT_DIR', plugin_dir_path(__FILE__));
define( 'CT_QUICK_CONTACT_PATH', dirname( plugin_basename( __FILE__ ) ) );
define( 'CT_QUICK_CONTACT_AUTHOR', 'Code Tot JSC' );
define( 'CT_QUICK_CONTACT_AUTHOR_URI', 'https://codetot.com');
define( 'CT_QUICK_CONTACT_PLUGIN_URI', plugins_url('ct-quick-contact'));