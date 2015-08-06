<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Plugin Name
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * Version:           X.X.X
 * Author:            Your Name or Your Company
 * Author URI:        http://yourwebsite.com/
 * License:           MIT
 * License URI:       http://opensource.org/licenses/MIT
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

/*----------------------------------------------------------------------------*
 * Protect File.
 *----------------------------------------------------------------------------*/

if (!defined('WPINC')) {
    die;
}

/*----------------------------------------------------------------------------*
 * Autoload Classes.
 *----------------------------------------------------------------------------*/

require_once 'lib/autoload.php';

/*----------------------------------------------------------------------------*
 * Boot!
 *----------------------------------------------------------------------------*/

$updatePhp = new WPUpdatePhp('5.3.0');

if ($updatePhp->does_it_meet_required_php_version(PHP_VERSION)) {
    call_user_func(array(new Plugin_Name\App(__FILE__), 'boot'));
}
