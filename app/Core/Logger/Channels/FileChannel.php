<?php

namespace App\Core\Logger\Channels;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;

class FileChannel
{
	public function __invoke(): MonologLogger
	{
		$log = new MonologLogger('file');
		/*-- file handler --*/
		$config = config('monolog');
		['output' => $output, 'dateFormat' => $dateFormat ] = $config['channels']['file'];

		$lineFormatter = new LineFormatter($output, $dateFormat);
		$fileHandler = new StreamHandler(app('path.storage') . '/Log/app.log', MonologLogger::DEBUG, true);
		$fileHandler->setFormatter($lineFormatter);
		/*-- register handlers --*/
		$log->pushHandler($fileHandler);

		return $log;
	}
}
