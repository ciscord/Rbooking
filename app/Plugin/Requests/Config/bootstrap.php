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
 CmsNav::add('requests', array(
     'title' => __l('Requests') ,
    'url' => array(
        'controller' => 'requests',
        'action' => 'admin_index',
    ) ,
    'data-bootstro-step' => '5',
    'data-bootstro-content' => __l('To monitor the site and also to manage all requests posted in the site.'),
    'icon-class' => 'mail-reply-all ',
    'weight' => 40,
    'children' => array(
		'requests' => array(
            'title' => __l('Requests') ,
            'url' => array(
                'admin' => true,
                'controller' => 'requests',
                'action' => 'admin_index',
            ) ,
            'weight' => 10,
        ) ,
		'Post a Request' => array(
            'title' => __l('Post a Request') ,
            'url' => array(
                'admin' => true,
                'controller' => 'requests',
                'action' => 'add',
            ) ,
            'weight' => 20,
        ) 
    )
));
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
				'request_views' => array(
					'title' => __l('Request Views') ,
					'url' => array(
						'admin' => true,
						'controller' => 'request_views',
						'action' => 'admin_index',
					) ,
					'weight' => 90,
				)
			)
		));
CmsNav::add('masters', array(
    'title' => __l('Masters'),
    'weight' => 200,
    'children' => array(
		 'Request' => array(
            'title' => __l('Request') ,
            'url' => '',
            'weight' => 1050,
        ) ,
        'Request Flag Categories' => array(
            'title' => __l('Request Flag Categories') ,
            'url' => array(
                'admin' => true,
                'controller' => 'request_flag_categories',
                'action' => 'index',
            ) ,
            'weight' => 1051,
        ) ,
    )
));	
$defaultModel = array(
    'Item' => array(
		'hasMany' => array(			
			'ItemsRequest' => array(
				'className' => 'Requests.ItemsRequest',
				'foreignKey' => 'item_id',
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
    ) ,
	'Request' => array(
		'belongsTo' => array(
			'Category' => array(
				'className' => 'Category',
				'foreignKey' => 'category_id',
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'counterCache' => true,
			),
			'CategoryType' => array(
				'className' => 'CategoryType',
				'foreignKey' => 'category_type_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
			),
		)
	),
    'City' => array(
		'hasMany' => array(
			'Request' => array(
				'className' => 'Requests.Request',
				'foreignKey' => 'city_id',
				'dependent' => true,
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
	),
    'Message' => array(
		'belongsTo' => array(
			'Request' => array(
				'className' => 'Requests.Request',
				'foreignKey' => 'request_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
			) ,
		)
    ),
	'Category' => array(
		'hasMany' => array(			
			'Request' => array(
				'className' => 'Requests.Request',
				'foreignKey' => 'category_id',
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
    ) ,
);
CmsHook::bindModel($defaultModel);	
CmsHook::setExceptionUrl(array( 	
	'requests/get_info',	
	'requests/index',
	'requests/view',
	'requests/update_view_count',
 ));

