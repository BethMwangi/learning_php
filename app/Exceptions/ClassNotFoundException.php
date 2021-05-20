<?php

namespace App\Exceptions;

use Exception;

class ClassNotFoundException extends Exception
{
	protected $message;

	public function __construct(?string $message = null)
	{
		$this->message = $message;
	}
}
