<?php

namespace App\Controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\BaseController;
use App\Services\Facades\Log;
use App\Actions\Sum\SumAction;
use App\Actions\Sum\ReduceAction;
use Psr\Log\LogLevel;
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
		Log::info($message);
		return $this->toJson(['sum' => $sum]);
	}

	public function arraySum()
	{
		return invoke(ReduceAction::class, func_get_args());
	}
}

(new ViewController())->mySum(1, 1.23);
