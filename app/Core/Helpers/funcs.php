<?php

use Laminas\Diactoros\Response;
use App\Core\Container\Container;

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

		return (new $className(...$args))();
	}
}

if (! function_exists('config')) {
	function config(string $configFile)
	{
		$filePath = app('path.config') .'/' . $configFile .'.php';

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

if (!function_exists('routeCallable')) {
	function routeCallable(string $class, string $method)
	{
		return fn() => app($class)->{$method}();
	}
}

if (!function_exists('response')) {
	function response($data)
	{
		$response = new Response;
		$response->getBody()->write($data);
		return $response;
	}
}
