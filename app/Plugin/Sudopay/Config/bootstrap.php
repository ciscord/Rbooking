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
CmsHook::setExceptionUrl(array(
    'sudopays/cancel_payment',
    'sudopays/success_payment',
    'sudopays/process_payment',
    'sudopays/process_ipn',
    'sudopays/update_account',
));
$pluginModel = array();
if (isPluginEnabled('Items')) {
    $pluginModel = array(
        'ItemUser' => array(
            'belongsTo' => array(
                'SudopayPaymentGateway' => array(
                    'className' => 'Sudopay.SudopayPaymentGateway',
                    'foreignKey' => 'sudopay_gateway_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => '',
                    'counterCache' => false
                ) ,
            ) ,
        ) ,
    );
}
CmsHook::bindModel($pluginModel);
?>