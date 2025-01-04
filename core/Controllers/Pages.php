<?php

namespace core\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Core\Controllers\BaseController;

class Pages extends BaseController
{
    public function home(Request $request, Response $response): Response
    {
        $viewData = [
            'key1' => 'value1',
            'key2' => 'value2'
        ];

        return $this->render($request, $response, 'Home.php', $viewData);
    }

    public function notFound(Request $request, Response $response): Response
    {
        $viewData = [
            'key1' => 'value1',
            'key2' => 'value2'
        ];

        return $this->render($request, $response, '404.php', $viewData);
    }
}