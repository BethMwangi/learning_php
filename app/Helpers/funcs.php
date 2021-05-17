<?php

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
		$filePath = __DIR__ . '/../../config/' . $configFile .'.php';

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
