<?php

namespace Beth\Controllers;

class PluginController
{
	public function __construct()
	{
		add_action( 'admin_notices', [$this, 'generateAdminNotice']);
		add_action( 'after_plugin_row', [$this, 'addNoteAfterPluginRow']);
	}

	public function generateAdminNotice() {
		echo '<p>this is an admin notice2.</p>';
	}

	public function addNoteAfterPluginRow()
	{
		echo '<p>this is the list of the plugins!.</p>';
	}
}
