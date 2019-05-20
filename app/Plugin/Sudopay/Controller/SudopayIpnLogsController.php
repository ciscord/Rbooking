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
class SudopayIpnLogsController extends AppController
{
    var $name = 'SudopayIpnLogs';
    function admin_index() 
    {
        $this->pageTitle = __l('Zazpay IPN Logs');
        $this->paginate = array(
            'order' => array(
                'SudopayIpnLog.id' => 'desc'
            ) ,
            'recursive' => 0
        );
        $this->set('sudopayIpnLogs', $this->paginate());
    }
}
?>
