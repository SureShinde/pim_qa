<?php

/**
 * @category   Peexl
 * @package    Peexl
 * @copyright  Copyright (c) 2012 Peexl Web Development (http://www.peexl.com)
 * @license    http://framework.zend.com/license/new-bsd    New BSD License
 * @version    1.0
 */
class Peexl_ProductDesigner_Model_Resource_Option_Value extends Mage_Core_Model_Mysql4_Abstract {

    protected function _construct() {
        $this->_init('productdesigner/option_value', 'value_id');
    }

}