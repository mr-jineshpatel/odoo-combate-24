<?php

$orderId = $_POST['orderId'] ?? '12345';
$amount = $_POST['amount'] ?? '10.00';
$customerName = $_POST['customerName'] ?? 'John Doe';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <h1>Thank You for Your Purchase!</h1>
    <p>Your payment was successful.</p>
    
    <!-- Provide a download link for the invoice -->
    <p>Download your <a href="invoice.pdf" download>invoice</a></p>
</body>
</html>
