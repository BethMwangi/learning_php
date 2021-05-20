<?php

namespace App\Actions\Users;

use App\Services\Facades\DB;

class StoreAction
{
	public function handle($first_name, $last_name)
	{
		return DB::insert('users')
			->values([
				'first_name' => '?',
				'last_name' => '?',
			])
			->setParameter(0, $first_name)
			->setParameter(1, $last_name)
			->execute();
	}
}
