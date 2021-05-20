<?php

/**
 * Base Facade class.
 * To create a facade class, extend the BaseFacade class and overwrite the static attribute $className.
 */

namespace App\Core\Facades;

class BaseFacade
{
	public static string $className;

	public static function __callStatic(string $method, array $args)
	{
		return app(static::$className)->$method(...$args);
	}
}
