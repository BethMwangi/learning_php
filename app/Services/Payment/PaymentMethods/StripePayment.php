<?php

namespace App\Services\Payment\PaymentMethods;

class StripePayment implements PaymentInterface
{
	public function pay()
	{
		echo 'strip method';
	}
}
