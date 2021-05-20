<?php

namespace App\Services\Facades;

use App\Core\Facades\BaseFacade;
use App\Core\Logger\Logger;

class Log extends BaseFacade
{
	public static string $className = Logger::class;
}
