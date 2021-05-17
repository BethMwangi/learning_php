<?php

namespace App\Controllers;

use App\Actions\Users\StoreAction;
use App\Controllers\BaseController;
use App\Services\Facades\Log;
use App\Actions\Sum\SumAction;
use App\Actions\Sum\ReduceAction;
use App\Actions\Users\ShowAction;
use stdClass;

class ViewController extends BaseController
{
	/**
	 * @param  int  $num1
	 * @param  int  $num2
	 * @return false|string
	 */
	public function mySum(int $num1, int $num2)
	{
		$sum = invoke(SumAction::class, $num1, $num2);
		/*-- log --*/
		$message = "The sum is $sum";
		Log::debug('i am the master of facades!');
		Log::channel('file')->info($message);

		return $this->toJson(['sum' => $sum]);
	}

	public function arraySum()
	{
		return invoke(ReduceAction::class, func_get_args());
	}

	public function getUsers()
	{
		$users = invoke(ShowAction::class);

		return json_encode($users);
	}

	public function createUser(string $first_name, string $last_name)
	{
		$user = invoke(StoreAction::class, compact('first_name', 'last_name'));

		return json_encode($user);
	}
}
