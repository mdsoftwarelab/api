<?php

require_once __DIR__ . '/../env.php';

use Doctrine\DBAL\DriverManager as DriverManager;

class Database {
    private $conn;
    private $connectionParams;

    public function __construct()
    {
        $this->connectionParams = [
            'dbname' => DB_NAME,
            'user' => DB_USER,
            'password' => DB_PASSWORD,
            'host' => DB_HOST,
            'driver' => DB_DRIVER
        ];

        $this->conn = DriverManager::getConnection($this->connectionParams);
    }

    public function getConnection() {
        return $this->conn;
    }
}