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
class City extends AppModel
{
    public $name = 'City';
    public $displayField = 'name';
    public $actsAs = array(
        'Sluggable' => array(
            'label' => array(
                'name'
            )
        )
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'Country' => array(
            'className' => 'Country',
            'foreignKey' => 'country_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ) ,
        'State' => array(
            'className' => 'State',
            'foreignKey' => 'state_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
        $this->isFilterOptions = array( 
            ConstMoreAction::Active => __l('Enable'),
			 ConstMoreAction::Inactive => __l('Disable')
        );
        $this->moreActions = array(
			ConstMoreAction::Approved => __l('Enable') ,
            ConstMoreAction::Disapproved => __l('Disable') ,
            ConstMoreAction::Delete => __l('Delete')
        );
        $this->validate = array(
            'name' => array(
                'rule' => 'notempty',
                'message' => __l('Required') ,
                'allowEmpty' => false
            ) ,
            'country_id' => array(
                'rule' => 'numeric',
                'message' => __l('Required') ,
                'allowEmpty' => false
            ),
			'latitude' => array(
				'rule' => array('decimal', 6),
				'allowEmpty' => true,
				'message' => __l('Should be a decimal number and digits after decimal should be within 6 length')
			),
			'longitude' => array(
				'rule' => array('decimal', 6),
				'allowEmpty' => true,
				'message' => __l('Should be a decimal number and digits after decimal should be within 6 length')
			)
        );
    }
}
?>