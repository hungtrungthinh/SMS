<?php
/**
 * SMS
 * 
 * @author Slava Yurthev
 */
class SY_SMS_Model_Resource_Variable extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('sy_sms/sy_sms_variables', 'id');
    }
}