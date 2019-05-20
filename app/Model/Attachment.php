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
class Attachment extends AppModel
{
    public $name = 'Attachment';
    public $actsAs = array(
        'ImageUpload' => array(
            'allowedMime' => '*',
            'allowedExt' => '*'
        )
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
		$this->_memcacheModels = array(
			'Item',
		);
    }
}
?>