<?php
/**
 * @package Beth onboarding
 * @version 0.0.1
 */
/*
Plugin Name: Beth onboarding
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description:  A basic plugin.
Author: Beth Mwangi
Version: 0.0.1
Author URI: http://ma.tt/
*/

require 'vendor/autoload.php';
require 'core/bootstrap.php';

app(Beth\Controllers\PluginController::class);
