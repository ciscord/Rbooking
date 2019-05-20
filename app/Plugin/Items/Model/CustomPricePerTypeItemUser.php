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
class CustomPricePerTypeItemUser extends AppModel
{
    public $name = 'CustomPricePerTypeItemUser';
    //$validate set in __construct for multi-language support
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'ItemUser' => array(
            'className' => 'Items.ItemUser',
            'foreignKey' => 'item_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
		'CustomPricePerType' => array(
            'className' => 'Items.CustomPricePerType',
            'foreignKey' => 'custom_price_per_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
		'CustomPricePerNight' => array(
            'className' => 'Items.CustomPricePerNight',
            'foreignKey' => 'custom_price_per_night_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        )
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
    }
}
?>
