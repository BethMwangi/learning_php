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
		/*-- de-activation hook --*/
		register_deactivation_hook(app('path.base') . '/onboarding.php', [$this, 'deActivationAction']);
		/*-- actions --*/
		add_action('init', [$this, 'consoleCommands']);
		add_action('admin_notices', [AdminNoticeAction::class, 'execute'], 10);
		add_action('woocommerce_before_checkout_billing_form', [FormAction::class, 'execute'], 10);
		//add_action('edit_form_after_editor', [PrintProductMetaAction::class, 'execute'], 10, 1);
		/*-- enqueue --*/
		add_action('init', [$this, 'loadScripts']);
		/*-- meta box --*/
		add_action('add_meta_boxes', [$this, 'registerMetaBoxes']);
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

	public function deActivationAction()
	{
		//add code
	}
	/**
	 * Register an addition meta box to display the order status meta
	 */
	public function registerMetaBoxes($post_type)
	{
		//Product Supplier details
		if ($post_type === 'product' && isset($_GET['action']) && $_GET['action'] === 'edit') {
			add_meta_box(
				'beth_product_id',
				__('Meta data', 'beth'),
				[PrintProductMetaAction::class, 'execute'],
				$post_type,
				'normal',
				'high'
			);
		}
	}

	public function loadScripts()
	{
		wp_enqueue_style(
			'beth',
			BETH_PLUGIN_URL . 'src/resources/css/meta.css',
			[],
			filemtime(BETH_PLUGIN_URL . 'src/resources/css/meta.css')
		);
	}
}
