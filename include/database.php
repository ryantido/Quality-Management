<?php
$hostname = "localhost";
$username = "root";
$password = "Mervie12@";
try {
    $connection = new PDO("mysql:host=$hostname;dbname=contacts", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}