<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 18/01/2019
 * Time: 02:59
 */

class Dbc
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $charset;

    public function connect()
    {
        $this->host = "";
        $this->username = "";
        $this->password = "";
        $this->database = "";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->connect();
    }
}
