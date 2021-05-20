<?php

namespace App\Core\Container;

use League\Container\Container as LeagueContainer;
use League\Container\ReflectionContainer;

class Container
{
	/**
	 * @var static
	 */
	protected static $instance;
	/**
	 * @var string
	 */
	protected string $appPath = 'app';
	/**
	 * @var string
	 */
	protected string $configPath = 'config';
	/**
	 * @var string
	 */
	protected string $storagePath = 'storage';
	/**
	 * @var string
	 */
	protected string $providersPath = 'app/Providers';
	/**
	 * Create a new Illuminate application instance.
	 *
	 * @param  string|null  $basePath
	 * @return void
	 */
	public function __construct($basePath = null)
	{
		self::getInstance();

		if ($basePath !== null) {
			$this->setPaths($basePath);
		}

		$this->registerServiceProviders();
	}

	/**
	 * Get the globally available instance of the container.
	 *
	 * @return \App\Core\Container\Container
	 */
	public static function getInstance()
	{
		if (is_null(static::$instance)) {
			$container = new LeagueContainer();

			$container->delegate(
				new ReflectionContainer()
			);

			static::$instance = $container;
		}

		return static::$instance;
	}

	/**
	 * @param  string  $basePath
	 */
	protected function setPaths(string $basePath)
	{
		$basePath = rtrim($basePath, '\/');
		static::$instance->add('path.base', $basePath);
		static::$instance->add('path.app', $basePath . DIRECTORY_SEPARATOR . $this->appPath);
		static::$instance->add('path.config', $basePath . DIRECTORY_SEPARATOR . $this->configPath);
		static::$instance->add('path.storage', $basePath . DIRECTORY_SEPARATOR . $this->storagePath);
		static::$instance->add('path.providers', $basePath . DIRECTORY_SEPARATOR . $this->providersPath);
	}

	protected function registerServiceProviders()
	{
		$serviceProviders = require __DIR__ . '/../Config/providers.php';

		foreach ($serviceProviders as $serviceProvider) {
			static::$instance->addServiceProvider($serviceProvider);
		}
	}
}
