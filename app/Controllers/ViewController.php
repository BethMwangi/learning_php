<?php

namespace App\Controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\BaseController;
use App\Services\Facades\Log;
use App\Actions\Sum\SumAction;

class ViewController extends BaseController
{
	/**
	 * @var int
	 */
	private int $num1;
	/**
	 * @var int
	 */
	private int $num2;

	public function __construct(int $num1, int $num2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	/**
	 * @param  int  $num1
	 * @param  int  $num2
	 * @return false|string
	 */
	public function mySum()
	{
		$sum = invoke(SumAction::class, $this->num1, $this->num2);
		/*-- log --*/
		Log::debug("The sum is $sum");
		return $this->toJson(['sum' => $sum]);
	}
}

echo (new ViewController(10, 20))->mySum();
