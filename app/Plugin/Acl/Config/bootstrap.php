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
CmsHook::setCssFile(array(
    APP . 'Plugin' . DS . 'Acl' . DS . 'webroot' . DS . 'css' . DS . 'acl.css'
) , 'admin');
CmsHook::setJsFile(array(
    APP . 'Plugin' . DS . 'Acl' . DS . 'webroot' . DS . 'js' . DS . 'common.js'
) , 'default');
