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
				'request_favorites' => array(
					'title' => __l('Request Favorites') ,
					'url' => array(
						'admin' => true,
						'controller' => 'request_favorites',
						'action' => 'index',
					) ,
					'weight' => 100,
				),
			),
		));
