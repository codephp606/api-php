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
    $id = $data['id']; // product id
    unset($data['id']); // حذف آیدی از بقیه داده ها


    $setParts = []; // use in sql
    $params = [];

    if (!empty($id) && !empty($data)) {

        foreach ($data as $column => $value) {
            $setParts[] = "`$column` = :$column";
            $params[$column] = $value;
        }

        $params['id'] = $id;

        $sql = "UPDATE products SET " . implode(", ", $setParts) . " WHERE id = :id";
        $stmt = $conn->prepare($sql);
        
        if ($stmt->execute($params)) {
            echo json_encode(['status' => 'success', 'message' => 'product edit completed successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'edit error']);
        }

    } else {
        echo json_encode(['status' => 'error', 'message' => 'id or data not recive']);
    }

} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
