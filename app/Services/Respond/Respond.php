<?php

namespace App\Services\Respond;

trait Respond
{
	/**
	 * @var array
	 */
	public array $attributes = [];

	public function __get($key)
	{
		return $this->attributes[$key] ?? null;
	}

	public function __set($key, $value)
	{
		return $this->attributes[$key] = $value;
	}

	/**
	 * @return array
	 */
	public function formatResponse()
	{
		return $this->attributes;
	}
}
