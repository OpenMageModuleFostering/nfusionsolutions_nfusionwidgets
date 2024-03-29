<?php
	
class Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "nfusionwidgets";
				$this->_controller = "adminhtml_nfusionwidgets";
				$this->_updateButton("save", "label", Mage::helper("nfusionwidgets")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("nfusionwidgets")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("nfusionwidgets")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("nfusionwidgets_data") && Mage::registry("nfusionwidgets_data")->getId() ){

				    return Mage::helper("nfusionwidgets")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("nfusionwidgets_data")->getId()));

				} 
				else{

				     return Mage::helper("nfusionwidgets")->__("Add Item");

				}
		}
}