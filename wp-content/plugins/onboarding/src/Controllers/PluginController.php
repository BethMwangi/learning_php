<?php

namespace Beth\Controllers;

use Beth\Database\Migrations\ProductsMetaMigration;

use Beth\Actions\Countries;
use Beth\Actions\Woocommerce\Checkout\FormAction;
use Beth\Actions\Admin\AdminNoticeAction;
use Beth\Actions\Woocommerce\Product\PrintProductMetaAction;

class PluginController
{
	public function __construct()
	{
		/*-- activation hook --*/
		register_activation_hook(app('path.base') . '/onboarding.php', [$this, 'activationAction']);
		/*-- actions --*/
		add_action('init', [$this, 'consoleCommands']);
		add_action('admin_notices', [AdminNoticeAction::class, 'execute'], 10);
		add_action('woocommerce_before_checkout_billing_form', [FormAction::class, 'execute'], 10);
		add_action('edit_form_after_editor', [PrintProductMetaAction::class, 'execute'], 10, 1);
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

	public function activationAction()
	{
		/*-- database migrations --*/
		trigger(ProductsMetaMigration::class);
	}
}
