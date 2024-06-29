<?php
$clientId = 'YOUR_PAYPAL_CLIENT_ID';
$clientSecret = 'YOUR_PAYPAL_CLIENT_SECRET';

$apiBaseUrl = 'https://api.sandbox.paypal.com';
$tokenEndpoint = '/v1/oauth2/token';
$ordersEndpoint = '/v2/checkout/orders';

function getAccessToken($clientId, $clientSecret) {
    global $apiBaseUrl, $tokenEndpoint;
    
    $credentials = base64_encode("$clientId:$clientSecret");
    $headers = array(
        'Accept: application/json',
        'Accept-Language: en_US',
        'Authorization: Basic ' . $credentials
    );

    $postData = 'grant_type=client_credentials';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiBaseUrl . $tokenEndpoint);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $jsonResponse = json_decode($response, true);
    return $jsonResponse['access_token'];
}

function createOrder($accessToken, $amount) {
    global $apiBaseUrl, $ordersEndpoint;

    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken
    );

    $postData = json_encode(array(
        'intent' => 'CAPTURE',
        'purchase_units' => array(array(
            'amount' => array(
                'currency_code' => 'USD',
                'value' => $amount
            )
        ))
    ));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiBaseUrl . $ordersEndpoint);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

try {
    $accessToken = getAccessToken($clientId, $clientSecret);

    $order = createOrder($accessToken, '10.00'); 

    if ($order && isset($order['id'])) {
        header("Location: {$order['links'][1]['href']}");
        exit;
    } else {
        echo "Failed to create order.";
    }
} catch (Exception $e) {
    echo 'Caught exception: ' . $e->getMessage();
}
?>
