<?php

namespace Core\Models;

use Core\Config\Connection;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    public function login($name, $password)
    {
        $db = $this->db->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }
}