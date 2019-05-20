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
class InstallAppController extends AppController
{
    public function beforeFilter()
    {
        $this->Components->unload('Cms');
        $this->Components->unload('Auth');
    }
}
