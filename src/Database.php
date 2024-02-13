<?php
namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $connection;

    public function __construct()
    {
        $host = "localhost";
        $database = "phonebook";
        $username = "root";
        $password = "";

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        }catch (PDOException $e){
            echo "Ошибка подключения к базе данных" . $e->getMessage();
        }
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

}