<?php

namespace App\Actions\Users;

use App\Services\Facades\DB;

class StoreAction
{
	private array $args;

	public function __construct(array $args)
	{
		$this->args = $args;
	}

	public function __invoke()
	{
		return DB::insert('users')
			->values([
				'first_name' => '?',
				'last_name' => '?',
			])
			->setParameter(0, $this->args['first_name'])
			->setParameter(1, $this->args['last_name'])
			->execute();
	}
}
