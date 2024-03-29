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
class Translation extends AppModel
{
    public $name = 'Translation';
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'Language' => array(
            'className' => 'Language',
            'foreignKey' => 'language_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
        $this->validate = array(
            'language_id' => array(
                'rule1' => array(
                    'rule' => 'numeric',
                    'message' => __l('Required')
                )
            ) ,
            'name' => array(
                'rule1' => array(
                    'rule' => 'notempty',
                    'message' => __l('Required')
                )
            ) ,
            'lang_text' => array(
                'rule1' => array(
                    'rule' => 'notempty',
                    'message' => __l('Required')
                )
            ) ,
        );
    }
    function afterSave($created)
    {
        Cache::delete('site_languages');
		return true;
    }
    function afterDelete()
    {
        Cache::delete('site_languages');
		return true;
    }
}
?>