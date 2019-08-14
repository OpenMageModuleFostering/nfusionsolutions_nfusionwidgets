<?php
class Nfusionsolutions_NfusionWidgets_Block_Nfusionwidgets
    extends Mage_Core_Block_Template
    implements Mage_Widget_Block_Interface
{

    protected function _toHtml()
    {
		$html ='';
        $html .= 'nfusionwidgets parameter1 = '.$this->getData('parameter1').'<br/>';
        $html .= 'nfusionwidgets parameter2 = '.$this->getData('parameter2').'<br/>';
        $html .= 'nfusionwidgets parameter3 = '.$this->getData('parameter3').'<br/>';
        $html .= 'nfusionwidgets parameter4 = '.$this->getData('parameter4').'<br/>';
        $html .= 'nfusionwidgets parameter5 = '.$this->getData('parameter5').'<br/>';
        return $html;
    }
	
}