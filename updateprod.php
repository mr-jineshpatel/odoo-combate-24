<?php

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    
  
    $data = json_decode(file_get_contents('php://input'), true);
    
    echo json_encode(array('message' => 'POST request handled successfully'));
    exit();
}

http_response_code(405); 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode(array('message' => 'Method Not Allowed'));
?>
