<?php

namespace App\Services\Logger;

class Logger
{
	public function info(string $message)
	{
		$this->log(strtoupper(__METHOD__), $message);
	}

	public function warning(string $message)
	{
		$this->log(strtoupper(__METHOD__), $message);
	}

	public function debug(string $message)
	{
		$this->log(strtoupper(__METHOD__), $message);
	}

	/**
	 * @param  string  $type
	 * @param  string  $message
	 */
	private function log(string $type, string $message)
	{
		echo $type . ' | ' . $message;
	}
}
