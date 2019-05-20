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
$path = '/';
$url = array(
    'plugin' => 'install',
    'controller' => 'install'
);
if (file_exists(APP . 'Config' . DS . 'settings.yml')) {
    if (!Configure::read('Install.secured')) {
        $path = '/*';
        $url['action'] = 'finish';
    }
}
CmsRouter::connect($path, $url);
