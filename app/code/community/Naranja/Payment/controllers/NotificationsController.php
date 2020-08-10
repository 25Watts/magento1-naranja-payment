<?php

class Naranja_Payment_NotificationsController
extends Mage_Core_Controller_Front_Action
{
    protected $_helper;
    protected $_order;
    protected $_payment;

    const LOG_FILE = 'naranja-notification.log';

    public function indexAction()
    {
    }

    public function webcheckoutAction()
    {
        try {
            $this->_requestData = json_decode(file_get_contents('php://input'));
            $this->_helper = Mage::helper('naranja_payment/data');

            if (empty($this->_requestData->payment_id) || empty($this->_requestData->external_payment_id)) {
                Mage::throwException($this->_helper->__('Error Payment notification is expected'));
            }

            $paymentId = $this->_requestData->payment_id;
            $this->_order = Mage::getModel('sales/order')->loadByIncrementId($this->_requestData->external_payment_id);

            if (empty($this->_order) || empty($this->_order->getId())) {
                Mage::throwException($this->_helper->__('Error Order Not Found in Magento: ') . $this->_requestData->external_payment_id);
            }

            if ($this->_order->getState() == Mage_Sales_Model_Order::STATE_CANCELED) {
                Mage::throwException($this->_helper->__('Order already canceled: ') . $this->_requestData->external_payment_id);
            }

            $this->_payment = $this->_helper->getApiInstance()->getPayment($paymentId);

            if (empty($this->_payment)) {
                Mage::throwException($this->_helper->__('Error Payment not found in Naranja'));
            }

            $this->_updatePaymentInfo($this->_order, $this->_payment);

            $this->_helper->log(
                sprintf(
                    "Payment id: %s \\n %s",
                    $paymentId,
                    $this->_payment->__toString()
                )
            );

            switch ($this->_requestData->status) {
                case 'APPROVED':
                    $message = $this->_helper->__('Transaction automatically approved by Naranja');

                    $this->_order
                        ->setState(Mage_Sales_Model_Order::STATE_PROCESSING)
                        ->setStatus(Mage_Sales_Model_Order::STATE_PROCESSING)
                        ->addStatusToHistory(Mage_Sales_Model_Order::STATE_PROCESSING, $message)->save();

                    $this->_createInvoice($this->_order, $message);
                    break;

                default:
                    $message = $this->_helper->__('Transaction automatically denied by Naranja');

                    $this->_order
                        ->setState(Mage_Sales_Model_Order::STATE_PENDING_PAYMENT)
                        ->setStatus(Mage_Sales_Model_Order::STATE_PENDING_PAYMENT)
                        ->addStatusToHistory(Mage_Sales_Model_Order::STATE_PENDING_PAYMENT, $message)->save();
                    break;
            }
        } catch (Exception $e) {
            $this->_setResponse($e->getMessage(), 500);
        }
    }

    protected function _responseLog()
    {
        $this->_helper->log("Http code", self::LOG_FILE, $this->getResponse()->getHttpResponseCode());
    }

    protected function _setResponse($body, $code)
    {
        $this->getResponse()->setBody($body);
        $this->getResponse()->setHttpResponseCode($code);
    }

    protected function _createInvoice($order, $message)
    {

        if (!$order->hasInvoices()) {
            $invoice = $order->prepareInvoice();
            $invoice->register();
            $invoice->pay();
            Mage::getModel('core/resource_transaction')
                ->addObject($invoice)
                ->addObject($invoice->getOrder())
                ->save();

            $invoice->sendEmail(true, $message);
        }
    }

    /**
     * @param $order
     * @param $data
     */
    private function _updatePaymentInfo($order, $data)
    {
        $paymentOrder = $order->getPayment();

        $additionalFields = [
            'id',
            'payment_type',
            'status',
            'external_payment_id',
            'date_created'
        ];

        foreach ($additionalFields as $field) {
            if (isset($data[$field])) {
                $paymentOrder->setAdditionalInformation($field, $data[$field]);
            }
        }

        if (isset($data['transactions'][0]['installments_plan']['installments'])) {
            $paymentOrder->setAdditionalInformation('installments', $data['transactions'][0]['installments_plan']['installments']);
        }

        $paymentOrder->save();
    }
}
