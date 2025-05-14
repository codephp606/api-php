<?php

$servername = "localhost";
$dbName = "mobodigi";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully <br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}