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
class EmailConfig
{
    public function __construct() 
    {
        $this->smtp = array(
            'host' => Configure::read('mail.smtp_host') ,
            'port' => Configure::read('mail.smtp_port') ,
            'username' => Configure::read('mail.smtp_username') ,
            'password' => Configure::read('mail.smtp_password') ,
            'transport' => 'SMTP',
        );
    }
}
?>
