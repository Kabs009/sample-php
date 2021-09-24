<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

header('Content-Type: text/plain');

$text = "Hello World";
if(isset($_GET['message']) && $_GET['message'] != '') {
	$text = htmlspecialchars($_GET['message']);
}

;
echo "This is great";
