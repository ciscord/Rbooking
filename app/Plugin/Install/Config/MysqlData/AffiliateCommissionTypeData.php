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
class AffiliateCommissionTypeData {

	public $table = 'affiliate_commission_types';

	public $records = array(
		array(
			'id' => '1',
			'name' => '%',
			'description' => 'Percentage'
		),
		array(
			'id' => '2',
			'name' => '$',
			'description' => 'Amount'
		),
	);

}
