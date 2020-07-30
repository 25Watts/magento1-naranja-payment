<?php

class Naranja_Payment_Helper_Data
extends Mage_Payment_Helper_Data
{

    const XML_PATH_CLIENT_ID = 'payment/naranja_payment/client_id';
    const XML_PATH_CLIENT_SECRET = 'payment/naranja_payment/client_secret';
    const XML_PATH_ENVIRONMENT = 'payment/naranja_payment/environment';

    protected $_apiInstance;

    public function log($message, $file = "naranja.log", $array = null)
    {
        $actionLog = Mage::getStoreConfig('payment/naranja_payment/logs');

        if ($actionLog) {
            if (!is_null($array)) {
                $message .= " - " . json_encode($array);
            }

            Mage::log($message, null, $file, $actionLog);
        }
    }

    public function getApiInstance()
    {

        if (is_null($this->_apiInstance)) {
            $clientId = Mage::getStoreConfig(self::XML_PATH_CLIENT_ID);
            $clientSecret = Mage::getStoreConfig(self::XML_PATH_CLIENT_SECRET);
            $environment = Mage::getStoreConfig(self::XML_PATH_ENVIRONMENT);

            $this->_apiInstance = new Naranja_NaranjaCheckout($clientId, $clientSecret, $environment);
        }

        return $this->_apiInstance;
    }

    public function getVersionModule()
    {
        return (string) Mage::getConfig()->getModuleConfig("Naranja_Payment")->version;
    }

    public function getInfoPaymentByOrder($orderId)
    {
        $order = Mage::getModel('sales/order')->loadByIncrementId($orderId);
        $payment = $order->getPayment();
        $infoPayments = array();
        $fields = array(
            array("field" => "cardholderName", "title" => "Card Holder Name: %s"),
            array("field" => "trunc_card", "title" => "Card Number: %s"),
            array("field" => "payment_method", "title" => "Payment Method: %s"),
            array("field" => "expiration_date", "title" => "Expiration Date: %s"),
            array("field" => "installments", "title" => "Installments: %s"),
            array("field" => "statement_descriptor", "title" => "Statement Descriptor: %s"),
            array("field" => "payment_id", "title" => "Payment id (MercadoPago): %s"),
            array("field" => "status", "title" => "Payment Status: %s"),
            array("field" => "status_detail", "title" => "Payment Detail: %s"),
            array("field" => "activation_uri", "title" => "Generate Ticket"),
            array("field" => "payment_id_detail", "title" => "Mercado Pago Payment Id: %s")

        );

        foreach ($fields as $field) {
            if ($payment->getAdditionalInformation($field['field']) != "") {
                $text = $this->__($field['title'], $this->__($payment->getAdditionalInformation($field['field'])));
                $infoPayments[$field['field']] = array(
                    "text"  => $text,
                    "value" => $this->__($payment->getAdditionalInformation($field['field']))
                );
            }
        }

        if ($payment->getAdditionalInformation('payer_identification_type') != "") {
            $text = $this->__($payment->getAdditionalInformation('payer_identification_type') . ': ' . $payment->getAdditionalInformation('payer_identification_number'));
            $infoPayments[$payment->getAdditionalInformation('payer_identification_type')] = array(
                "text"  => $text,
                "value" => $payment->getAdditionalInformation('payer_identification_number')
            );
        }

        return $infoPayments;
    }
}
