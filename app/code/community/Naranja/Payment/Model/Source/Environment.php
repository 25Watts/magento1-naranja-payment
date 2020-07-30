<?php

class Naranja_Payment_Model_Source_Environment
{
    public function toOptionArray()
    {
        $options = [
            ['value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')],
            ['value' => 'sandbox', 'label' => Mage::helper('adminhtml')->__('Sandbox')],
            ['value' => 'staging', 'label' => Mage::helper('adminhtml')->__('Staging')],
            ['value' => 'production', 'label' => Mage::helper('adminhtml')->__('Production')]
        ];

        return $options;
    }
}
