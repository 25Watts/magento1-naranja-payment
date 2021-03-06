<?php

class Naranja_Payment_Helper_Data
extends Mage_Payment_Helper_Data
{

    const XML_PATH_CLIENT_ID = 'payment/naranja_payment/client_id';
    const XML_PATH_CLIENT_SECRET = 'payment/naranja_payment/client_secret';
    const XML_PATH_ENVIRONMENT = 'payment/naranja_payment/environment';
    const XML_PATH_CALLBACK_URL = 'payment/naranja_payment/callback_url';
    const XML_PATH_ENABLED_CUSTOMER_GROUP = 'payment/naranja_payment/enabled_customer_group';

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
            array("field" => "installments", "title" => "Installments: %s"),
            array("field" => "id", "title" => "Payment id: %s"),
            array("field" => "status", "title" => "Payment Status: %s"),
            array("field" => "date_created", "title" => "Created at: %s"),
            array("field" => "payment_type", "title" => "Payment type: %s")
        );

        foreach ($fields as $field) {
            if ($payment->getAdditionalInformation($field['field']) != "") {
                $text = $this->__($field['title'], $payment->getAdditionalInformation($field['field']));
                $infoPayments[$field['field']] = array(
                    "text"  => $text,
                    "value" => $payment->getAdditionalInformation($field['field'])
                );
            }
        }

        return $infoPayments;
    }

    public function getCallbackUrl()
    {
        $callbackUrl = Mage::getStoreConfig(self::XML_PATH_CALLBACK_URL);

        if (empty($callbackUrl))
            return Mage::getUrl('naranja_payment/notifications/webcheckout');

        return trim($callbackUrl);
    }

    public function getEnabledCustomerGroupId()
    {
        $customerGroupId = Mage::getStoreConfig(self::XML_PATH_ENABLED_CUSTOMER_GROUP);

        return $customerGroupId;
    }
}
