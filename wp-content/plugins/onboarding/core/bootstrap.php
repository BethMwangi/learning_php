<?php

$basePath = dirname(__DIR__);
/**
 * .env file.
 */
$dotenv = Dotenv\Dotenv::createImmutable($basePath);
$dotenv->safeLoad();
/**
 * Container instance.
 */
new Core\Container\Container($basePath);
