<?php

namespace App\Actions\Sum;

use App\Services\Respond\Respond;
use App\Actions\BaseAction;

class ReduceAction extends BaseAction
{
	use Respond;
	/**
	 * @var array
	 */
	private array $args;
	/**
	 * @var array|string[]
	 */
	private static array $acceptedTypes = ['integer', 'double'];

	public function __construct(array $args)
	{
		$this->args = $args;
	}

	public function __invoke(): array
	{
		$this->message = 'The sum is:';

		$this->data = array_reduce($this->args, function($total, $arg) {
			if (in_array(gettype($arg), self::$acceptedTypes)) {
				return $total + $arg;
			}
			return $total;
		}, 0);

		return $this->formatResponse();
	}
}
