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
