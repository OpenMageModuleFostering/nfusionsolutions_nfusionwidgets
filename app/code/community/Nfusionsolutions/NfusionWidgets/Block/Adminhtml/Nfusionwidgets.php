<?php


class Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_nfusionwidgets";
	$this->_blockGroup = "nfusionwidgets";
	$this->_headerText = Mage::helper("nfusionwidgets")->__("nFusion Widgets Settings");
	$this->_addButtonLabel = Mage::helper("nfusionwidgets")->__("Add New Item");
	parent::__construct();
	
	}

}