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
$config = array(
    'EventHandlers' => array(
        'Sudopay.SudopayEventHandler' => array(
            'options' => array(
                'priority' => 1,
            ) ,
        ) ,
    ) ,
);
?>