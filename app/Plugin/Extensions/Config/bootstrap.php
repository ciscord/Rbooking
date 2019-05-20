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
CmsNav::add('plugins', array(
    'title' => __l('Plugins') ,
    'weight' => 70,
    'data-bootstro-step' => '8',
    'data-bootstro-content' => __l('To manage all plugins and their settings.') ,
    'icon-class' => 'certificate',
    'children' => array(
        'plugins' => array(
            'title' => __l('Plugins') ,
            'url' => array(
                'controller' => 'extensions_plugins',
                'action' => 'index',
            ) ,
            'htmlAttributes' => array(
                'class' => 'separator',
            ) ,
            'weight' => 10,
        ) ,
    ) ,
));
