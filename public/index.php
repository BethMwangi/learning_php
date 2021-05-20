<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Core\Http\Fetch;
$basePath = dirname(__DIR__);
/**
 * .env file.
 */
$dotenv = Dotenv\Dotenv::createImmutable($basePath);
$dotenv->safeLoad();
/**
 * Container instance.
 */
new App\Core\Container\Container($basePath);

//Guzzle client
//$http = Fetch::get('https://api.bmbc.cloud/api/countries');

$http = app('fetch')->get('https://api.bmbc.cloud/api/countries');

app('log')->channel('file')->info('the service providers are great');

echo json_encode($http);


