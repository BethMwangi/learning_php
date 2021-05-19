<?php

namespace App\Actions\Sum;

class SumAction
{
	public function handle(int $num1, int $num2)
	{
		return $this->myHelper($num1, $num2);
	}

	/**
	 * @param  int  $a
	 * @param  int  $b
	 * @return int
	 */
	private function myHelper(int $a, int $b): int
	{
		return $a + $b;
	}
}
