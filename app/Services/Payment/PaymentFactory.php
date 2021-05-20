<?php

namespace App\Services\Payment;

use App\Services\Payment\PaymentMethods;
use App\Exceptions;
use ReflectionClass;

class PaymentFactory
{
	/**
	 * @var array|string[]
	 */
	private array $paymentMethodClasses = [
		'cash' => PaymentMethods\CachPayment::class,
		'stripe' => PaymentMethods\StripePayment::class,
	];
	/**
	 * @var string
	 */
	private string $paymentMethod;

	public function __construct(string $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}

	public function __invoke()
	{
		/**
		 * Validate if the payment method exit.
		 */
		if (!in_array($this->paymentMethod, array_keys($this->paymentMethodClasses))) {
			throw new Exceptions\ClassNotFoundException('The payment class does not exist!');
		}

		$className = $this->paymentMethodClasses[$this->paymentMethod];
		/**
		 * Validate if the pay method exist in the payment class
		 */
		$reflection = new ReflectionClass($className);

		if (! $reflection->hasMethod('pay')) {
			throw new Exceptions\MethodNotFoundException('The payment method does not exist!');
		}

		return (new $className());
	}
}
