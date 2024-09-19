<?php

class Product
{
    public function getData(): array
    {
        $dsn = 'mysql:host=localhost;dbname=auth_php';
        $pdo = new PDO($dsn, 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll();
    }
}