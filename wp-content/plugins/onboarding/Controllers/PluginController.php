<?php

class PluginController
{
	public static $instance;

	public function __construct()
	{
		add_action( 'admin_notices', [$this, 'generateAdminNotice']);
		add_action( 'after_plugin_row', [$this, 'addNoteAfterPluginRow']);
	}
	/**
	 * Singleton pattern.
	 * @return mixed
	 */
	public static function getInstance()
	{
		if (!static::$instance) {
			static::$instance = new self();
		}

		return static::$instance;
	}

	public function generateAdminNotice() {
		echo '<p>this is an admin notice2.</p>';
	}

	public function addNoteAfterPluginRow()
	{
		echo '<p>this is the list of the plugins!.</p>';
	}
}
