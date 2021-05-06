<?php

/**
 * Base Facade class.
 * To create a facade class, extend the BaseFacade class and overwrite the static attribute $className.
 */

namespace App\Services\Facades;

use App\Services\Logger\Logger;

class BaseFacade
{
	public static string $className;

	public static function __callStatic($method, $args)
	{
		return (new static::$className())->$method(...$args);
	}
}
