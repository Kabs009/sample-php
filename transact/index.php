<?php
$amount = $_POST['amount']; //Amount to transact 
$phonenuber = $_POST['phone']; // Phone number paying
$payacc  = 'ALFC';// Phone number paying
$url = 'https://tinypesa.com/api/v1/express/initialize';
$data = array(
    'amount' => $amount,
    'msisdn' => $phonenuber,
    'account_no' => $payacc
);
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'ApiKey: gDCc5OjrSxT' // Replace with your api key
 );
$options = array(
        'http' => array(
            'header'  => $headers,
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $resp = file_get_contents($url, false, $context);
    var_dump($resp);

?>
