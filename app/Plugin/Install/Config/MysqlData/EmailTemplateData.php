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
class EmailTemplateData {

	public $table = 'email_templates';

	public $records = array(
		array(
			'id' => '1',
			'created' => '2009-02-20 10:24:49',
			'modified' => '2013-09-20 18:35:25',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Forgot Password',
			'description' => 'we will send this mail, when user submit the forgot password form.',
			'subject' => 'Forgot password',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:# F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: # F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">A password reset request has been made for your user account at ##SITE_NAME##.</p>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">If you made this request, please click on the following link:
##RESET_URL##</p>

        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; border-top: 1px solid #d5d5d5; color:#333333; margin: 15px 0 0 0; line-height:20px; font-size: 12px; text-align: left; padding: 10px 0px;\">If you did not request this action and feel this is in error, please contact us at ##CONTACT_MAIL##.</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:# F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

A password reset request has been made for your user account at ##SITE_NAME##.

If you made this request, please click on the following link:

##RESET_URL##

If you did not request this action and feel this is in error, please contact us at ##CONTACT_MAIL##.

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'USERNAME,RESET_URL,SITE_NAME',
			'is_html' => '1'
		),
		array(
			'id' => '2',
			'created' => '2009-02-20 10:15:57',
			'modified' => '2013-09-20 18:35:53',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Activation Request',
			'description' => 'we will send this mail, when user registering an account he/she will get an activation request.',
			'subject' => 'Please activate your ##SITE_NAME## account',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your account has been created. Please visit the following URL to activate your account.
##ACTIVATION_URL##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

Your account has been created. Please visit the following URL to activate your account.
##ACTIVATION_URL##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,USERNAME,ACTIVATION_URL',
			'is_html' => '1'
		),
		array(
			'id' => '3',
			'created' => '2009-02-20 10:15:19',
			'modified' => '2013-09-20 18:41:25',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'New User Join',
			'description' => 'we will send this mail to admin, when a new user registered in the site. For this you have to enable \"admin mail after register\" in the settings page.',
			'subject' => 'New user joined in ##SITE_NAME## account',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi ,
        </h2></td>
  </tr>
</table>
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
      <td style=\"padding: 20px 30px 5px;\">
         <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 15px 0px;\">A new user named \"##USERNAME##\" has joined in ##SITE_NAME## account.</p>
        <table width=\"100%\" border=\"0\">
          <tr>
            <td width=\"32%\"> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">Username</p>
              </td>
            <td width=\"8%\"> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td width=\"60%\"> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\"> ##USERNAME##</p>
              </td>
             </tr>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">Email</p>
              </td>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">##EMAIL##</p>
              </td>
          <tr>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">Signup IP</p>
              </td>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">##SIGNUP_IP##</p>
              </td>
          </tr>
        </table>
        <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: center; padding: 15px 0px;\"></p></td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid rgb(214, 214, 214); padding: 15px 30px 25px; margin: 0pt 30px;\">
          <h4 style=\"font-family: Helvetica,Arial,sans-serif; font-size: 22px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color: #F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color: #F47564;\" title=\"##SITE_NAME## - Collective Buying Power\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>

  
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi,

A new user named \"##USERNAME##\" has joined in ##SITE_NAME## account.

Username  : ##USERNAME##
Email     : ##EMAIL##
Signup IP : ##SIGNUP_IP##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,USERNAME',
			'is_html' => '1'
		),
		array(
			'id' => '4',
			'created' => '2009-03-02 00:00:00',
			'modified' => '2013-09-20 18:44:03',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Admin User Add',
			'description' => 'we will send this mail to user, when a admin add a new user.',
			'subject' => 'Welcome to ##SITE_NAME##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##SITE_NAME## team added you as a user in ##SITE_NAME##.</p>
                <h3 style=\"font-family: verdana,Helvetica,Arial,sans-serif; margin:0; padding:5px 0;\">Your account details.</h3>
                <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">
##LOGINLABEL##:##USEDTOLOGIN##
Password:##PASSWORD##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

##SITE_NAME## team added you as a user in ##SITE_NAME##.

Your account details.
##LOGINLABEL##:##USEDTOLOGIN##
Password:##PASSWORD##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,USERNAME,PASSWORD, LOGINLABEL, USEDTOLOGIN',
			'is_html' => '1'
		),
		array(
			'id' => '5',
			'created' => '2009-05-22 16:51:14',
			'modified' => '2013-09-20 18:47:49',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Welcome Email',
			'description' => 'we will send this mail, when user register in this site and get activate.',
			'subject' => 'Welcome to ##SITE_NAME##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">We wish to say a quick hello and thanks for registering at ##SITE_NAME##.</p>
    <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">If you did not request this account and feel this is an error, please contact us at ##CONTACT_MAIL##</p>   
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

We wish to say a quick hello and thanks for registering at ##SITE_NAME##.

If you did not request this account and feel this is an error, please contact us at ##CONTACT_MAIL##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME, USERNAME, SUPPORT_EMAIL',
			'is_html' => '1'
		),
		array(
			'id' => '6',
			'created' => '2009-05-22 16:45:38',
			'modified' => '2013-09-20 18:50:26',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Admin User Active',
			'description' => 'We will send this mail to user, when user active by administrator.',
			'subject' => 'Your ##SITE_NAME## account has been activated',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your account has been activated.</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

Your account has been activated.

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,USERNAME',
			'is_html' => '1'
		),
		array(
			'id' => '7',
			'created' => '2009-05-22 16:48:38',
			'modified' => '2013-09-20 18:52:11',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Admin User Deactivate',
			'description' => 'We will send this mail to user, when user deactivate by administrator.',
			'subject' => 'Your ##SITE_NAME## account has been deactivated',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\"><p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your ##SITE_NAME## account has been deactivated.</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

Your ##SITE_NAME## account has been deactivated.

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,USERNAME',
			'is_html' => '1'
		),
		array(
			'id' => '8',
			'created' => '2009-05-22 16:50:25',
			'modified' => '2013-09-20 18:53:52',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Admin User Delete',
			'description' => 'We will send this mail to user, when user delete by administrator.',
			'subject' => 'Your ##SITE_NAME## account has been removed',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\"><p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your ##SITE_NAME## account has been removed.</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

Your ##SITE_NAME## account has been removed.

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,USERNAME',
			'is_html' => '1'
		),
		array(
			'id' => '9',
			'created' => '2009-07-07 15:47:09',
			'modified' => '2013-09-20 18:54:58',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Admin Change Password',
			'description' => 'we will send this mail to user, when admin change user\'s password.',
			'subject' => 'Password changed',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Admin reset your password for your ##SITE_NAME## account.</p>
         <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your new password:
##PASSWORD##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,

Admin reset your password for your  ##SITE_NAME## account.

Your new password:
##PASSWORD##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME,PASSWORD,USERNAME',
			'is_html' => '1'
		),
		array(
			'id' => '10',
			'created' => '2009-10-14 18:31:14',
			'modified' => '2013-09-20 18:57:46',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Contact Us',
			'description' => 'We will send this mail to admin, when user submit any contact form.',
			'subject' => '[##SITE_NAME##] ##SUBJECT##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
	##MESSAGE##
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
<table width=\"100%\" border=\"0\">
          <tr>
            <td width=\"32%\"> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">Telephone</p>
              </td>
            <td width=\"8%\"> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td width=\"60%\"> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\"> ##TELEPHONE##</p>
              </td>
             <tr>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">IP</p>
              </td>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td> <p style=\"font-family: Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">##IP##, ##SITE_ADDR##</p>
              </td>
          <tr>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">Whois</p>
              </td>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">http://whois.sc/##IP##</p>
              </td>
          <tr>
         <tr>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">URL</p>
              </td>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">:</p>
              </td>
            <td> <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">##FROM_URL##</p>
              </td>
          <tr>  
        </table>  
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => '##MESSAGE##

----------------------------------------------------
Telephone  : ##TELEPHONE##
IP             : ##IP##, ##SITE_ADDR##
Whois       : http://whois.sc/##IP##
URL          : ##FROM_URL##
----------------------------------------------------

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'FROM_URL, IP, TELEPHONE, MESSAGE, SITE_NAME, SUBJECT, FROM_EMAIL, LAST_NAME, FIRST_NAME',
			'is_html' => '1'
		),
		array(
			'id' => '11',
			'created' => '2009-10-14 19:20:59',
			'modified' => '2013-09-20 18:59:05',
			'from' => '##CONTACT_FROM_EMAIL##',
			'reply_to' => '',
			'name' => 'Contact Us Auto Reply',
			'description' => 'we will send this mail to user, when user submit the contact us form.',
			'subject' => '[##SITE_NAME##] RE: ##SUBJECT##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
Hi ##FIRST_NAME####LAST_NAME##,</td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Thanks for contacting us. We\'ll get back to you shortly.</p>
                <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Please do not reply to this automated response. If you have not contacted us and if you feel this is an error, please contact us through our site
##CONTACT_URL##</p>
   <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 15px 0px;\">------ On ##POST_DATE## you wrote from ##IP## --------</p>
   <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: rgb(84, 84, 84); margin: 0pt 20px; font-size: 16px; text-align: left; padding: 15px 0px;\">##MESSAGE##
</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>
',
			'email_text_content' => 'Dear ##FIRST_NAME####LAST_NAME##,

Thanks for contacting us. We\'ll get back to you shortly.

Please do not reply to this automated response. If you have not contacted us and if you feel this is an error, please contact us through our site ##CONTACT_URL##


------ On
##POST_DATE## you wrote from ##IP##
-----

##MESSAGE##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'MESSAGE, POST_DATE, SITE_NAME, CONTACT_URL, FIRST_NAME, LAST_NAME,
SUBJECT, SITE_LINK',
			'is_html' => '1'
		),
		array(
			'id' => '12',
			'created' => '0000-00-00 00:00:00',
			'modified' => '2013-09-20 19:01:04',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'New Booking Message To Booker',
			'description' => 'Internal mail sent to the booker when he makes a new booking.',
			'subject' => 'Your booking has been made.',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<div style=\"width: 610px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Dear ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##SITE_NAME##: Thank you. Please read this information about your booking from ##HOST_NAME##</p>
           <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your booking has been sent to the host and is now waiting for their approval. We will notify you when that happens. Please keep this mail until your booking is complete.</p>
            <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booked listiing:</b> ##ITEM_NAME##.</p>
            <p style=\"border:1px dashed #333; border-width:1px 0 1px 0;font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Information about your booking</b></p>
                  <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booking</b> ###ORDER_NO##
##ITEM_FULL_NAME##</p>
    <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Description:</b>
##ITEM_DESCRIPTION##</p>
 <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>From:</b> ##FROM_DATE##</p>
 <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>To:</b> ##TO_DATE##</p>
 <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Host:</b> ##HOST_NAME## (##HOST_RATING##) ##HOST_CONTACT_LINK##</p> 
       <p style=\"border:1px dashed #333; border-width:1px 0 1px 0;font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>What to do if the host is not responding?</b></p>
       <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">If you feel that the host is taking too long to respond, you can ##CANCEL_URL## and get your funds back to your Account. We recommend allowing host at least ##ITEM_AUTO_EXPIRE_DATE## day(s) to respond.</p> 
       
              <p style=\"border:1px dashed #333; border-width:1px 0 1px 0;font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>What if the host rejects my booking?</b></p>
       <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Host may sometimes choose to give up on an booking. This may be due to their inability to perform their work based on the information you provided
or they are simply too busy or currently unavailable.</p> 
  <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">If a host rejects your booking, your funds are returned to your ##SITE_NAME## account.</p>
  
  
  
                <p style=\"border:1px dashed #333; border-width:1px 0 1px 0;font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>##SITE_NAME## Customer Service</b></p>
       <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0 0 10px 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">The ##SITE_NAME## Customer service are here to help you. If you need any assistance with an booking, Please contact us here:
##CONTACT_URL##</p> 
         </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME##,

##SITE_NAME##: Thank you. Please read this information about your booking from ##HOST_NAME##

Your booking has been sent to the host and is now waiting for their approval. We will notify you when that happens. Please keep this mail until your booking is complete.

Booked item : ##ITEM_NAME##.

-----------------------------------------------------
Information about your booking
-----------------------------------------------------
Booking ###ORDER_NO## ##ITEM_FULL_NAME##

Description: ##ITEM_DESCRIPTION##

From: ##FROM_DATE##

To: ##TO_DATE##

Host: ##HOST_NAME## (##HOST_RATING##) ##HOST_CONTACT_LINK##

-----------------------------------------------------
What to do if the host is not responding?
-----------------------------------------------------
If you feel that the host is taking too long to respond, you can ##CANCEL_URL## and get your funds back to your Account. We recommend allowing host at least ##ITEM_AUTO_EXPIRE_DATE## day(s) to respond.

-----------------------------------------------------
What if the host rejects my booking?
-----------------------------------------------------
Host may sometimes choose to give up on an booking. This may be due to their inability to perform their work based on the information you provided or they are simply too busy or currently unavailable.

If a host rejects your booking, your funds are returned to your ##SITE_NAME## account.

-----------------------------------------------------
##SITE_NAME## Customer Service
-----------------------------------------------------
The ##SITE_NAME## Customer service are here to help you. If you need any assistance with an booking, Please contact us here: ##CONTACT_URL##

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'SITE_NAME, HOST_NAME, USERNAME, ITEM_FULL_NAME, ITEM_DESCRIPTION, ITEM_ORDER_COMPLETION_DATE, SELLER_RATING, SELLER_CONTACT_LINK, REJECT_URL, BALANCE_LINK, ITEM_AUTO_EXPIRE_DATE, CONTACT_LINK',
			'is_html' => '1'
		),
		array(
			'id' => '13',
			'created' => '0000-00-00 00:00:00',
			'modified' => '2011-06-03 13:25:38',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'New Booking Message To Host',
			'description' => 'When new booking was made, an internal
message will be sent to the owner of the item notify new booking.',
			'subject' => 'You have a new booking',
			'email_content' => '<div style=\"padding: 10px; width: 650px; margin: auto;\">
<div style=\"width: 610px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
Dear ##USERNAME##
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">You have a new booking from ##BOOKER_USERNAME##.</p>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"> <b>Booked item:</b> ##ITEM_NAME##.</p>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Please click the following link to accept the booking 
##ACCEPT_URL##</p>
                        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Please click the following link to reject the booking 
##REJECT_URL##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"650px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME## 

You have a new booking from ##BOOKER_USERNAME##.

Booked item: ##ITEM_NAME##.

Please click the following link to accept the booking ##ACCEPT_URL##

Please click the following link to reject the booking ##REJECT_URL##

Thanks, 
##SITE_NAME##
##SITE_URL## 

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'USERNAME,TRAVERLLER_USERNAME,ITEM_NAME,ACCEPT_URL,REJECT_URL',
			'is_html' => '1'
		),
		array(
			'id' => '14',
			'created' => '0000-00-00 00:00:00',
			'modified' => '2011-06-03 13:26:21',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Accepted Booking Message To Booker',
			'description' => 'Internal message will be sent to the Booker, when the booked item was accepted by the host.',
			'subject' => 'Your booking has been accepted',
			'email_content' => '<div style=\"padding: 10px; width: 650px; margin: auto;\">
<div style=\"width: 610px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
	Dear ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your booking has been accepted. Looking forward for your visit:)</p>
                <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booked Item:</b> ##ITEM_NAME##</p>
                                <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##HOST_CONTACT_LINK##</p>       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"650px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME## 

Your booking has been accepted. Looking forward for your visit:)

Booked Item: ##ITEM_NAME##

##HOST_CONTACT_LINK##

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'USERNAME, ITEM_NAME',
			'is_html' => '1'
		),
		array(
			'id' => '15',
			'created' => '0000-00-00 00:00:00',
			'modified' => '2011-06-03 13:18:03',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Alert Mail',
			'description' => 'This is an external alert mail sent to the
users when they receive any message into their internal messages related to
contacting users.',
			'subject' => '##SITE_NAME##: You have a new message from ##FROM_USER##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
Hi ##TO_USER##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">A new message from ##FROM_USER## is waiting for you in your inbox</p>
        
           <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">To reply to this message click here: ##REPLY_LINK## </p>
           
                      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">To view the full message and attachments (if any) click on the following link: 
##VIEW_LINK##</p>

    <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">This is an automatically generated message by ##SITE_NAME## Replies are not monitored or answered.</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##TO_USER##, 

A new message from ##FROM_USER## is waiting for you in your inbox

To reply to this message click here: ##REPLY_LINK## 

To view the full message and attachments (if any) click on the following link: ##VIEW_LINK##

This is an automatically generated message by ##SITE_NAME## Replies are not monitored or answered.

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'SITE_NAME, FROM_USER, TO_USER, SUBJECT, MESSAGE, REPLY_LINK, VIEW_LINK, SITE_LINK',
			'is_html' => '1'
		),
		array(
			'id' => '16',
			'created' => '0000-00-00 00:00:00',
			'modified' => '2010-06-29 11:20:50',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Booking Alert Mail',
			'description' => 'This is an external alert mail sent to
the user when they receive any message into their internal messages related to bookings.',
			'subject' => '##SITE_NAME##: ##TO_USER## - ##SUBJECT##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
Hi ##TO_USER##, 
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
       <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>##MESSAGE##</b></p>
        
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">To view the full message and attachments (if any) click on the following
link:##VIEW_LINK## </p>
       
               <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">This is an automatically generated message by ##SITE_NAME## </p>
               
                 <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Replies are not monitored or answered.</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##TO_USER##, 

##MESSAGE##

To view the full message and attachments (if any) click on the following link:##VIEW_LINK## 

This is an automatically generated message by ##SITE_NAME## 

Replies are not monitored or answered.

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'TO_USER,SITE_NAME,FROM_USER,SUBJECT,MESSAGE,VIEW_LINK,SITE_LINK,REFER_LINK',
			'is_html' => '1'
		),
		array(
			'id' => '17',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Accepted Booking Message To Host',
			'description' => 'Internal message sent back to host after the booking has been accepted.',
			'subject' => 'You have accepted the booking',
			'email_content' => '<div style=\"padding: 10px; width: 650px; margin: auto;\">
<div style=\"width: 610px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">You have accepted the booking.</p>
        
          <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booked Item:</b> ##ITEM_NAME##.</p>
          
            <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booking No#:</b>##ORDER_NO##</p>
 
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"650px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##,  

You have accepted the booking.

Booked Item: ##ITEM_NAME##.

Booking No#:##ORDER_NO##

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'USERNAME, ORDER_NO, ITEM_NAME',
			'is_html' => '1'
		),
		array(
			'id' => '18',
			'created' => '2010-12-04 10:14:29',
			'modified' => '2011-06-10 15:03:25',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Requested Item Notification',
			'description' => 'we will send this mail, when
the item related for the user request',
			'subject' => 'Item posted for your request',
			'email_content' => '<div style=\"padding: 10px; width: 650px; margin: auto;\">
<div style=\"width: 610px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">A item related to your request ##REQUEST_URL## has been posted in ##SITE_NAME##</p>
        
             <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Please visit the following URL to view the item ##ITEM_URL##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
	<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"650px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME##,  

A item related to your request ##REQUEST_URL## has been posted in ##SITE_NAME##

Please visit the following URL to view the item ##ITEM_URL##

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'SITE_NAME, USERNAME, ITEM_URL,
SITE_LINK, REQUEST_URL',
			'is_html' => '1'
		),
		array(
			'id' => '19',
			'created' => '2010-12-14 17:50:54',
			'modified' => '2010-12-27 13:28:01',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'New Item Activated',
			'description' => 'Your new item has been approved and activated now',
			'subject' => 'New Item Activated - ##ITEM_NAME##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Dear ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your new item has been activated.</p>
        
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Item Name: ##ITEM_NAME##</p>
		
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">URL: ##ITEM_URL##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME##,  

Your new item has been activated. 

Item Name: ##ITEM_NAME## 

URL: ##ITEM_URL##

Thanks, 
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'ITEM_NAME,USERNAME,ITEM_URL,SITE_NAME,SITE_LINK',
			'is_html' => '1'
		),
		array(
			'id' => '20',
			'created' => '0000-00-00 00:00:00',
			'modified' => '2011-06-03 13:28:06',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Auto refund notification',
			'description' => 'Internal message will be sent to the Booker mentioning the security deposit was refunded, when the booked item checkout without any due within the auto refund limit.',
			'subject' => 'Your security deposit has refunded',
			'email_content' => '<div style=\"padding: 10px; width: 650px; margin: auto;\">
<div style=\"width: 610px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Dear 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Item ##ITEM_NAME## security deposit amount ##AMOUNT## has been refunded.</p>
        
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booked item:</b> ##ITEM_NAME##</p>
        
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\"><b>Booking no:</b> ###ORDERNO##</p>
       
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">You are receiving this email because you opted in at our website ##SITE_NAME##.</p></td>
        </tr>
		<tr>
          <td><p style=\" color: #fff; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">If you don\'t want to receive these emails in the future, please click: <a style=\"color: #333333;\" title=\"Unsubscribe ##SITE_NAME##\" href=\"##UNSUBSCRIBE_LINK##\" target=\"_blank\">Unsubscribe</a></p></td>
        </tr>
  </tbody></table>
</div>
<table width=\"650px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME##,   

Item ##ITEM_NAME## security deposit amount ##AMOUNT## has been refunded.

Booked item: ##ITEM_NAME##

Booking no: ###ORDERNO##

Thanks, 
##SITE_NAME##
##SITE_URL##

You are receiving this email because you opted in at our website ##SITE_NAME##. 
If you don\'t want to receive these emails in the future, please click: ##UNSUBSCRIBE_LINK##',
			'email_variables' => 'USERNAME, ITEM_NAME, ORDERNO, AMOUNT',
			'is_html' => '1'
		),
		array(
			'id' => '21',
			'created' => '2010-12-14 17:50:54',
			'modified' => '2010-12-27 13:28:01',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Membership Fee',
			'description' => 'Pay Membership Fee',
			'subject' => '[##SITE_NAME##] - Pay Membership Fee',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Dear
          ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">You have successfully registered with our site ##SITE_NAME##. Please pay your membership fee for activate your account.</p>
        <a href=\"##MEMBERSHIP_URL##\" style=\"color:#F47564; font-size:14px;\" title=\"##MEMBERSHIP_URL##\" target=\"_blank\">##MEMBERSHIP_URL##.</a>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; border-top: 1px solid #d5d5d5; color:#333333; margin: 15px 0 0 0; line-height:20px; font-size: 12px; text-align: left; padding: 10px 0px;\">Note: If you paid membership fee then please ignore this email. Thanks for signup with us.</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME##,   

You have successfully registered with our site ##SITE_NAME##. Please pay your membership fee for activate your account.

##MEMBERSHIP_URL##.

Thanks, 
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'USERNAME,MEMBERSHIP_URL,SITE_NAME,SITE_LINK',
			'is_html' => '1'
		),
		array(
			'id' => '22',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Launch mail',
			'description' => 'we will send this mail to inform user that the site launched.',
			'subject' => ' ##SITE_NAME## Launched',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Dear Subscriber,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##SITE_NAME## Launched ##SITE_NAME## team want to add you as a user in ##SITE_NAME##.Click the below link to join us...</p>
        <a href=\"##MEMBERSHIP_URL##\" style=\"color:#F47564; font-size:14px;\" title=\"##INVITE_LINK##\" target=\"_blank\">##INVITE_LINK##</a>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear Subscriber,

##SITE_NAME##  Launched
##SITE_NAME## team want to add you as a user in ##SITE_NAME##.Click the below link to join us...
##INVITE_LINK##

Thanks, 
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME, SITE_URL,INVITE_LINK,',
			'is_html' => ''
		),
		array(
			'id' => '23',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Prelaunch subscription email confirmation',
			'description' => 'Email confirmation for pre lanuch mode subscription',
			'subject' => 'Email Confirmation',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Hi,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your subscription made successfully. You need to do one more step to confirm your email address. This confirmation is recommended to receive further valuable email from us.</p>
		
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 15px 0 0 0; line-height:20px; font-size: 12px; text-align: left; padding: 10px 0px;\">Please visit the following URL to confirm your email
##VERIFICATION_URL##</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi,

Your subscription made successfully. You need to do one more step to confirm your email address. This confirmation is recommended to receive further valuable email from us.

Please visit the following URL to confirm your email
##VERIFICATION_URL##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME, VERIFICATION_URL, SITE_URL',
			'is_html' => ''
		),
		array(
			'id' => '24',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Private Beta mail',
			'description' => 'we will send this mail to inform user that the site move to Private Beta.',
			'subject' => '##SITE_NAME## moved to Private Beta',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Dear Subscriber,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##SITE_NAME##  moved to Private Beta, Click the below link to join us... ##INVITE_LINK##</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Invite Code: ##INVITE_CODE##</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear Subscriber,

##SITE_NAME##  moved to Private Beta, Click the below link to join us...
##INVITE_LINK##

Invite Code: ##INVITE_CODE##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME, SITE_URL,INVITE_LINK,',
			'is_html' => ''
		),
		array(
			'id' => '25',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Invite User',
			'description' => 'we will send this mail to invite user for private beta.',
			'subject' => 'Welcome to ##SITE_NAME##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Dear Subscriber,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##SITE_NAME## team want to add you as a user in ##SITE_NAME##.Click the below link to join us..</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##INVITE_LINK##</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Invite Code: ##INVITE_CODE##</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear Subscriber,

##SITE_NAME## team want to add you as a user in ##SITE_NAME##.Click the below link to join us...
##INVITE_LINK##

Invite Code: ##INVITE_CODE##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME, SITE_URL,INVITE_LINK,',
			'is_html' => ''
		),
		array(
			'id' => '26',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Invite Friend',
			'description' => 'we will send this mail to invite friend for private beta.',
			'subject' => 'Welcome to ##SITE_NAME##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Dear Subscriber,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your friend ##USER_NAME## has invited you to join ##SITE_NAME##. Click the below link to join us... </p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##INVITE_LINK##</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Invite Code: ##INVITE_CODE##</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear Subscriber,

Your friend ##USER_NAME## has invited you to join ##SITE_NAME##. Click the below link to join us...
##INVITE_LINK##

Invite Code: ##INVITE_CODE##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => 'SITE_NAME, SITE_URL,INVITE_LINK,',
			'is_html' => ''
		),
		array(
			'id' => '27',
			'created' => '2013-10-07 18:50:02',
			'modified' => '2013-10-07 18:50:02',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Item User Change Status Alert',
			'description' => 'we will send this when a item user status change.',
			'subject' => '[##SITE_NAME##][##ITEM##] Booking Status: ##PREVIOUS_STATUS## -> ##CURRENT_STATUS##',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:#F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: #F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          Hi,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Status was changed for booking \"##ITEM_NAME##\".</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Status: ##PREVIOUS_STATUS## -> ##CURRENT_STATUS##</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">##SEATS##</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Please click the following link to view the item,
##ITEM_NAME##</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:#F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:#F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi,

Status was changed for booking \"##ITEM_NAME##\".

Status: ##PREVIOUS_STATUS## -> ##CURRENT_STATUS##

##SEATS##

Please click the following link to view the item,
##ITEM_URL##

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_variables' => '##ITEM_NAME##,##PREVIOUS_STATUS##,##CURRENT_STATUS##',
			'is_html' => ''
		),
		array(
			'id' => '28',
			'created' => '2013-10-08 13:49:32',
			'modified' => '2013-10-08 13:49:32',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Failed Social User',
			'description' => 'we will send this mail, when user submit the forgot password form and the user users social network websites like twitter, facebook to register.',
			'subject' => 'Forgot password request failed',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:# F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: # F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi 
        ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Your forgot password request was failed because you have registered via ##OTHER_SITE## site.</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:# F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi ##USERNAME##, 

Your forgot password request was failed because you have registered via ##OTHER_SITE## site.

Thanks, 
##SITE_NAME## 
##SITE_URL##',
			'email_variables' => 'CONTENT,SITE_NAME, SITE_URL,OTHER_SITE',
			'is_html' => ''
		),
		array(
			'id' => '29',
			'created' => '2013-10-08 13:52:01',
			'modified' => '2013-10-08 13:52:01',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Failed Forgot Password',
			'description' => 'we will send this mail, when user submit the forgot password form.',
			'subject' => 'Forgot password request failed',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:# F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: # F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Hi there,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">You (or someone else) entered this email address when trying to change the password of an ##user_email## account.</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">However, this email address is not in our registered users and therefore the attempted password request has failed. If you are our customer and were expecting this email, please try again using the email you gave when opening your account.</p>
		<p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">If you are not an ##SITE_NAME## customer, please ignore this email. If you did not request this action and feel this is an error, please contact us ##SUPPORT_EMAIL##.</p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:# F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Hi there,

You (or someone else) entered this email address when trying to change the password of an ##user_email## account.

However, this email address is not in our registered users and therefore the attempted password request has failed. If you are our customer and were expecting this email, please try again using the email you gave when opening your account.

If you are not an ##SITE_NAME## customer, please ignore this email. If you did not request this action and feel this is an error, please contact us ##SUPPORT_EMAIL##.

Thanks, 
##SITE_NAME## 
##SITE_URL##',
			'email_variables' => 'CONTENT,SITE_NAME, SITE_URL',
			'is_html' => ''
		),
		array(
			'id' => '30',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Password changed',
			'description' => 'we will send this mail, when user changed his password.',
			'subject' => 'Password changed',
			'email_content' => '<div style=\"padding: 10px; width: 720px; margin: auto;\">
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; text-align: center; font-size: 10px; color:#333333; margin: 3px;\">
        Be sure to add
        <a href=\"mailto:##FROM_EMAIL##\" style=\"color:# F47564;\" title=\"Add ##FROM_EMAIL## to your whitelist\" target=\"_blank\">##FROM_EMAIL##</a>
        to your address book or safe sender list so our emails get to your inbox.      </p>
    </td>
  </tr>
</tbody></table>
<div style=\"width: 670px; margin: 5px 0pt; padding: 15px; background-repeat: no-repeat; border: 3px solid #F47564; background-color: #FEF4F3;\">
  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255); margin-bottom:5px; border-bottom:3px solid #F47564;\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\">
    <h1 style=\"color:#333333; margin: 0pt 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
          <a target=\"_blank\" title=\"##SITE_NAME##\" style=\"color: # F47564;\" href=\"##SITE_URL##\">
          <img style=\"border-style: none solid none none; border-color: border-width: 0px 1px 0px 0px; padding-right: 15px;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" width=\"186px\"/></a>
        </h1></td>
  </tr>
