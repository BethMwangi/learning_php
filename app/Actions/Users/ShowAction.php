<?php

namespace App\Actions\Users;

use App\Services\Facades\DB;

class ShowAction
{
	public function __invoke()
	{
		return DB::select('id', 'first_name', 'last_name')
			->from('users')
			->execute()
			->fetchAll();
	}
}
