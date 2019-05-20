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
class SocialContact extends AppModel
{
    public $name = 'SocialContact';
    public $belongsTo = array(
        'SocialContactDetail' => array(
            'className' => 'SocialMarketing.SocialContactDetail',
            'foreignKey' => 'social_contact_detail_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'counterCache' => true,
        ) ,
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
    }
}
?>