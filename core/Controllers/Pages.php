<?php

namespace Core\Controllers;

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

    public function about(Request $request, Response $response): Response
    {
        $title = 'About Us';
        $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, enim, maiores! Asperiores reprehenderit rerum suscipit.';

        $viewData = [
            'title' => $title,
            'text' => $text,
        ];

        return $this->render($request, $response, 'About.php', $viewData);
    }

    public function contact(Request $request, Response $response): Response
    {
        global $config;

        $title = 'Contact Us';
        $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, enim, maiores! Asperiores reprehenderit rerum suscipit.';

        $viewData = [
            'title' => $title,
            'text' => $text,
            'config' => $config,
        ];

        return $this->render($request, $response, 'Contact.php', $viewData);
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