<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/nabincodes
 * @since             1.0.0
 * @package           Imagify_Webp_Helper
 *
 * @wordpress-plugin
 * Plugin Name:       Imagify WebP Helper
 * Plugin URI:        https://github.com/nabincodes/imagify-webp-helper
 * Description:       This is the helper plugin that automatically avoid the conversion of <img> to <picture> tag when Imagify's WebP feature. is enabled.
 * Version:           1.0.0
 * Author:            Nabin Jaiswal
 * Author URI:        https://github.com/nabincodes
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       imagify-webp-helper
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
define( 'IMAGIFY_WEBP_HELPER_VERSION', '1.0.0' );

function disable_imagify_webp_conversion(){
	return false;
}
add_action( 'imagify_allow_picture_tags_for_webp', 'disable_imagify_webp_conversion' );

