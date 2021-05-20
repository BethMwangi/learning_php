<?php

namespace App\Core\Providers;

use App\Core\Http\FetchFactory;

use League\Container\ServiceProvider\AbstractServiceProvider;

class HttpServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		'fetch'
	];

	public function register()
	{
		$this->getContainer()->add('fetch', function () {
			return app(FetchFactory::class);
		});
	}
}
