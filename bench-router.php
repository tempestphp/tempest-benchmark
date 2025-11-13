<?php

use Tempest\Core\Tempest;
use Tempest\Http\GenericRequest;
use Tempest\Http\Method;
use Tempest\Http\Status;
use Tempest\Router\Router;

require_once __DIR__ . '/vendor/autoload.php';

$container = Tempest::boot();

$router = $container->get(Router::class);

$uris = [
    '/admin/controller_001',
    '/admin/controller_001/show/1',
    '/admin/controller_001/show',
    '/admin/controller_999/show/1',
    '/admin/controller_999/show',
    '/admin/controller_999',
];

foreach ($uris as $uri) {
    $start = microtime(true);

    $response = $router->dispatch(new GenericRequest(
        method: Method::GET,
        uri: $uri,
    ));

    $end = microtime(true);

    if ($response->status !== Status::OK) {
        ld($response);
    }

    echo "[{$uri}]\t" . ($end - $start) . PHP_EOL;
}

echo 'Done!' . PHP_EOL;
