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
 CmsHook::setExceptionUrl(array(
	'collections/index',
 ));
CmsNav::add('items', array(
	'title' => Configure::read('item.alt_name_for_item_plural_caps') ,
    'url' => '' ,
    'weight' => 30,
    'children' => array(
        'listing' => array(
            'title' => Configure::read('item.alt_name_for_item_plural_caps') ,
            'url' => '' ,
            'weight' => 10,
        ) , 
		'Coupons' => array(
            'title' => Configure::read('item.alt_name_for_item_singular_caps') . ' ' . __l('Coupons') ,
            'url' => array(
                'controller' => 'coupons',
                'action' => 'index',
            ) ,
            'weight' => 35,
        )
    ) ,
));