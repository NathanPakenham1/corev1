<?php

namespace Core\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Core\Controllers\BaseController;

class CmsPages extends BaseController
{
    public function showLogin(Request $request, Response $response) : Response
    {
        if (isset($_SESSION['id'])) {
            // Redirect to the dashboard if logged in
            return $response->withHeader('Location', '/cms/dashboard')->withStatus(302);
        }

        $viewData = [
            'key1' => 'Login Page',
        ];

        return $this->render($request, $response, 'Login.php', $viewData);
    }

    public function showDashboard(Request $request, Response $response) : Response
    {
        $viewData = [
            'key1' => 'Login Page',
        ];

        return $this->render($request, $response, 'Cms/Dashboard.php', $viewData);
    }

    public function loginUser(Request $request, Response $response) : Response
    {
        $postData = $request->getParsedBody();
        $name = sanitizeString($postData['name']);
        $password = sanitizeString($postData['password']);

        $userModel = new \Core\Models\User();
        $user = $userModel->login($name, $password);

        if ($user) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['isloggedin'] = true;

            // Redirect to the '/test' route or URL
            return $response->withHeader('Location', '/cms/dashboard')->withStatus(302);
        }

        // Redirect to the '/test' route or URL
        return $response->withHeader('Location', '/cms')->withStatus(302);
    }

    public function logoutUser(Request $request, Response $response) : Response
    {
        session_unset();
        session_destroy();
        session_regenerate_id(true);
        return $response->withHeader('Location', '/cms')->withStatus(302);
    }
}