</table>
 <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
  <tr>
    <td style=\"padding: 20px 20px 5px;\"> <h2 style=\"color:#333333; border-bottom:1px solid #dddddd; padding:0 0 5px 0; margin: 0 0 5px; font-family: verdana,Helvetica,Arial,sans-serif; font-size: 15px;\">
		Dear ##USERNAME##,
        </h2></td>
  </tr>
</table>

  <table width=\"100%\" style=\"background-color: rgb(255, 255, 255);\">
    <tbody>
    <tr>
      <td style=\"padding:0 20px 0 20px;\">
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color:#333333; margin: 0pt 0; line-height:20px; font-size: 14px; text-align: left; padding: 10px 0px;\">Successfully you have changed your password at ##SITE_NAME##. If you did not request this action , please contact us ##SUPPORT_EMAIL## </p>
      </td>
    </tr>
    <tr>
      <td>
        <div style=\"border-top: 1px solid #d5d5d5; padding: 15px 30px 25px; margin: 0pt 20px;\">
          <h4 style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 20px; font-weight: 700; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color:# F47564;\">
            Thanks,          </h4>
          <h5 style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #333333; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">
            ##SITE_NAME## -
            <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_URL##</a>          </h5>
        </div>
      </td>
    </tr>
  </tbody></table>
  <table width=\"100%\" style=\"margin-top: 2px; background-color: #F47564;\">
    <tbody><tr>
      <td>
        <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; color: #fff; font-weight: 700; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">
          Need help? Have feedback? Feel free to
          <a href=\"##CONTACT_URL##\" title=\"Contact ##SITE_NAME##\" target=\"_blank\" style=\"color:#fff;\">Contact Us</a>        </p>
      </td>
    </tr>
  </tbody></table>
