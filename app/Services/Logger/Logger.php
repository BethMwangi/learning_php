<?php

namespace App\Services\Logger;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;
use Psr\Log\LoggerTrait;

class Logger
{
	use LoggerTrait;

	/**
	 * Logs with an arbitrary level.
	 *
	 * @param mixed   $level
	 * @param string  $message
	 * @param mixed[] $context
	 *
	 * @return void
	 *
	 * @throws \Psr\Log\InvalidArgumentException
	 */
	public function log($level, $message, array $context = array())
	{
		$log = new MonologLogger('stream');
		/*-- stream handler --*/
		/*-- console logger --*/
		$consoleHandler = new StreamHandler('php://stdout', MonologLogger::DEBUG, true);
		/*-- file logger --*/
		$dateFormat = "Y n j, g:i a";
		$output = "%datetime% > %level_name% > %message% %context% %extra%\n";

		$lineFormatter = new LineFormatter($output, $dateFormat);
		$fileHandler = new StreamHandler(__DIR__ . '/../../../storage/Log/app.log', MonologLogger::DEBUG, true);
		$fileHandler->setFormatter($lineFormatter);
		/*-- register handlers --*/
		$log->pushHandler($consoleHandler);
		$log->pushHandler($fileHandler);

		$log->{$level}($message, $context);
	}
}
