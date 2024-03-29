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
CmsNav::add('masters', array(
    'title' => __l('Masters'),
    'weight' => 200,
    'children' => array(
        'Translation' => array(
            'title' => __l('Translations') ,
            'url' => '',
            'weight' => 1200,
        ) ,
        'Translations' => array(
            'title' => __l('Translations') ,
            'url' => array(
                'controller' => 'translations',
                'action' => 'index',
            ) ,
            'weight' => 1210,
        ) ,
        'Language' => array(
            'title' => __l('Languages') ,
            'url' => array(
                'admin' => true,
                'controller' => 'languages',
                'action' => 'index',
            ) ,
            'access' => array(
                'admin'
            ) ,
            'weight' => 1220,
        ) ,
    )
));
$lang_code = Configure::read('site.language');
if (!empty($_COOKIE['CakeCookie']['user_language'])) {
    $lang_code = $_COOKIE['CakeCookie']['user_language'];
}
Configure::write('lang_code', $lang_code);
$translations = Cache::read($lang_code . '_translations');
if (empty($translations) and $translations === false) {
    App::import('Model', 'Translation.Translation');
    $translationObj = new Translation();
    $translations = $translationObj->find('all', array(
        'conditions' => array(
            'Language.iso2' => $lang_code
        ) ,
        'fields' => array(
            'Translation.name',
            'Translation.lang_text',
        ) ,
        'recursive' => 0
    ));
    Cache::set(array(
        'duration' => '+100 days'
    ));
    Cache::write($lang_code . '_translations', $translations);
}
if (!empty($translations)) {
    foreach($translations as $translation) {
        $GLOBALS['_langs'][$lang_code][$translation['Translation']['name']] = $translation['Translation']['lang_text'];
    }
}
if ($lang_code != 'en') {
    $js_trans_array = array(
		'Are you sure you want to' => __l('Are you sure you want to') ,
		'Please select atleast one record!' => __l('Please select atleast one record!') ,
		'Are you sure you want to do this action?' => __l('Are you sure you want to do this action?') ,
		'Please enter valid original price.' => __l('Please enter valid original price.') ,
		'Discount percentage should be less than 100.' => __l('Discount percentage should be less than 100.') ,
		'Discount amount should be less than original price.' => __l('Discount amount should be less than original price.') ,
		'Are you sure do you want to change the status? Once the status is changed you cannot undo the status.' => __l('Are you sure do you want to change the status? Once the status is changed you cannot undo the status.') ,
		'By clicking this button you are confirming your payment via wallet. Once you confirmed amount will be deducted from your wallet and you cannot undo this process. Are you sure you want to confirm this action?' => __l('By clicking this button you are confirming your payment via wallet. Once you confirmed amount will be deducted from your wallet and you cannot undo this process. Are you sure you want to confirm this action?') ,
		'You don\'t have sufficent amount in wallet to continue this process. So please select any other payment gateway.' => __l('You don\'t have sufficent amount in wallet to continue this process. So please select any other payment gateway.') ,
		'Google map could not find your location, please enter known location to google' => __l('Google map could not find your location, please enter known location to google') ,
		'Invalid extension, Only csv, txt are allowed' => __l('Invalid extension, Only csv, txt are allowed') ,
		'No Flickr Photos Available' => __l('No Flickr Photos Available') ,
		'Current' => __l('Current') ,
		'No Date Set' => __l('No Date Set') ,
		'No Time Set' => __l('No Time Set') ,
		'Select check-in date in calendar' => __l('Select check-in date in calendar') ,
		'Select check-out date in calendar' => __l('Select check-out date in calendar') ,
		'I am done reordering' => __l('I am done reordering') ,
		'Reorder' => __l('Reorder') ,
		'You can check "Availablity" in item page' => sprintf(__l('You can check "Availablity" in %s page'), Configure::read('item.alt_name_for_item_singular_small')) ,
		'You can check "Facilities" in item page' => sprintf(__l('You can check "Facilities" in %s page'), Configure::read('item.alt_name_for_item_singular_small')) ,
		'You can check "Pricing" details in item pagesprintf(, also you can do price discussion.' => sprintf(__l('You can check "Pricing" details in %s page, also you can do price discussion.'), Configure::read('item.alt_name_for_item_singular_small')) ,
		'You can check "Pricing" details in item page, also price is fixed. Negotiation is not possible.' => sprintf(__l('You can check "Pricing" details in %s page, also price is fixed. Negotiation is not possible.'), Configure::read('item.alt_name_for_item_singular_small')) ,
		'Are you sure you want to cancel this booking?' => __l('Are you sure you want to cancel this booking?') ,
		'Are you sure confirm this action?' => __l('Are you sure confirm this action?') ,
		'Are you sure you want to confirm this booking?' => __l('Are you sure you want to confirm this booking?') ,
		'Are you sure you want to reject this booking?' => __l('Are you sure you want to reject this booking?') ,
		'Select end date in calendar' => __l('Select end date in calendar') ,
		'Select check-out greater than the check-in date' => __l('Select check-out greater than the check-in date') ,
		'Select from date in calendar' => __l('Select from date in calendar') ,
		'Are you sure you want to generate actions?' => __l('Are you sure you want to generate actions?') ,
		'Select to date in calendar' => __l('Select to date in calendar') ,
		'Price Per Hour' => __l('Price Per Hour') ,
		'Price Per Day' => __l('Price Per Day') ,
		'Price Per Week' => __l('Price Per Week') ,
		'Price Per Month' => __l('Price Per Month') ,
		'You cannot able to update price or availability for request listing' => __l('You cannot able to update price or availability for request listing') ,
		'Custom price could not be added for this date.' => __l('Custom price could not be added for this date.') ,
		'Not Available' => __l('Not Available') ,
		'Available' => __l('Available') ,
		'From' => __l('From') ,
		'To' => __l('To') ,
		'Loading data' => __l('Loading data') ,
		'The request is being processed' => __l('The request is being processed') ,
		'Next' => __l('Next') ,
		'Prev' => __l('Prev') ,
		'Close' => __l('Close'),
		'Please wait' => __l('Please wait'),
	);
    foreach($js_trans_array as $k => $v) {
        Configure::write('Js.cfg.lang.' . $k, $v);
    }
}
$defaultModel = array(
    'Language' => array(
		'hasMany' => array(			
			'Translation' => array(
				'className' => 'Translation',
				'foreignKey' => 'language_id',
				'dependent' => true,
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'exclusive' => '',
				'finderQuery' => '',
				'counterQuery' => ''
			) ,
		)
	)
);
CmsHook::bindModel($defaultModel);
?>