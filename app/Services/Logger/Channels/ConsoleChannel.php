<?php

namespace App\Services\Logger\Channels;

use Monolog\Handler\StreamHandler;

use Monolog\Logger as MonologLogger;

class ConsoleChannel
{
	public function __invoke(): MonologLogger
	{
		$log = new MonologLogger('console');
		/*-- console logger --*/
		$consoleHandler = new StreamHandler('php://stdout', MonologLogger::DEBUG, true);
		/*-- register handlers --*/
		$log->pushHandler($consoleHandler);

		return $log;
	}
}
