<?php

namespace App\Core\Database;

use Doctrine\DBAL\DriverManager;

class QueryBuilder
{
	public $db;

	public function __construct()
	{
		$connectionParams = require app('path.config') . '/database.php';

		try {
			$dbConnection = DriverManager::getConnection($connectionParams);
		} catch (Exception $exception) {
			dd($exception);
		}

		$this->db = $dbConnection->createQueryBuilder();;
	}

	public function __call(string $method, array $args)
	{
		return $this->db->{$method}(...$args);
	}
}
