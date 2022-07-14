<?php

$host = 'localhost';
$db = 'crud';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo 'Ошибка подключения к БД ' . $e->getMessage();
}