<?php
/**
 * SMS
 * 
 * @author Slava Yurthev
 */
class SY_SMS_Block_Adminhtml_Templates_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	protected function _prepareCollection(){
		$collection = Mage::getModel('sy_sms/template')->getCollection();
		$this->setCollection($collection);
		return parent::_prepareCollection();
	}
	protected function _prepareColumns(){
		$helper = Mage::helper('sy_sms');
		$this->addColumn('id', array(
			'header' => $helper->__('ID'),
			'index' => 'id'
		));
		$this->addColumn('label', array(
			'header' => $helper->__('Label'),
			'index' => 'label',
			'type' => 'text',
		));
		$this->addColumn('identifier', array(
			'header' => $helper->__('Identifier'),
			'index' => 'identifier',
			'type' => 'text',
		));
		$this->addColumn('model', array(
			'header' => $helper->__('Model'),
			'index' => 'model',
			'type' => 'options',
			'options' => $helper->getModelsArray()
		));
		$this->addColumn('msg', array(
			'header' => $helper->__('Message'),
			'filter' => false,
			'sortable' => false,
			'index' => 'msg',
			'type' => 'text',
		));
		return parent::_prepareColumns();
	}
	public function getRowUrl($model){
		return $this->getUrl('*/*/edit', array('id' => $model->getId()));
	}
}