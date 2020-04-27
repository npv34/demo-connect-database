<?php

require '../config.php';
class DBConnect
{
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO('mysql:host=localhost;dbname=car_manager', $this->username, $this->password);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return $conn;
    }
}