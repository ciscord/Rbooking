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
require_once 'constants.php';
if (isPluginEnabled('Wallet')) {
    CmsNav::add('payments', array(
        'title' => __l('Payments') ,
        'weight' => 50,
        'children' => array(
            'Withdraw Fund Request' => array(
                'title' => __l('Withdraw Fund Request') ,
                'url' => '',
                'weight' => 400,
            ) ,
            'User Cash Withdrawals' => array(
                'title' => __l('User Cash Withdrawals') ,
                'url' => array(
                    'controller' => 'user_cash_withdrawals',
                    'action' => 'index',
                    'filter_id' => ConstWithdrawalStatus::Pending,
                    'admin' => true,
                ) ,
                'weight' => 410,
            ) ,
        )
    ));
}
$defaultModel = array(
    'User' => array(
        'hasMany' => array(
            'UserCashWithdrawal' => array(
                'className' => 'Withdrawals.UserCashWithdrawal',
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
            ) ,
        ) ,
    ) ,
);
CmsHook::bindModel($defaultModel);
