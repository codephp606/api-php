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
    $id = $data['id'];

    if (!empty($id) && !empty($data)) {

        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'product delete completed successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'delete error']);
        }

    } else {
        echo json_encode(['status' => 'error', 'message' => 'id not recive']);
    }

} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}