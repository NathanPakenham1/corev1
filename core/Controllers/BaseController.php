<?php

namespace Core\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Csrf\Guard;
use Slim\Views\PhpRenderer;

abstract class BaseController
{
    protected $renderer;
    protected $csrf;

    public function __construct(PhpRenderer $renderer = null, Guard $csrf = null)
    {
        $this->renderer = $renderer;
        $this->csrf = $csrf;
    }

    protected function render(Request $request, Response $response, string $template, array $data = []): Response
    {
        if ($this->csrf) {
            $csrfNameKey = $this->csrf->getTokenNameKey();
            $csrfValueKey = $this->csrf->getTokenValueKey();
            $csrfName = $request->getAttribute($csrfNameKey);
            $csrfValue = $request->getAttribute($csrfValueKey);

            $data['csrf_name'] = $csrfName;
            $data['csrf_value'] = $csrfValue;
        }

        return $this->renderer->render($response, $template, $data);
    }
}