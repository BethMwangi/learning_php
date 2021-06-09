<?php

use Core\Container\Container;

if (!function_exists('env')) {
	function env(string $env, ?string $default = null)
	{
		return $_ENV[$env] ?? $default;
	}
}

if (! function_exists('dd')) {
	/**
	 * var_dump args
	 */
	function dd()
	{
		call_user_func_array('var_dump', func_get_args());
		die();
	}
}

if (! function_exists('invoke')) {
	function invoke()
	{
		$args = func_get_args();

		$className = array_shift($args);

		return (new $className(...$args))(); //__construct; __invoke
	}
}

if (! function_exists('trigger')) {
	function trigger()
	{
		$args = func_get_args();

		$className = array_shift($args);

		return (new $className())->execute(...$args); //No constructor; execute method should exist //optionally it can take arguments
	}
}

if (! function_exists('config')) {
	function config(string $configFile)
	{
		$filePath = app('path.config') . '/' . $configFile .'.php';

		if (! file_exists($filePath)) {
			return [];
		}

		$config = require $filePath;

		if (is_array($config)) {
			return $config;
		}

		return [];
	}
}

if (!function_exists('app')) {
	/**
	 * @param  string|null  $entry
	 *
	 * @return mixed
	 */
	function app(?string $entry = null)
	{
		$app = Container::getInstance();

		if ($entry === null) {
			return $app;
		}

		return $app->get($entry);
	}
}
