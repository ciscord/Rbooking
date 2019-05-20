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
class UserRelationship extends AppModel
{
    public $name = 'UserRelationship';
	public $displayField = 'relationship';
	public $actsAs = array(
		'I18n' => array(
            'fields' => array(
                'relationship'
            ) ,
            'display' => array(
                'relationship'
            ) ,
        )
    );	
    //$validate set in __construct for multi-language support
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $hasMany = array(
        'UserProfile' => array(
            'className' => 'UserProfile',
            'foreignKey' => 'user_relationship_id',
            'dependent' => false,
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
			'UserProfile',
		);
        $this->validate = array(
            'relationship' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            ),
 			'relationship_es' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
             )
        );
        $this->moreActions = array(
            ConstMoreAction::Inactive => __l('Disable') ,
            ConstMoreAction::Active => __l('Enable') ,
            ConstMoreAction::Delete => __l('Delete') ,
        );
    }
}
?>