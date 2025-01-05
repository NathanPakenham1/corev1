<?php

namespace Core\Controllers;

class Banner extends BaseController
{
    public static function getBanner() {
        $bannerModel = new \Core\Models\Banner();
        $banner = $bannerModel->getBanner();

        return "<div class='banner'>". $banner['bannertext'] ."</div>";
    }
}