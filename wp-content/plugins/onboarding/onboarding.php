<?php
/**
 * @package Beth onboarding
 * @version 0.0.1
 */
/*
* Plugin Name: Beth onboarding
* Plugin URI: http://wordpress.org/plugins/hello-dolly/
* Description: A basic plugin.
* Text Domain: beth
* Author: Beth Mwangi
* Version: 0.0.1
* Author URI: http://ma.tt/
*/

require 'vendor/autoload.php';
require 'core/bootstrap.php';

define('BETH_PLUGIN_URL', plugins_url('/', __FILE__));

app(Beth\Controllers\PluginController::class);
