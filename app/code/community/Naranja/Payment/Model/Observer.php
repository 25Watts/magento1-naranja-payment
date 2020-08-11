<?php

class Naranja_Payment_Model_Observer
{
    public function paymentMethodIsActive(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $method = $event->getMethodInstance();
        $result = $event->getResult();
        $code = $method->getCode();
        $groupId = Mage::getSingleton('customer/session')->getCustomerGroupId();
        $enabledCustomerGroupId = Mage::helper('naranja_payment/data')->getEnabledCustomerGroupId();

        if ($code == 'naranja_webcheckout') {
            if ($this->isAdmin() || $groupId != $enabledCustomerGroupId) {
                $result->isAvailable = false;
            } else {
                $result->isAvailable = true;
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
