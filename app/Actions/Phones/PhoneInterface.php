<?php

namespace App\Actions\Phones;

interface PhoneInterface
{
	public function setMake(string $make);

	public function setModel(string $model);

	public function setColor(string $color);

	public function setCapacity(string $capacity);
}
