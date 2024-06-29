<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "tsub";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        header("Location: darshil.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}

$conn->close();
?>