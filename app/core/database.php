<?php

namespace App\Core;

class Database {

    public function connect()
    {
    $host     = 'localhost';
    $dbname   = 'mvc';
    $username = 'root';
    $password = '';
    $charset  = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    $options = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];

    try {
    $database = new \PDO($dsn, $username, $password, $options);
    return $database;
    } catch (\PDOException $e) {
    throw new \Exception('Erro de conexão DB: ' . $e->getMessage());
    }

    return false;
    }


}