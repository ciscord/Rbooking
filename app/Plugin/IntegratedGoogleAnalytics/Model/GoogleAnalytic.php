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
class GoogleAnalytic extends AppModel
{
    public $useTable = false;
    public function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
		$this->filterOptions = array(
            ConstFilterOptions::Loggedin => __l('Loggedin Users') ,
            ConstFilterOptions::Refferred => __l('Refferred Users'),
			ConstFilterOptions::Favorited => __l('Favorited Users') ,
			ConstFilterOptions::Voted => __l('Voted Users') ,
			ConstFilterOptions::Commented => __l('Commented Users') ,
			ConstFilterOptions::Booked => __l('Booked Amount Value') ,
			ConstFilterOptions::ItemPosted => Configure::read('item.alt_name_for_item_singular_caps') . ' ' . __l('Posted Amount Value') 
        );
    }
}
?>