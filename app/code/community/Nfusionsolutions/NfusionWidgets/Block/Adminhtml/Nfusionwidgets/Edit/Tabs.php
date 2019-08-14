<?php
class Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("nfusionwidgets_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("nfusionwidgets")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("nfusionwidgets")->__("Item Information"),
				"title" => Mage::helper("nfusionwidgets")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("nfusionwidgets/adminhtml_nfusionwidgets_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
