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
		'item' => array(
			'title' => Configure::read('item.alt_name_for_item_plural_caps') ,
			'url' => '',
			'weight' => 40,
		) ,
		'item_favorites' => array(
			'title' => Configure::read('item.alt_name_for_item_singular_caps') . ' ' . __l('Favorites') ,
			'url' => array(
				'admin' => true,
				'controller' => 'item_favorites',
				'action' => 'index',
			) ,
			'weight' => 60,
		),
	),
));
$defaultModel = array(
    'Ip' => array(
		'hasMany' => array(
			'ItemFavorite' => array(
				'className' => 'ItemFavorites.ItemFavorite',
				'foreignKey' => 'ip_id',
				'dependent' => false,
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'exclusive' => '',
				'finderQuery' => '',
				'counterQuery' => ''
			)
		)
	)
);
CmsHook::bindModel($defaultModel);