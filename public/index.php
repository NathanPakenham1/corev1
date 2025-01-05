<?php

use Core\Middleware\AuthMiddleware;
use Slim\Csrf\Guard;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Slim\Middleware\MethodOverrideMiddleware;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$app = AppFactory::create();
$responseFactory = $app->getResponseFactory();

$csrf = new Guard($responseFactory);
$app->add($csrf);

$app->addRoutingMiddleware();
$app->add(new MethodOverrideMiddleware());


$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$render = new PhpRenderer(__DIR__ . '/../core/Views');

require __DIR__ . '/../core/Config/functions.php';
require __DIR__ . '/../core/Config/config.php';
require __DIR__ . '/../core/Routes/index.php';

$app->run();