<?php

namespace App\Actions\Sum;

class SumAction
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

	public function __invoke()
	{
		return $this->myHelper($this->num1, $this->num2);
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
