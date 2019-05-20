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
class ItemFlagCategory extends AppModel
{
    public $name = 'ItemFlagCategory';
    public $displayField = 'name';
    public $actsAs = array(
		'I18n' => array(
            'fields' => array(
                'name'
            ),
            'display' => array(
                'name'
            ),
        )
    );	
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public $hasMany = array(
        'ItemFlag' => array(
            'className' => 'ItemFlags.ItemFlag',
            'foreignKey' => 'item_flag_category_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
		$this->_permanentCacheAssociations = array(
			'ItemFlag',
		);
        $this->validate = array(
            'name' => array(
                'rule' => 'notempty',
                'message' => __l('Required') ,
                'allowEmpty' => false
            ),
            'name_es' => array(
                'rule' => 'notempty',
                'message' => __l('Required') ,
                'allowEmpty' => false
            )
        );
        $this->moreActions = array(
            ConstMoreAction::Inactive => __l('Disable') ,
            ConstMoreAction::Active => __l('Enable') ,
            ConstMoreAction::Delete => __l('Delete')
        );
        $this->isFilterOptions = array(
			ConstMoreAction::Active => __l('Enable'),
            ConstMoreAction::Inactive => __l('Disable') 
            
        );
    }
}
?>