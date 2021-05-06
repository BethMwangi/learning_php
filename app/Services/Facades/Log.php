<?php

namespace App\Services\Facades;

use App\Services\Logger\Logger;

class Log
{
	public static function __callStatic($method, $args)
	{
		return (new Logger())->$method(...$args);
	}
}
