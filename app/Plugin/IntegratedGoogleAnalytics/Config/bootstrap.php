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
require_once 'constants.php';
CmsNav::add('analytics', array(
    'title' => __l('Analytics') ,
    'icon-class' => 'bar-chart',
	'weight' => 21,
    'children' => array(
        'google_analytics' => array(
            'title' => __l('Google Analytics') ,
            'url' => array(
                'admin' => true,
                'controller' => 'google_analytics',
                'action' => 'analytics_chart',
            ) ,
			'htmlAttributes' => array(
                'class' => 'js-no-pjax'
            ) ,
            'weight' => 10,
        ) ,
    )
));
CmsHook::setJsFile(array(
    APP . 'Plugin' . DS . 'IntegratedGoogleAnalytics' . DS . 'webroot' . DS . 'js' . DS . 'common.js'
) , 'default');
?>