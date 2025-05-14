<?php
ini_set('display_errors', 0);
error_reporting(0);

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
include "config.php";


$method = $_SERVER['REQUEST_METHOD'];

// GET ID FROM URL
$Request_Url = $_SERVER['REQUEST_URI'];
$cleanUrl = trim($Request_Url, '/');
$parts = explode('/', $cleanUrl);
$id = $parts[3]; // بستگی به طول آدرس درخواست


// GET PRODUCTS
$sql = "SELECT * FROM products";
$products = $conn->query($sql)->fetchAll();


if ($method === "GET") {
    if ($id) {
        $product = array_filter($products, fn($item) => $item['id'] == $id);
        if ($product) {
           echo json_encode(['product' => $product]);
        } else {
            echo json_encode(['status' => 404 , 'message' => 'Product not found']);
        }
    } else {
        echo json_encode(['all products' => $products]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
