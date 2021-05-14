<?php

namespace App\Services\Logger;

use Monolog\Logger as MonologLogger;
use Psr\Log\LoggerTrait;

class Logger
{
	use LoggerTrait;

	/**
	 * @var array
	 */
	private array $channels = ['console'];

	/**
	 * @return $this
	 */
	public function channel()
	{
		$args = func_get_args();
		/*-- multiple arguments --*/
		if (count($args) > 1) {
			$this->channels = $args;
			return $this;
		}
		/*-- array of arguments --*/
		if (is_array($args[0])) {
			$this->channels = $args[0];
			return $this;
		}
		/*-- one argument --*/
		$this->channels = [$args[0]];
		return $this;
	}

	/**
	 * @param $level
	 * @param $message
	 * @param array $context
	 */
	public function log($level, $message, array $context = array())
	{
		foreach ($this->channels as $channelName) {
			$channelClassName = $this->formChannelClassName($channelName);
			$monologLogger = invoke($channelClassName);
			$monologLogger->{$level}($message, $context);
		}
	}

	/**
	 * @param  string  $channelName
	 * @return string
	 */
	private function formChannelClassName(string $channelName): string
	{
		return 'App\\Services\\Logger\\Channels\\' . ucfirst(strtolower($channelName)) . 'Channel';
	}
}
