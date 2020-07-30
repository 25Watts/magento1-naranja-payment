<?php

class Naranja_Payment_Model_Webcheckout_Payment
extends Mage_Payment_Model_Method_Abstract
{
    protected $_formBlockType = 'naranja_payment/webcheckout_form';
    protected $_infoBlockType = 'naranja_payment/webcheckout_info';

    protected $_code = 'naranja_webcheckout';

    protected $_isGateway = true;
    protected $_canOrder = true;
    protected $_canAuthorize = true;
    protected $_canCapture = true;
    protected $_canCapturePartial = true;
    protected $_canRefund = true;
    protected $_canRefundInvoicePartial = true;
    protected $_canVoid = true;
    protected $_canFetchTransactionInfo = true;
    protected $_canCreateBillingAgreement = true;
    protected $_canReviewPayment = true;

    const LOG_FILE = 'naranja-webcheckout.log';
    const CHECKOUT_FAILURE_URL = 'checkout/onepage/failure';
    const CHECKOUT_SUCCESS_URL = 'checkout/onepage/success';

    public function createPaymentRequest()
    {
        try {
            $apiInstance = Mage::helper('naranja_payment/data')->getApiInstance();
            $orderIncrementId = Mage::getSingleton('checkout/session')->getLastRealOrderId();
            $order = Mage::getModel('sales/order')->loadByIncrementId($orderIncrementId);
            $customer = Mage::getSingleton('customer/session')->getCustomer();
            $productItems = [];

            // Definimos el objeto transaccion
            $transaction = new \Naranja\CheckoutApi\Model\Transaction();

            // Definimos el Amount
            $amountTransaction = new \Naranja\CheckoutApi\Model\Amount();
            $amountTransaction->setCurrency('ARS');
            $amountTransaction->setValue((string)number_format($order->getBaseGrandTotal(), 2, '.', ''));

            // Agregamos el objeto amount a la transaccion
            $transaction->setAmount($amountTransaction);
            $transaction->setSoftDescriptor('GOFRIZ CONGELADOS');

            foreach ($order->getAllVisibleItems() as $item) {
                $product = $item->getProduct();
                //$image = $this->_helperImage->init($product, 'image');
                //$image->getUrl();

                // Set product to checkout api
                $productItem = new \Naranja\CheckoutApi\Model\ProductItem();
                $productItem->setName($product->getName());
                //$productItem->setDescription('');
                $productItem->setQuantity((int)number_format($item->getQtyOrdered(), 0, '.', ''));

                // Set unit_price
                $unitPrice = new \Naranja\CheckoutApi\Model\Amount();
                $unitPrice->setCurrency('ARS');
                $unitPrice->setValue((string)number_format($item->getPrice(), 2, '.', ''));

                // Add el unitPrice to product
                $productItem->setUnitPrice($unitPrice);

                $productItems[] = $productItem;
            }

            // add shipping item
            $shippingItem = new \Naranja\CheckoutApi\Model\ProductItem();
            $shippingItem->setName($order->getShippingDescription());
            //$shippingItem->setDescription('');
            $shippingItem->setQuantity(1);

            // Set unit_price
            $unitPrice = new \Naranja\CheckoutApi\Model\Amount();
            $unitPrice->setCurrency('ARS');
            $unitPrice->setValue((string)number_format($order->getBaseShippingAmount(), 2, '.', ''));

            // Add el unitPrice to product
            $shippingItem->setUnitPrice($unitPrice);

            $productItems[] = $shippingItem;

            // add product to transaction
            $transaction->setProducts($productItems);

            // Generamos el payment request
            $paymentRequest = new \Naranja\CheckoutApi\Model\PaymentRequest();
            $paymentRequest->setPaymentType('web_checkout');
            $paymentRequest->setAuthorizationMode('SALE');
            $paymentRequest->setExternalPaymentId($order->getIncrementId());
            $paymentRequest->setTransactions([$transaction]);

            // Definimos el Requests creation redirect
            $requestsCreationRedirect = new \Naranja\CheckoutApi\Model\RequestCreationRedirect();
            $requestsCreationRedirect->setSuccessUrl(Mage::getUrl(self::CHECKOUT_SUCCESS_URL));
            $requestsCreationRedirect->setFailureUrl(Mage::getUrl(self::CHECKOUT_FAILURE_URL));

            // Agregamos el requests redirect al paymenRequests
            $paymentRequest->setRequestCreationRedirect($requestsCreationRedirect);
            $paymentRequest->setCallbackUrl(Mage::getUrl('naranja_payment/notifications/webcheckout'));

            // Ejecutamos el metodo
            $response = $apiInstance->createPaymentRequest($paymentRequest);
            $response = json_decode($response, true);

            return $response;
        } catch (Exception $e) {
            Mage::helper('naranja_payment/data')->log("ERROR CREATEPAYMENTREQUEST: " . $e->getMessage());

            return [];
        }
    }

    public function getOrderPlaceRedirectUrl()
    {
        return Mage::getUrl('naranja_payment/pay', array('_secure' => true));
    }

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }
}
