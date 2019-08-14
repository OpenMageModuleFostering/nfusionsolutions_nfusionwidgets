<?php
class Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("nfusionwidgets_form", array("legend"=>Mage::helper("nfusionwidgets")->__("Item information")));

				
						$fieldset->addField("name", "text", array(
						"label" => Mage::helper("nfusionwidgets")->__("Widget Name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "name",
						));
					
						$fieldset->addField("chart_code", "textarea", array(
						"label" => Mage::helper("nfusionwidgets")->__("Widget URL"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "chart_code",
						));
									
						/*$fieldset->addField('type', 'select', array(
						'label'     => Mage::helper('nfusionwidgets')->__('Chart Type'),
						'values'   => Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid::getValueArray3(),
						'name' => 'type',					
						"class" => "required-entry",
						"required" => true,
						));
						$fieldset->addField("chart_width", "text", array(
						"label" => Mage::helper("nfusionwidgets")->__("Width"),
						"name" => "chart_width",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('nfusionwidgets')->__('Status'),
						'values'   => Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid::getValueArray5(),
						'name' => 'status',					
						"class" => "required-entry",
						"required" => true,
						));*/

				if (Mage::getSingleton("adminhtml/session")->getNfusionwidgetsData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getNfusionwidgetsData());
					Mage::getSingleton("adminhtml/session")->setNfusionwidgetsData(null);
				} 
				elseif(Mage::registry("nfusionwidgets_data")) {
				    $form->setValues(Mage::registry("nfusionwidgets_data")->getData());
				}
				return parent::_prepareForm();
		}
}
