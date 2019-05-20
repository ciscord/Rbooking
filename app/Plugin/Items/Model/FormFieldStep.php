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
class FormFieldStep extends AppModel
{
    public $name = 'FormFieldStep';
    public $actsAs = array(
        'Sluggable' => array(
            'label' => array(
                'name'
            )
        ) ,
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'Category' => array(
            'className' => 'Items.Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'counterCache' => true
        )
    );
    public $hasMany = array(
        'FormFieldGroup' => array(
            'className' => 'Items.FormFieldGroup',
            'foreignKey' => 'form_field_step_id',
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
		$this->_memcacheModels = array(
            'FormFieldGroup',
            'FormField',
        );
        $this->_permanentCacheAssociations = array(
            'Item',
            'Category',
        );
        $this->validate = array(
            'name' => array(
                'rule' => 'notempty',
                'message' => __l('Required') ,
                'allowEmpty' => false
            ) ,
        );
    }
}
?>
