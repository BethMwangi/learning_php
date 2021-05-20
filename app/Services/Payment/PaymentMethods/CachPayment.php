<?php

namespace App\Services\Payment\PaymentMethods;

class CachPayment implements PaymentInterface
{
	public function pay()
	{
		echo 'this is a cash payment';
	}
}
