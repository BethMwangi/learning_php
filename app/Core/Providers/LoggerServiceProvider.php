<?php

namespace App\Core\Providers;

use App\Core\Logger\Logger;

use League\Container\ServiceProvider\AbstractServiceProvider;

class LoggerServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		'log'
	];

	public function register()
	{
		$this->getContainer()->add('log', function () {
			return app(Logger::class);
		});
	}
}