</div>
<table width=\"720px\" cellspacing=\"0\" cellpadding=\"0\">
  <tbody><tr>
    <td align=\"center\">
      <p style=\"font-family: verdana,Helvetica,Arial,sans-serif; font-size: 10px; color: #333333; margin: 3px; padding-top: 10px;\">
        Delivered by
        <a href=\"##SITE_URL##\" style=\"color:# F47564;\" title=\"##SITE_NAME##\" target=\"_blank\">##SITE_NAME##</a></p>
    </td>
  </tr>
</tbody>
</table>
  </div>',
			'email_text_content' => 'Dear ##USERNAME##, 

Successfully you have changed your password at ##SITE_NAME##. If you did not request this action , please contact us ##SUPPORT_EMAIL## 

Thanks, 
##SITE_NAME## 
##SITE_URL##',
			'email_variables' => 'USERNAME, RESET_URL, SITE_NAME, SITE_URL',
			'is_html' => ''
		),
		array(
			'id' => '31',
			'created' => '0000-00-00 00:00:00',
			'modified' => '0000-00-00 00:00:00',
			'from' => '##FROM_EMAIL##',
			'reply_to' => '##REPLY_TO_EMAIL##',
			'name' => 'Invite New User',
			'description' => 'we will send this mail to invite user by other user',
			'subject' => 'Welcome to ##SITE_NAME##',
			'email_content' => 'Dear ##USER_NAME##,

##OTHER_USER_NAME## has invited you to the site ##SITE_NAME## (##INVITE_LINK##)

Thanks,
##SITE_NAME##
##SITE_URL##',
			'email_text_content' => '<link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\" />
<div style=\"margin: 5px 0pt; padding: 20px; width: 700px; font-family: Open Sans,sans-serif; background-color: #f2f2f2; background-repeat: no-repeat;-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;\">
  <table cellspacing=\"0\" cellpadding=\"0\" width=\"720px\">
    <tbody>
      <tr>
        <td align=\"center\"><p style=\"text-align: center; font-size: 11px; color: #929292; margin: 3px;\">Be sure to add <a style=\"color: #30BCEF;\" title=\"Add ##FROM_EMAIL## to your whitelist\" href=\"mailto:##FROM_EMAIL##\" target=\"_blank\">##FROM_EMAIL##</a> to your address book or safe sender list so our emails get to your inbox.</p></td>
      </tr>
    </tbody>
  </table>
  <div style=\"border-bottom: 1px solid #ccc; margin: 0pt; background: -moz-linear-gradient(top, #ffffff 0%, #f2f2f2 100%);
background: -webkit-linear-gradient(top, #ffffff 0%,#f2f2f2 100%);
background: -o-linear-gradient(top, #ffffff 0%,#f2f2f2 100%);
background: -ms-linear-gradient(top, #ffffff 0%,#f2f2f2 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#ffffff\', endColorstr=\'#f2f2f2\',GradientType=0 ); 

 min-height: 70px;\">
<table cellspacing=\"0\" cellpadding=\"0\" width=\"700\">
<tbody>
<tr>
<td  valign=\"top\" style=\"padding:14px 0 0 10px; width: 110px; min-height: 37px;\"><a style=\"color: #0981be;\" title=\"##SITE_NAME##\" href=\"#\" target=\"_blank\"></a><a style=\"color: #0981be;\" title=\"##SITE_NAME##\" href=\"#\" target=\"_blank\"><img style=\"padding-right: 15px; border: 0px 1px 0px 0px none solid none none -moz-use-text-color #333333 -moz-use-text-color -moz-use-text-color;\" src=\"##SITE_URL##/img/logo.png\" alt=\"[Image: ##SITE_NAME##]\" /></a></td>
<td width=\"505\" align=\"center\" valign=\"top\" style=\"padding-left: 15px; width: 250px; padding-top: 16px;\"><a style=\"color: #0981be;\" title=\"##SITE_NAME##\" href=\"#\" target=\"_blank\"></a></td>
<td width=\"21\" align=\"right\" valign=\"top\" style=\"padding-right: 20px; padding-top: 21px;\">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
  
  <div style=\" padding: 20px; background-repeat: no-repeat; background-color: #ffffff; box-shadow: 0 0 7px rgba(0, 0, 0, 0.067);\">
    <table style=\"background-color: #ffffff;\" width=\"100%\">
      <tbody>        
        <tr>
          <td style=\"padding: 20px 30px 5px;\"><p style=\"color: #545454; font-size: 18px;\">Dear ##USERNAME##,</p>
            <table border=\"0\" width=\"100%\">
              <tbody>
                <tr>
                  <td><p style=\" color: #545454; margin: 0pt 20px; font-size: 16px; text-align: left; padding: 5px 0px;\">##OTHER_USER_NAME## has invited you to the site ##SITE_NAME## (##INVITE_LINK##)</p></td>
                </tr>
              </tbody>
            </table>
            <p style=\" color: #545454; margin: 0pt 20px; font-size: 16px; text-align: center; padding: 15px 0px;\">&nbsp;</p></td>
        </tr>
        <tr>
          <td><div style=\"border-top: 1px solid #d6d6d6; padding: 15px 30px 25px; margin: 0pt 30px;\">
              <h4 style=\" font-size: 22px; font-weight: bold; text-align: center; margin: 0pt 0pt 5px; line-height: 26px; color: #30BCEF;\">Thanks,</h4>
              <h5 style=\" color: #545454; line-height: 20px; text-align: center; margin: 0pt; font-size: 16px;\">##SITE_NAME## - <a style=\"color: #30BCEF;\" title=\"##SITE_NAME## - Collective Buying Power\" href=\"##SITE_LINK##\" target=\"_blank\">##SITE_URL##</a></h5>
            </div></td>
        </tr>
      </tbody>
    </table>
    <table style=\"margin-top: 2px; background-color: #f5f5f5;\" width=\"100%\">
      <tbody>
        <tr>
          <td><p style=\" color: #000; font-size: 12px; text-align: center; line-height: 16px; margin: 10px;\">Need help? Have feedback? Feel free to <a style=\"color: #30BCEF;\" title=\"Contact ##SITE_NAME##\" href=\"##CONTACT_URL##\" target=\"_blank\">Contact Us</a></p></td>
        </tr>
      </tbody>
    </table>
  </div>
  <table cellspacing=\"0\" cellpadding=\"0\" width=\"720px\">
    <tbody>
      <tr>
        <td align=\"center\"><p style=\"font-size: 11px; color: #929292; margin: 3px; padding-top: 10px;\">Delivered by <a style=\"color: #30BCEF;\" title=\"##SITE_NAME##\" href=\"##SITE_LINK##\" target=\"_blank\">##SITE_NAME##</a></p></td>
      </tr>
    </tbody>
  </table>
</div>',
			'email_variables' => '##USER_NAME##,##OTHER_USER_NAME##, ##SITE_NAME##,##SITE_URL##',
			'is_html' => ''
		),
	);

}
