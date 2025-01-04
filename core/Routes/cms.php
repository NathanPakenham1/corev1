<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/cms', function (Request $request, Response $response) use ($render, $csrf) {
    $obj = new \Core\Controllers\CmsPages($render, $csrf);
    $obj->showLogin($request, $response);
    return $response;
});

$app->post('/cms/login', function (Request $request, Response $response) {
    $obj = new \Core\Controllers\CmsPages();
    return $obj->loginUser($request, $response);
});