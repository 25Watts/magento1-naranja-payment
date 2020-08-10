<?php

class Naranja_Payment_PayController
    extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        try {
            $payment = Mage::getModel('naranja_payment/webcheckout_payment');
            $paymentRequest = $payment->createPaymentRequest();

            return $this->_redirectUrl($paymentRequest['checkout_url']);
        } catch (Exception $e) {
            Mage::helper('naranja_payment')->log("ERROR CONTROLLER WEBCHECKOUT PAY: " . $e->getMessage());

            return $this->_redirectUrl(Naranja_Payment_Model_WebCheckout_Payment::CHECKOUT_FAILURE_URL);
        }
    }
}
