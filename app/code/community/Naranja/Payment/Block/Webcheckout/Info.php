<?php

class Naranja_Payment_Block_Webcheckout_Info
    extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('naranja_payment/webcheckout/info.phtml');
    }

    public function getInfoPayment()
    {
        $order_id = $this->getInfo()->getOrder()->getIncrementId();
        $info_payments = Mage::helper('naranja_payment')->getInfoPaymentByOrder($order_id);

        return $info_payments;
    }

    /**
     * Get instructions text from order payment
     * (or from config, if instructions are missed in payment)
     *
     * @return string
     */
    public function getInstructions()
    {
        if (is_null($this->_instructions)) {
            $this->_instructions = $this->getInfo()->getAdditionalInformation('instructions');
            if(empty($this->_instructions)) {
                $this->_instructions = $this->getMethod()->getInstructions();
            }
        }
        return $this->_instructions;
    }
}
