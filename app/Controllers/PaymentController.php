<?php

namespace App\Controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\BaseController;
use App\Services\Payment\PaymentFactory;

class PaymentController extends BaseController
{
	/**
	 * @var string
	 */
	private string $paymentMethod;

	public function __construct(string $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}

	public function pay()
	{
		return invoke(PaymentFactory::class, $this->paymentMethod)->pay();
	}
}

(new PaymentController('stripe'))->pay();
