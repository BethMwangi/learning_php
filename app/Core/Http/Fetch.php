<?php

namespace App\Core\Http;

use App\Core\Facades\BaseFacade;

use App\Core\Http\FetchFactory;

class Fetch extends BaseFacade
{
	public static string $className = FetchFactory::class;
}
