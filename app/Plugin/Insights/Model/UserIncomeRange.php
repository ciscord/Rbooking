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
class UserIncomeRange extends AppModel
{
    public $name = 'UserIncomeRange';
    //$validate set in __construct for multi-language support
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
		$this->_permanentCacheAssociations = array(
			'UserProfile',
		);
        $this->validate = array(
            'income' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            ) ,
        );
        $this->moreActions = array(
			ConstMoreAction::Active => __l('Enable') ,
            ConstMoreAction::Inactive => __l('Disable') ,
            ConstMoreAction::Delete => __l('Delete') ,
        );
    }
}
?>