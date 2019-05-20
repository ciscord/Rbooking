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
class RequestsCronComponent extends Component
{
    public function main() 
    {
		App::import('Model', 'Requests.Request');
		$this->Request = new Request();
		$this->Request->_updateCityRequestCount();
    }
}
