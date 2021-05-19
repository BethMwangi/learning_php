<?php

/**
 * Base controller class.
 */
namespace App\Controllers;

abstract class BaseController
{
	/**
	 * @param  array  $data
	 * @return false|string
	 */
	public function toJson(array $data)
	{
		return json_encode($data);
	}
}
