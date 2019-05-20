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
        'Account' => array(
            'title' => __l('Account') ,
            'url' => '',
            'weight' => 1100,
        ) ,
        'Security Questions' => array(
            'title' => __l('Security Questions') ,
            'url' => array(
                'controller' => 'security_questions',
                'action' => 'index'
            ) ,
            'weight' => 1110,
        ) ,
    )
));
$defaultModel = array(
    'User' => array(
        'belongsTo' => array(
            'SecurityQuestion' => array(
                'className' => 'SecurityQuestions.SecurityQuestion',
                'foreignKey' => 'security_question_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            ) ,
        ) ,
    ) ,
);
CmsHook::bindModel($defaultModel);