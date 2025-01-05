<?php

namespace Core\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

class AuthMiddleware
{
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        if (!isset($_SESSION['id'])) {
            $response = new \Slim\Psr7\Response();
            return $response->withHeader('location', '/cms')->withStatus(302);
        }

        return $handler->handle($request);
    }
}