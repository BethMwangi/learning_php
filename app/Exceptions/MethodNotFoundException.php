<?php

namespace App\Exceptions;

use Exception;

class MethodNotFoundException extends Exception
{
	protected $message;

	public function __construct(?string $message = null)
	{
		$this->message = $message;
	}
}
