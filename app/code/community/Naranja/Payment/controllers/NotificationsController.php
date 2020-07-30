<?php

class Naranja_Payment_NotificationsController
extends Mage_Core_Controller_Front_Action
{

    protected $_requestData = array();
    protected $_merchantOrder = array();
    protected $_paymentData = array();
    protected $_helper;
    protected $_order;

    const LOG_FILE = 'naranja-notification.log';

    public function indexAction()
    {
    }

    public function webcheckoutAction()
    {
        $this->_requestData = $this->getRequest()->getParams();

        //notification received
        $this->_helper = Mage::helper('naranja');
        $this->_statusHelper = Mage::helper('naranja/statusUpdate');

        $this->_helper->log('Standard Received notification', self::LOG_FILE, $this->_requestData);
        if ($this->_emptyParams($this->_getRequestData('id'), $this->_getRequestData('topic'))) {

            return;
        }

        $this->_order = Mage::getModel('sales/order')->loadByIncrementId($this->_paymentData["external_reference"]);
        if ($this->_order->getStatus() == 'canceled') {
            $this->_helper->log(Naranja_Payment_Helper_Response::INFO_ORDER_CANCELED, self::LOG_FILE, $this->_requestData);
            $this->_setResponse(Naranja_Payment_Helper_Response::INFO_ORDER_CANCELED, Naranja_Payment_Helper_Response::HTTP_BAD_REQUEST);

            return;
        }
        $this->_statusHelper->setStatusUpdated($this->_paymentData, $this->_order);
        if (!$this->_orderExists()) {
            return;
        }
    }

    protected function _responseLog()
    {
        $this->_helper->log("Http code", self::LOG_FILE, $this->getResponse()->getHttpResponseCode());
    }

    protected function _isValidResponse($response)
    {
        return ($response['status'] == 200 || $response['status'] == 201);
    }

    protected function _setResponse($body, $code)
    {
        $this->getResponse()->setBody($body);
        $this->getResponse()->setHttpResponseCode($code);
    }
}
