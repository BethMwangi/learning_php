<?php

namespace App\Controllers;

use App\Actions\Phones\StorePhoneAction;

class DirectorController
{
	protected array $phones;

	/**
	 * @param  array  $phoneDefinitions
	 */
	public function storePhones(array $phoneDefinitions)
	{
		foreach($phoneDefinitions as $phoneDefinition) {
			$this->storePhone(...array_values($phoneDefinition));
		}

		return $this->phones;
	}

	/**
	 * @param  string|null  $make
	 * @param  string|null  $model
	 * @param  string|null  $color
	 * @param  string|null  $capacity
	 */
	public function storePhone(
		?string $make = null,
		?string $model = null,
		?string $color = null,
		?string $capacity = null
	): void
	{
		$this->phones[] = invoke(StorePhoneAction::class, compact('make', 'model', 'color', 'capacity'));
	}
}
