<?php
class Nfusionsolutions_NfusionWidgets_Model_Mysql4_Nfusionwidgets extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("nfusionwidgets/nfusionwidgets", "id");
    }
}