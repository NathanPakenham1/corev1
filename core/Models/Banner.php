<?php

namespace Core\Models;

use Core\Config\Connection;

class Banner
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function getBanner(): ?array
    {
        $db = $this->db->getConnection();
        $stmt = $db->prepare("SELECT * FROM Banner");
        $stmt->execute();
        $result = $stmt->get_result();
        $banner = $result->fetch_assoc();

        return $banner;
    }

    public function updateBanner($bannertext)
    {
        $db = $this->db->getConnection();
        $stmt = $db->prepare('UPDATE Banner SET bannertext = ? WHERE id = 1');
        $stmt->bind_param('s', $bannertext);
        $stmt->execute();
        $stmt->close();
    }
}