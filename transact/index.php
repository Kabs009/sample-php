<?php 
$amount = $_GET['amount']; //Amount to transact 
$phonenumber = $_GET['phone']; // Phone number paying
$payacc  = 'ALFC';// Phone number paying
$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ZoWuGfEquyA4wcxhpBAsAoDstozr',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, {
    "BusinessShortCode": 174379,
    "Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjExMDAxMTUzMzEw",
    "Timestamp": "20211001153310",
    "TransactionType": "CustomerPayBillOnline",
    "Amount": $amount,
    "PartyA": $phonenumber,
    "PartyB": 174379,
    "PhoneNumber": $phonenumber,
    "CallBackURL": "https://mydomain.com/path",
    "AccountReference": "CompanyXLTD",
    "TransactionDesc": $payacc 
  });
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response     = curl_exec($ch);
curl_close($ch);
echo $response;
}


?>
