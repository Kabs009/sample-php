<?php 
if (isset($_POST['amount']) || isset($_POST['phone'])){
$amount = $_POST['amount']; //Amount to transact 
$phonenuber = $_POST['phone']; // Phone number paying
$payacc  = 'ALFC';// Phone number paying
}
 echo "These are the variables. The amount is" . $amount ."and phone is" . $phone ."while the account is"  . $payacc;

?>
