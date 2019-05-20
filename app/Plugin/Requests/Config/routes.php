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
CmsRouter::connect('/requests/favorites', array(
    'controller' => 'requests',
    'action' => 'index',
    'type' => 'favorite'
));
CmsRouter::connect('/myrequests', array(
    'controller' => 'requests',
    'action' => 'index',
    'type' => 'myrequest',
	'status' => 'active',
));
?>