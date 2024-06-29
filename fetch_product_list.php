<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM products";
$result = $conn->query($sql);

$productList = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productList[] = $row;
    }
} else {
    http_response_code(404);
    echo json_encode(array('message' => 'No products found.'));
    exit();
}

$conn->close();
echo json_encode($productList);
?>
