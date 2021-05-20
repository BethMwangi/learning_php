<?php

namespace App\Services\Facades;

use App\Core\Facades\BaseFacade;
use App\Core\Database\QueryBuilder;

class DB extends BaseFacade
{
	public static string $className = QueryBuilder::class;
}
