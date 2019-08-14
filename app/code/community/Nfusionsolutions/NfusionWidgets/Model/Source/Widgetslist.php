<?php

class Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist
{
   /* NEW! Static variables to keep a cache of our data.
      No point in going to the database more than once */
   static $_all_options_cache = null;
   static $_label_to_value_cache = null;
   public function toOptionArray()
   {
       /* NEW! Check if we have a cached version of our data */
       if(is_null(Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_all_options_cache))
       {
           /* @var $collection Envalo_Warranty_Model_Resource_Warranty_Collection  */
           $collection = Mage::getModel('nfusionwidgets/nfusionwidgets')
               ->getCollection();
           $collection->addFieldToSelect(array('id','name'));
           $collection->load();
           $result = array();
           $map_result = array(); /* NEW! Used to cache the mapping of value=>text */
           /* @var $warranty Envalo_Warranty_Model_Warranty  */
           foreach($collection as $warranty)
           {
               $result[] = array(
                   'value' => $warranty->getId(),
                   'label' => $warranty->getName()
               );
               $map_result[$warranty->getId()] = $warranty->getName();
           }
           /* NEW! Store a copy of our data */
           Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_all_options_cache = $result;
           Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_label_to_value_cache = $map_result;
       }

       return Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_all_options_cache;
   }

   public function getOptionText($value)
   {
       /* If this is null, then nobody has called getAllOptions() yet. */
       if(is_null(Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_label_to_value_cache))
       {
           $this->getAllOptions();
       }

       if(isset(Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_label_to_value_cache[$value]))
       {
           return Nfusionsolutions_NfusionWidgets_Model_Source_Widgetslist::$_label_to_value_cache[$value];
       }
       return 'No Warranty Available';
   }
}
