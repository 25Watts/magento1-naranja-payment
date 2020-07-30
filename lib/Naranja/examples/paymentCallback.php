<?php
// Importamos el SDK y las clases
require_once(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../checkoutApi.php');

// Instanciamos la clase de NaranjaCheckout
$naranjaCheckout = new NaranjaCheckout('CLIENT_ID','CLIENT_SECRET','ENVIROMENT');

// Las notificaciones sobre el pago llegan via POST
// Por lo tanto solo nos preocupamos por ese verbo http
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // El id del pago llega via request body
    $body = json_decode(file_get_contents('php://input'), true);

    // Solicitamos los detalles del pago
    $payment = $naranjaCheckout->getPayment($body['id']);

    // Mostrar los detalles del pago
    $payment = $payment->__toString();
    print_r($payment);
}
?>