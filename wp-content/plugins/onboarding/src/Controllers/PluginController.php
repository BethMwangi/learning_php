<?php

namespace Beth\Controllers;

use Beth\Actions\Post;

class PluginController
{
	public function __construct()
	{
		add_action( 'admin_notices', [$this, 'generateAdminNotice']);
	}

	public function generateAdminNotice() {
		$post = invoke(Post\ShowAction::class, 3);

		echo "<p>" . var_dump($post) . "</p>";
	}
}
