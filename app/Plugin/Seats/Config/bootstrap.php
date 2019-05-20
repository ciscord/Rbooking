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
	//'collections/index',
 ));
CmsHook::setJsFile(array(	
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'js' . DS . 'jquery.seat-charts.js',
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'js' . DS . 'flipclock.js',
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'js' . DS . 'seatbook.js'	
));
CmsHook::setCssFile(array(
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'css' . DS . 'seat-charts.less',	
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'css' . DS . 'flipclock.css'	
));
CmsHook::setJsFile(array(	
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'js' . DS . 'jquery.seat-charts.js',	
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'js' . DS . 'flipclock.js',
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'js' . DS . 'seatbook.js'
), 'admin');
CmsHook::setCssFile(array(
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'css' . DS . 'seat-charts.less',
	APP . 'Plugin' . DS . 'Seats' . DS . 'webroot' . DS . 'css' . DS . 'flipclock.css'
), 'admin');
CmsNav::add('items', array(
'title' => Configure::read('item.alt_name_for_item_plural_caps') ,
    'url' => '' ,
    'weight' => 30,
    'children' => array(
        'Seat' => array(
            'title' => __l('Seats') ,
            'url' => '' ,
            'weight' => 80,
        ),
		'Halls' => array(
            'title' => __l('Halls') ,
            'url' => array(
                'controller' => 'halls',
                'action' => 'index',
            ) ,
            'weight' => 90,
        ),
		'Partitions' => array(
            'title' => __l('Partitions') ,
            'url' => array(
                'controller' => 'partitions',
                'action' => 'index',
            ) ,
            'weight' => 100,
        )
    ) ,
));
$defaultModel = array(
	'User' => array(
		'hasMany' => array(			
			'Hall' => array(
				'className' => 'Seats.Hall',
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
			),
			'Partition' => array(
				'className' => 'Seats.Partition',
				'foreignKey' => 'user_id',
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
