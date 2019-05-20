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
class CategoryType extends AppModel
{
    public $name = 'CategoryType';
    public $displayField = 'name';
    //$validate set in __construct for multi-language support
    //The Associations below have been created with all possible keys, those that are not needed can be removed
	public $belongsTo = array(
		'Category' => array(
            'className' => 'Items.Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ) ,
	);
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
		$this->_permanentCacheAssociations = array(
			'Item',
			'Request',
		);
        $this->validate = array(
            'category_id' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            ) ,
            'name' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            )
        );
        $this->moreActions = array(
            ConstMoreAction::Active => __l('Enable') ,
			ConstMoreAction::Inactive => __l('Disable') ,
            ConstMoreAction::Delete => __l('Delete') ,
        );
    }
}
?>