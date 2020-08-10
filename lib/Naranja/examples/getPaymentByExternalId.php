<?php
// Importamos el SDK y las clases
require_once(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../checkoutApi.php');

$naranjaCheckout = new NaranjaCheckout('CLIENT_ID','CLIENT_SECRET','ENVIROMENT');

$response = $naranjaCheckout->getPaymentByExternalId('123456789');

print_r($response);
?>