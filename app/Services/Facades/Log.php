<?php

namespace App\Services\Facades;

use App\Services\Logger\Logger;

class Log extends BaseFacade
{
	public static string $className = Logger::class;
}
