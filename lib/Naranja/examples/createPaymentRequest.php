<?php
// Importamos el SDK y las clases
require_once(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../checkoutApi.php');

$naranjaCheckout = new NaranjaCheckout('CLIENT_ID','CLIENT_SECRET','ENVIROMENT');

// Definimos el primer producto
$product1 = new Naranja\CheckoutApi\Model\ProductItem();
$product1->setName('Veggies');
$product1->setDescription('Granja del sol');
$product1->setQuantity(2);

// Creamos un precio unitario
$unitPrice1 = new Naranja\CheckoutApi\Model\Amount();
$unitPrice1->setCurrency('ARS');
$unitPrice1->setValue('115');

// Y lo asignamos al primer producto
$product1->setUnitPrice($unitPrice1);

// Definimos el segundo producto
$product2 = new Naranja\CheckoutApi\Model\ProductItem();
$product2->setName('Croquetas');
$product2->setDescription('Granja del sol'); 
$product2->setQuantity(1);

// Creamos y asignamos el precio unitario del segundo
$unitPrice2 = new Naranja\CheckoutApi\Model\Amount();
$unitPrice2->setCurrency('ARS');
$unitPrice2->setValue('115');

$product2->setUnitPrice($unitPrice2); // Notar que el precio como string es intencional

// Definimos el objeto transaccion
$transaction = new Naranja\CheckoutApi\Model\Transaction();

// Definimos el Amount
$amountTransaction = new Naranja\CheckoutApi\Model\Amount();
$amountTransaction->setCurrency('ARS'); 
$amountTransaction->setValue('345');

// Agregamos el objeto amount a la transaccion
$transaction->setAmount($amountTransaction);
$transaction->setSoftDescriptor('GOFRIZ CONGELADOS');
$transaction->setProducts([$product1, $product2]);

// Generamos el payment request
$paymentRequest = new Naranja\CheckoutApi\Model\PaymentRequest();
$paymentRequest->setPaymentType('web_checkout');
$paymentRequest->setAuthorizationMode('SALE');
$paymentRequest->setExternalPaymentId('123456789');
$paymentRequest->setTransactions([$transaction]);

// Definimos el Requests creation redirect
$requestsCreationRedirect = new Naranja\CheckoutApi\Model\RequestCreationRedirect();
$requestsCreationRedirect->setSuccessUrl('https://gofriz.com.ar/success');
$requestsCreationRedirect->setFailureUrl('https://gofriz.com.ar/failure');

// Agregamos el requests redirect al paymenRequests
$paymentRequest->setRequestCreationRedirect($requestsCreationRedirect);
$paymentRequest->setCallbackUrl('https://gofriz.com.ar/notification');

// Ejecutamos el metodo
$response = $naranjaCheckout->createPaymentRequest($paymentRequest);

// Transformamos el JSON a datos nativo de PHP
$response = json_decode($response, true);

print_r($response['checkout_url']);