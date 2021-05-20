<?php

namespace App\Core\Providers;

use App\Core\Database\QueryBuilder;

use League\Container\ServiceProvider\AbstractServiceProvider;

class DbServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		'db'
	];

	public function register()
	{
		$this->getContainer()->add('db', function () {
			return app(QueryBuilder::class);
		});
	}
}
