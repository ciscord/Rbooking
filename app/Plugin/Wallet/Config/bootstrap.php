<?php
/**
 * RBooking
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    RBooking
 * @subpackage Core
 * @author     Ivica <ivicadevelopermarinkovic@gmail.com>
 * @copyright  2018 Ivica 
 * 
 * 
 */
// to show add fund link in users action
Cms::hookAdminRowAction('Users/admin_index', '<i class="icon-plus"></i> '.__l('Add Fund'), 'controller:user_add_wallet_amounts/action:add_fund/:id', array(
    'title' => __l('Add Fund'),
    'escape' => false,
));
// to show deduct fund link in users action
Cms::hookAdminRowAction('Users/admin_index', '<i class="icon-minus"></i>'.__l('Deduct Fund'), 'controller:user_add_wallet_amounts/action:deduct_fund/:id', array(
    'title' => __l('Deduct Fund'),
	'escape' => false,
));
CmsHook::bindModel(array(
    'User' => array(
        'hasMany' => array(
            'UserAddWalletAmount' => array(
                'className' => 'Wallet.UserAddWalletAmount',
                'foreignKey' => 'user_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => ''
            ) ,
            'MoneyTransferAccount' => array(
                'className' => 'Withdrawals.MoneyTransferAccount',
                'foreignKey' => 'user_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => '',
            )
        ) ,
    )
));
?>