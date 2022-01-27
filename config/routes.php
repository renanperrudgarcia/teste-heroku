<?php

/** @var \Slim\App $app */

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Cliente\Adapters\Http\CreateClienteAction;
use App\Cliente\Adapters\Http\SearchClienteAction;

use App\Middleware\CorsMiddleware;

use Slim\Interfaces\RouteCollectorProxyInterface;
use Slim\Factory\AppFactory;

//Here I pass the DI-PHP Container variable. So he performs the dependency injection
$app = AppFactory::createFromContainer($container);

$app->addBodyParsingMiddleware();

// This middleware will append the response header Access-Control-Allow-Methods with all allowed methods
$app->add(new CorsMiddleware());

// The RoutingMiddleware should be added after our CORS middleware so routing is performed first
$app->addRoutingMiddleware();


$app->get('/', function ($request, $response, $name) {
  echo phpinfo();
  $response->getBody()->write($_SERVER['SERVER_ADDR']);
  return $response;
});

$app->group('/cliente', function (RouteCollectorProxyInterface $group) {
    $group->get('/{cnpj}', SearchClienteAction::class);
    $group->post('', CreateClienteAction::class);

    $group->options('/{cnpj}', function (Request $request, Response $response): Response {
      return $response;
    });
    $group->options('', function (Request $request, Response $response): Response {
      return $response;
    });
});
