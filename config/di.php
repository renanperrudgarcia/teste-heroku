<?php

use App\Shared\Adapters\Contracts\HttpClient;
use App\Shared\Infra\Drivers\DoctrineDriver;
use App\Shared\Infra\PokeAPI;
use App\Shared\Infra\PRedisClient;
use App\Shared\Infra\TwigEngine;
use DI\Container;
use DI\ContainerBuilder;
use Predis\Client;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions($injections);

$container = $containerBuilder->build();

$container->set('config', function() {
    return require __DIR__ . DS . 'config.php';
});


$container->set('database', function(Container $container) {
    $dbConfig = $container->get('config')['database'];

    $connectionParams = array(
      'dbname' => $dbConfig['dbname'],
      'user' => $dbConfig['username'],
      'password' => $dbConfig['password'],
      'host' => $dbConfig['host'],
      'port' => $dbConfig['port'],
      'charset' => $dbConfig['charset'],
      'driver' => 'pdo_pgsql',
    );

    // $pdo = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], [
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //     PDO::ATTR_PERSISTENT => TRUE
    // ]);

    return new DoctrineDriver($connectionParams);
});

$container->set('cache', function(Container $container) {
    $cacheConfig = $container->get('config')['cache'];

    $predis = new Client("redis://{$cacheConfig['host']}:{$cacheConfig['port']}");
    $predis->auth($cacheConfig['password']);

    return new PRedisClient($predis, $container->get('config')['cache']['params']);
});

$container->set('pokemonApi', function(Container $container) {
    $pokeApiConfig = $container->get('config')['externalApi']['pokeapi'];

    return new PokeAPI($container->get(HttpClient::class), $pokeApiConfig);
});

$container->set('templatePresentation', function(Container $container) {
    $config = $container->get('config')['templatePresentation'];

    $loader = new FilesystemLoader($config['viewsPath']);

    $twig = new Environment($loader, [
        'cache' => $config['enableCache'] === true ? $config['cachePath'] : false
    ]);

    return new TwigEngine($twig, $config);
});
