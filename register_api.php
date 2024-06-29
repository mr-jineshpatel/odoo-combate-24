<?php
// Database configuration
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "tsub";

require 'C:/xampp/htdocs/TSUB/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/TSUB/PHPMailer/src/SMTP.php';
require 'C:/xampp/htdocs/TSUB/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePhoneNumber($phone)
{
    return preg_match("/^\d{10}$/", $phone);
}

function emailOrContactExists($email, $contact)
{
    global $conn;
    $sql = "SELECT * FROM register WHERE email = '$email' OR contact = '$contact'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
}

if (isset($_POST['submit'])) {
    $firstname = sanitizeInput($_POST['firstname']);
    $lastname = sanitizeInput($_POST['lastname']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);
    $contact = sanitizeInput($_POST['contact']);
    $addressline1 = sanitizeInput($_POST['addressline1']);
    $addressline2 = isset($_POST['addressline2']) ? sanitizeInput($_POST['addressline2']) : "";
    $city = sanitizeInput($_POST['city']);
    $state = sanitizeInput($_POST['state']);
    $landmark = sanitizeInput($_POST['landmark']);
    $pincode = sanitizeInput($_POST['pincode']);

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($contact) || empty($addressline1) || empty($city) || empty($state) || empty($landmark) || empty($pincode)) {
    } elseif (!validateEmail($email)) {
    } elseif (!validatePhoneNumber($contact)) {
    } elseif (emailOrContactExists($email, $contact)) {
    } else {
        $sql = "INSERT INTO register (firstname, lastname, email, password, contact, addressline1, addressline2, city, state, landmark, pincode) VALUES ('$firstname', '$lastname', '$email', '$password', '$contact', '$addressline1', '$addressline2', '$city', '$state', '$landmark', '$pincode')";

        if (mysqli_query($conn, $sql)) {
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'jinesh2105@gmail.com'; 
                $mail->Password = ''; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->SMTPDebug=2;
                $mail->setFrom('jinesh2105@gmail.com', 'Jinesh Patel');
                $mail->addAddress($email, $firstname . ' ' . $lastname);
                $mail->Subject = 'Registration Confirmation';
                $mail->Body = "Dear $firstname $lastname,\n\nThank you for registering with us. Your registration was successful.\n\nBest regards,\nThe Team";

                $mail->send();
                echo 'Email sent successfully';
                header("Location: login.php");
                exit();
            } catch (Exception $e) {
                echo "Error sending email: {$mail->ErrorInfo}";
            }
        } else {
            header("Location: register_form.php");
            exit();
        }
    }
}

// Close connection
$conn->close();
?>
