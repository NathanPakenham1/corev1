<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;

$app->get('/', function (Request $request, Response $response) use ($render, $csrf) {
    $obj = new \Core\Controllers\Pages($render, $csrf);
    $obj->home($request, $response);
    return $response;
});

$app->post('/submit', function (Request $request, Response $response) {
    // CSRF token validation is automatically handled by the middleware
    $parsedBody = $request->getParsedBody();

    // Process the form data
    // ...

    $response->getBody()->write("Form submitted successfully.");
    return $response;
});

$errorMiddleware->setErrorHandler(HttpNotFoundException::class, function (
    Request $request,
) use ($render) {
    $response = new \Slim\Psr7\Response();
    $obj = new \Core\Controllers\Pages($render);
    $obj->notFound($request, $response);
    return $response->withStatus(404);
});

