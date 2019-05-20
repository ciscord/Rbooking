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
CmsNav::add('activities', array(
    'title' => __l('Activities') ,
    'icon-class' => 'time',
    'weight' => 60,
    'children' => array(
		 'request' => array(
					'title' => __l('Requests') ,
					'url' => '',
					'weight' => 90,
				 ) ,
				'request_flags' => array(
					'title' => __l('Request Flags') ,
					'url' => array(
						'admin' => true,
						'controller' => 'request_flags',
						'action' => 'index',
					) ,
					'weight' => 110,
				),
			),
		));

