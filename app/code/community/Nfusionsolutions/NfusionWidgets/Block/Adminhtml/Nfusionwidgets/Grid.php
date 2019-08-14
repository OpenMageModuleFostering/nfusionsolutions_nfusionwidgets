<?php

class Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("nfusionwidgetsGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("nfusionwidgets/nfusionwidgets")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("nfusionwidgets")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("name", array(
				"header" => Mage::helper("nfusionwidgets")->__("Widget Name"),
				"index" => "name",
				));
				$this->addColumn("chart_code", array(
				"header" => Mage::helper("nfusionwidgets")->__("Widget Code"),
				"index" => "chart_code",
				));
						/*$this->addColumn('type', array(
						'header' => Mage::helper('nfusionwidgets')->__('Chart Type'),
						'index' => 'type',
						'type' => 'options',
						'options'=>Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid::getOptionArray3(),				
						));
						
				$this->addColumn("chart_width", array(
				"header" => Mage::helper("nfusionwidgets")->__("Width"),
				"index" => "chart_width",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('nfusionwidgets')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid::getOptionArray5(),				
						));*/
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_nfusionwidgets', array(
					 'label'=> Mage::helper('nfusionwidgets')->__('Remove Nfusionwidgets'),
					 'url'  => $this->getUrl('*/adminhtml_nfusionwidgets/massRemove'),
					 'confirm' => Mage::helper('nfusionwidgets')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray3()
		{
            $data_array=array(); 
			$data_array[0]='Accordion Chart';
			$data_array[1]='Scrolling Ticker';
			$data_array[2]='Large Historical Chart';
            return($data_array);
		}
		static public function getValueArray3()
		{
            $data_array=array();
			foreach(Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid::getOptionArray3() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray5()
		{
            $data_array=array(); 
			$data_array[0]='Disable';
			$data_array[1]='Enable';
            return($data_array);
		}
		static public function getValueArray5()
		{
            $data_array=array();
			foreach(Nfusionsolutions_NfusionWidgets_Block_Adminhtml_Nfusionwidgets_Grid::getOptionArray5() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}