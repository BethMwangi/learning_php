<?php

namespace App\Actions\Phones;

class StorePhoneAction extends PhoneBuilder
{
	/**
	 * @var array|string[]
	 */
	protected array $defaultPhone = [
		'make' => 'Samsung',
		'model' => 'S10',
		'color' => 'Red',
		'capacity' =>'128mb',
	];
	/**
	 * @var array
	 */
	private array $args;

	public function __construct(array $args)
	{
		$this->args = $args;
	}

	public function __invoke()
	{
		[
			'make' => $make,
			'model' => $model,
			'color' => $color,
			'capacity' => $capacity,
		] = $this->args;

		$this
			->setMake($make ?? $this->defaultPhone['make'])
			->setModel($model ?? $this->defaultPhone['model'])
			->setColor($color ?? $this->defaultPhone['color'])
			->setCapacity($capacity ?? $this->defaultPhone['capacity']);

		return $this->attributes;
	}
}
