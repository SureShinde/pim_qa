<?php
 
class Peexl_ProductDesigner_Block_Adminhtml_Graphics_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        if (Mage::getSingleton('adminhtml/session')->getGraphicsData())
        {
            $data = Mage::getSingleton('adminhtml/session')->getGraphicsData();
            Mage::getSingleton('adminhtml/session')->getGraphicsData(null);
        }
        elseif (Mage::registry('graphics_data'))
        {
            $data = Mage::registry('graphics_data')->getData();
        }
        else
        {
            $data = array();
        }
 
        $form = new Varien_Data_Form(array(
                'id' => 'edit_form',
                'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
                'method' => 'post',
                'enctype' => 'multipart/form-data',
        ));
 
        $form->setUseContainer(true);
 
        $this->setForm($form);
 
        $fieldset = $form->addFieldset('graphics_form', array(
             'legend' =>Mage::helper('productdesigner')->__('Graphics Information')
        ));
 
        $fieldset->addField('name', 'text', array(
             'label'     => Mage::helper('productdesigner')->__('Name'),
             'class'     => 'required-entry',
             'required'  => true,
             'name'      => 'name',
             'note'      => Mage::helper('productdesigner')->__('The name of the graphics.'),
        ));
 
        $fieldset->addField('image', 'image', array(
             'label'     => Mage::helper('productdesigner')->__('Image'),
             'class'     => 'required-entry',
             'required'  => true,
             'name'      => 'image',
             //'note'     => Mage::helper('productdesigner')->__('Path to the image inside folder designer/gallery'),
        ));
        /*
        $fieldset->addField('price', 'text', array(
             'label'     => Mage::helper('productdesigner')->__('Price'),
             'required'  => false,
             'name'      => 'price',
             'note'      => Mage::helper('productdesigner')->__('Extra price'),
        ));
        */
        $fieldset->addField('position', 'text', array(
             'label'     => Mage::helper('productdesigner')->__('Position'),
             'required'  => false,
             'name'      => 'position',
        ));
 
        $form->setValues($data);
 
        return parent::_prepareForm();
    }
}