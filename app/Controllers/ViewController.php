<?php

namespace App\Controllers;

use App\Core\Container\Container;
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
	 * @var ShowAction
	 */
	private ShowAction $showAction;
	/**
	 * @var SumAction
	 */
	private SumAction $sumAction;
	/**
	 * @var StoreAction
	 */
	private StoreAction $storeAction;

	public function __construct(
		ShowAction $showAction,
		SumAction $sumAction,
		StoreAction $storeAction
	)
	{
		$this->showAction = $showAction;
		$this->sumAction = $sumAction;
		$this->storeAction = $storeAction;
	}

	/**
	 * @param  int  $num1
	 * @param  int  $num2
	 * @return false|string
	 */
	public function mySum(int $num1, int $num2)
	{
		$sum = $this->sumAction->handle($num1, $num2);
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
		$users = $this->showAction->handle();

		Log::channel('file')->info('users', ['users' => $users]);

		return json_encode($users);
	}

	public function createUser(string $first_name, string $last_name)
	{
		$user = $this->storeAction->handle($first_name, $last_name);

		return json_encode($user);
	}
}
