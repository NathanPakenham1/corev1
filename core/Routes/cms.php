<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/cms', function (Request $request, Response $response) use ($render, $csrf) {
    $obj = new \Core\Controllers\CmsPages($render, $csrf);
    return $obj->showLogin($request, $response);
});

//$app->get('/cms/dashboard', function (Request $request, Response $response) use ($render, $csrf) {
//    $obj = new \Core\Controllers\CmsPages($render, $csrf);
//    return $obj->showDashboard($request, $response);
//})->add(new \Core\Middleware\AuthMiddleware());

$app->get('/cms/{filename}', function ($request, $response, $args) use ($render, $csrf) {
    $filename = basename($args['filename']) . '.php';
    $path = dirname(__DIR__) . '/Views/Cms/' . $filename;

    if (file_exists($path)) {
        // Fetch CSRF token for the dynamic page
        $csrfNameKey = $csrf->getTokenNameKey();
        $csrfValueKey = $csrf->getTokenValueKey();
        $csrfName = $request->getAttribute($csrfNameKey);
        $csrfValue = $request->getAttribute($csrfValueKey);

        // Include CSRF tokens and render the page
        $viewData = [
            'csrf_name' => $csrfName,
            'csrf_value' => $csrfValue,
        ];

        // Add additional data for specific page content if needed
        return $render->render($response, 'Cms/' . $filename, $viewData);  // Use $render directly
    } else {
        return $response->withStatus(404)->write('Page not found');
    }
});


$app->post('/cms/login', function (Request $request, Response $response) {
    $obj = new \Core\Controllers\CmsPages();
    return $obj->loginUser($request, $response);
});

$app->post('/cms/logout', function (Request $request, Response $response) {
    $obj = new \Core\Controllers\CmsPages();
    return $obj->logoutUser($request, $response);
});

// Banner Page
//
//$app->get('/cms/banner', function (Request $request, Response $response) use ($render, $csrf) {
//    $obj = new \Core\Controllers\cms\CmsBanner($render, $csrf);
//    return $obj->showCmsBanner($request, $response);
//})->add(new \Core\Middleware\AuthMiddleware());
//
//$app->patch('/cms/banner', function (Request $request, Response $response) {
//    $obj = new \Core\Controllers\cms\CmsBanner();
//    return $obj->updateBanner($request, $response);
//});
//
//
