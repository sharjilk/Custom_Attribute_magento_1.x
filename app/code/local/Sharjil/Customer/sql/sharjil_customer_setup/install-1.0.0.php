<?php
$this->addAttribute('customer', 'linkedin_profile', array(
    'type'      => 'varchar',
    'label'     => 'Linkedin Profile',
    'input'     => 'text',
    'position'  => 120,
    'required'  => true,
    'is_system' => 0,
));
$attribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'linkedin_profile');
$attribute->setData('used_in_forms', array(
    'adminhtml_customer',
    'customer_account_create',
    'customer_account_edit',
));
$attribute->setData('is_user_defined', 0);
$attribute->save();

?>