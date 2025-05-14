<?php
ini_set('display_errors', 0);
error_reporting(0);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Content-Type: application/json');
include "config.php";


$method = $_SERVER['REQUEST_METHOD'];

if ($method === "OPTIONS") {
    http_response_code(200);
    exit();
}

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $name = $data['name'];
    $quantity = $data['quantity'];
    $type = $data['type'];
    $isFavorite = $data['isFavorite'];
    $brand = $data['brand'];
    $price = $data['price'];
    $stars = $data['stars'];
    $Model = $data['Model'];
    $processor = $data['processor'];
    $Os = $data['Os'];
    $ram = $data['ram'];
    $graphics = $data['graphics'];
    $display = $data['display'];
    $Memory_Storage = $data['Memory_Storage'];
    $RefreshRate = $data['RefreshRate'];
    $color = $data['color'];
    $count = $data['count'];
    $imgSrc = $data['imgSrc'];


    $stmt = $conn->prepare("INSERT INTO products (name, quantity, type, isFavorite, brand,
    price, stars, Model, processor, Os, ram, graphics, display, Memory_Storage, RefreshRate,
    color, count, imgSrc) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


    $stmt->execute([
        $name,
        $quantity,
        $type,
        $isFavorite,
        $brand,
        $price,
        $stars,
        $Model,
        $processor,
        $Os,
        $ram,
        $graphics,
        $display,
        $Memory_Storage,
        $RefreshRate,
        $color,
        $count,
        $imgSrc
    ]);


    echo json_encode([
        'status' => 'ok',
        'message' => 'Product added successfully'
    ]);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
