<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table nfusion_widgets(id int not null auto_increment, name varchar(100),chart_code text,type varchar(20),chart_width int,primary key(id));

		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 