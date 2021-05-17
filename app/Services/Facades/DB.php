<?php

namespace App\Services\Facades;

use App\Services\Database\QueryBuilder;

class DB extends BaseFacade
{
	public static string $className = QueryBuilder::class;
}
