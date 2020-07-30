<?php

class Naranja_Payment_Model_Observer
{
    public function paymentMethodIsActive(Varien_Event_Observer $observer)
    {
        $event           = $observer->getEvent();
        $method          = $event->getMethodInstance();
        $result          = $event->getResult();
        $currencyCode    = Mage::app()->getStore()->getCurrentCurrencyCode();
        $code = $method->getCode();

        if ($this->isAdmin()) {
            if ($code == 'naranja_webcheckout') {

                $result->isAvailable = false;
            }
        }
    }

    public function isAdmin()
    {
        if (Mage::app()->getStore()->isAdmin()) {
            return true;
        }

        if (Mage::getDesign()->getArea() == 'adminhtml') {
            return true;
        }

        return false;
    }
}
