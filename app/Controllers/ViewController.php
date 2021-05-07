<?php

namespace App\Controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\BaseController;
use App\Services\Facades\Log;
use App\Actions\Sum\SumAction;
use App\Actions\Sum\ReduceAction;
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
		Log::info("The sum is $sum");
		return $this->toJson(['sum' => $sum]);
	}

	public function arraySum()
	{
		return invoke(ReduceAction::class, func_get_args());
	}
}

dd((new ViewController())->arraySum(1, 1.23, 'a', ['something in it']));
