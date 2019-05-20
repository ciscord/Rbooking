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
class AffiliateTypeData {

	public $table = 'affiliate_types';

	public $records = array(
		array(
			'id' => '1',
			'created' => '2011-02-08 00:00:00',
			'modified' => '2012-04-03 11:18:59',
			'name' => 'Sign Up',
			'model_name' => 'User',
			'commission' => '5',
			'affiliate_commission_type_id' => '2',
			'is_active' => '1'
		),
		array(
			'id' => '2',
			'created' => '2011-02-08 00:00:00',
			'modified' => '2012-04-03 11:18:59',
			'name' => 'Booking',
			'model_name' => 'ItemUser',
			'commission' => '5',
			'affiliate_commission_type_id' => '1',
			'is_active' => '1'
		),
	);

}
