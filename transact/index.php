<?php 
$amount = $_GET['amount']; //Amount to transact 
$phonenuber = $_GET['phone']; // Phone number paying
$payacc  = 'ALFC';// Phone number paying
 $url = 'https://tinypesa.com/api/v1/express/initialize';
$data = array(
    'amount' => $amount,
    'msisdn' => $phonenuber,
    'account_no'=>$payacc
);
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'ApiKey: gDCc5OjrSxT' // Replace with your api key
 );
$info = http_build_query($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
$msg_resp = json_decode($resp);
 
if($msg_resp ->success == 'true'){     
    echo "PLEASE ENTER PIN";
}


?>
