<?php

/**
 * @category   Peexl
 * @package    Peexl
 * @copyright  Copyright (c) 2012 Peexl Web Development (http://www.peexl.com)
 * @license    http://framework.zend.com/license/new-bsd    New BSD License
 * @version    1.0
 */
class Peexl_ProductDesigner_Block_Adminhtml_Font extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected $_addButtonLabel = 'Add New Font';
 
    public function __construct()
    {
        parent::__construct();
        $this->_controller = 'adminhtml_font';
        $this->_blockGroup = 'productdesigner';
        $this->_headerText = Mage::helper('productdesigner')->__('Fonts');
    }

}