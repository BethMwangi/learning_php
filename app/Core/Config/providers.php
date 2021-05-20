<?php

use App\Core\Providers\HttpServiceProvider;
use App\Core\Providers\DbServiceProvider;
use App\Core\Providers\LoggerServiceProvider;

return [
	DbServiceProvider::class,
	HttpServiceProvider::class,
	LoggerServiceProvider::class,
];
