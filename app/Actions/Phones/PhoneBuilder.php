<?php

namespace App\Actions\Phones;

use App\Actions\Phones\PhoneInterface;

class PhoneBuilder implements PhoneInterface
{
	protected array $attributes;

	public function __set($key, $value)
	{
		$this->attributes[$key] = $value;
	}

	/**
	 * @param  string  $make
	 * @return $this
	 */
	public function setMake(string $make)
	{
		$this->make = $make;

		return $this;
	}

	/**
	 * @param  string  $model
	 * @return $this
	 */
	public function setModel(string $model)
	{
		$this->model = $model;

		return $this;
	}

	/**
	 * @param  string  $color
	 * @return $this
	 */
	public function setColor(string $color)
	{
		$this->color = $color;

		return $this;
	}

	/**
	 * @param  string  $capacity
	 * @return $this
	 */
	public function setCapacity(string $capacity)
	{
		$this->capacity = $capacity;

		return $this;
	}
}
