<?php

/**
 * Plugin Name:       Single Post CTA
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Add sidebar to singe post
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Beth
 * Author URI:        https://beth.test/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       spc
 */


//define a path\if the file is called directly,, abort
if ( !defined ('ABSPATH' ) ) {
    die;
}
/**
 * Load stylesheets
 */
function spc_load_stylesheet ()
{
    if (is_single()) {
        wp_enqueue_style('spc_stylesheet', plugin_dir_url(__FILE__) . '
            spc-styles.css');
    }
}
add_action('wp_enqueue_scripts', 'spc_load_stylesheet');