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

Cms::hookComponent('*', 'SocialMarketing.FriendsDetails');
if (!empty($_REQUEST['request_ids'])) {
    Cms::hookComponent('*', 'SocialMarketing.FacebookRequest');
}
$defaultModel = array(
    'User' => array(
        'hasMany' => array(
            'UserFollower' => array(
                'className' => 'SocialMarketing.UserFollower',
                'foreignKey' => 'followed_user_id',
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
            'FollowedUser' => array(
                'className' => 'SocialMarketing.UserFollower',
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
            ) ,
        )
    )
);
CmsHook::setExceptionUrl(array( 	
	'user_followers/index',	
 ));
CmsHook::bindModel($defaultModel);
