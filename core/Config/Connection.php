<?php

namespace Core\Config;
use mysqli;

class Connection
{
    private $host = '127.0.0.1';
    private $user = 'root';
    private $pass = 'root';
    private $database = 'corev1';
    private $port = 8889;
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database, $this->port);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}


