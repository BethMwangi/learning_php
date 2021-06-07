<?php

namespace Beth\Controllers;

use Beth\Actions\Countries;

class PluginController
{
	public function __construct()
	{
		/*-- actions --*/
		add_action('init', [$this, 'consoleCommands']);
		add_action('admin_notices', [$this, 'generateAdminNotice']);
		/*-- filters --*/
		add_filter('cron_schedules', [$this, 'myCron']);
		/*-- add hook to the cron --*/
		add_action('bl_cron_hook', [$this, 'cronFunc']);

		wp_schedule_event( time(), 'five_seconds', 'bl_cron_hook' );

		delete_option('myOption');
	}

	public function generateAdminNotice() {
		['data' => $data, 'status' => $status] = invoke(Countries\FetchCountriesAction::class);
		echo '<label>' . (get_option('myOption') != false ?  get_option('myOption')['x'] : 'default label') . '</label>';
		echo "<select>";
				foreach($data['data'] as $country) {
					echo "<option value=" . $country['country_code'] . ">" . $country['country_name'] . "</option>";
				}
	    echo "</select>";
	}

	public function myCron($schedules) {
		$schedules['five_seconds'] = array(
			'interval' => 5,
			'display'  => esc_html__( 'Every Five Seconds' ), );
		return $schedules;
	}

	public function cronFunc() {
		add_action('admin_notices', function() {
			echo '8888888';
		});
	}

	public function consoleCommands()
	{
		if (defined('WP_CLI')) {
			\WP_CLI::add_command('myConsoleCommand', function ($args) {
				\WP_CLI::confirm('Are you sure you want run this command?');
				 var_dump(...$args);
				 //* * * * /usr/local/var/www/html/wordpress.beth/wp myConsoleCommand 1 2 3
			});
		}
	}
}
