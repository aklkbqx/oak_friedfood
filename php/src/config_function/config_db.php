<?php
$servername = "oak_friedfood-mysql-1";
$username = "username";
$password = "password";
$database = "friedfood_db";
$port = "9906"; //3306

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database;", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
