<?php

namespace Core\Controllers\cms;

use Core\Controllers\BaseController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CmsBanner extends BaseController
{
    public function showCmsBanner(Request $request, Response $response) : Response
    {
        $bannerModel = new \Core\Models\Banner();
        $banner = $bannerModel->getBanner();

        $viewData = [
            'title' => 'Banner Page',
            'banner' => $banner
        ];

        return $this->render($request, $response, 'Cms/Banner.php', $viewData);
    }

    public function updateBanner(Request $request, Response $response) : Response
    {
        $postData = $request->getParsedBody();
        $bannertext = sanitizeString($postData['bannertext']);

        $bannerModel = new \Core\Models\Banner();
        $banner = $bannerModel->updateBanner($bannertext);

        return $response->withHeader('Location', '/cms/banner')->withStatus(302);
    }
}