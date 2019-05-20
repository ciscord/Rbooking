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
class SubmissionField extends AppModel
{
    public $name = 'SubmissionField';
    public $validate = array(
        //'submission_id' => array('numeric'),
        //'form_field' => array('notempty')
        
    );
    public $belongsTo = array(
        'Submission' => array(
            'className' => 'Items.Submission',
            'foreignKey' => 'submission_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ) ,
        'FormField' => array(
            'className' => 'Items.FormField',
            'foreignKey' => 'form_field_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public $hasOne = array(
        'ItemCloneThumb' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_id',
            'dependent' => false,
            'conditions' => array(
                'ItemCloneThumb.class' => 'ItemCloneThumb',
            ) ,
            'fields' => '',
            'order' => ''
        ) ,
        'SubmissionThumb' => array(
            'className' => 'Items.SubmissionThumb',
            'foreignKey' => 'foreign_id',
            'dependent' => false,
            'conditions' => array(
                'SubmissionThumb.class' => 'SubmissionThumb',
            ) ,
            'fields' => '',
            'order' => ''
        )
    );
}
?>