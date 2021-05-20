<?php

require __DIR__ . '/../vendor/autoload.php';

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

//Router
//Testing
echo app(App\Controllers\ViewController::class)->getUsers();


