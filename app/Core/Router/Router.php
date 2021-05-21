<?php

namespace App\Core\Router;

use App\Controllers\CountryController;
use App\Controllers\ViewController;

use Laminas\Diactoros;
use Laminas\HttpHandlerRunner;
use League\Route\Router as LeagueRouter;

class Router
{
	public function __invoke()
	{
		$router = new LeagueRouter;

		$request = Diactoros\ServerRequestFactory::fromGlobals(
			$_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
		);

		$router->get('/', routeCallable(ViewController::class, 'getUsers'));

		$router->get('/countries', routeCallable(CountryController::class, 'index'));

		$response = $router->dispatch($request);

		(new HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
	}
}
