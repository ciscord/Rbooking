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
class EmailTemplate extends AppModel
{
    public $name = 'EmailTemplate';
    public $displayField = 'name';
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
        $this->validate = array(
            'from' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            ) ,
            'subject' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            ) ,
            'email_content' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            )
        );
    }
    function selectTemplate($tempName)
    {
        $emailTemplate = $this->find('first', array(
            'conditions' => array(
                'EmailTemplate.name' => $tempName
            ) ,
            'recursive' => -1
        ));
        $resultArray = array();
		if (!empty($emailTemplate)) {
			foreach($emailTemplate['EmailTemplate'] as $key => $value) {
				$resultArray[$key] = $value;
			}
		}
        return $resultArray;
    }
}
?>