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
class ContactsController extends AppController
{
    public $name = 'Contacts';
    public $components = array(
        'Email',
        'RequestHandler'
    );
    public $uses = array(
        'Contact',
        'EmailTemplate'
    );
	public $permanentCacheAction = array(
		'user' => array(
			'add',
		) ,
    );
	public function beforeFilter()
    {
        $this->Security->disabledFields = array(
			'adcopy_response',
			'adcopy_challenge'
        );
        parent::beforeFilter();
    }
    public function add()
    {
		$message = array();
        $this->Contact->create();
        if (!empty($this->request->data)) {     
			$captcha_error = 0;
			if(Configure::read('system.captcha_type') == "Solve Media"){
				if(!$this->Contact->_isValidCaptchaSolveMedia()){
					$captcha_error = 1;
				}
			}
			if(empty($captcha_error)) {
				// todo: json api related code
				if ($this->RequestHandler->prefers('json')) {
					if(isset($this->request->data['email'])){
						$this->request->data['Contact']['first_name'] = $this->request->data['first_name'];
						$this->request->data['Contact']['last_name'] = $this->request->data['last_name'];
						$this->request->data['Contact']['email'] = $this->request->data['email'];
						$this->request->data['Contact']['telephone'] = $this->request->data['telephone'];
						$this->request->data['Contact']['subject'] = $this->request->data['subject'];
						$this->request->data['Contact']['message'] = $this->request->data['message'];
					}
				}			
				$this->Contact->set($this->request->data);
				if ($this->Contact->validates()) {
					$ip = $this->Contact->toSaveIp();
					$this->request->data['Contact']['ip_id'] = $ip;
					$this->request->data['Contact']['user_id'] = $this->Auth->user('id');
					$this->Contact->save($this->request->data, false);
					$emailFindReplace = array(
						'##FIRST_NAME##' => $this->request->data['Contact']['first_name'],
						'##LAST_NAME##' => !empty($this->request->data['Contact']['last_name']) ? ' ' . $this->request->data['Contact']['last_name'] : '',
						'##FROM_EMAIL##' => $this->request->data['Contact']['email'],
						'##FROM_URL##' => Router::url(array(
							'controller' => 'contacts',
							'action' => 'add'
						) , true) ,
						'##SITE_ADDR##' => gethostbyaddr($this->RequestHandler->getClientIP()) ,
						'##IP##' => $this->RequestHandler->getClientIP() ,
						'##TELEPHONE##' => $this->request->data['Contact']['telephone'],
						'##MESSAGE##' => $this->request->data['Contact']['message'],
						'##SUBJECT##' => $this->request->data['Contact']['subject'],
						'##POST_DATE##' => date('F j, Y g:i:s A (l) T (\G\M\TP)') ,
					);
					// send to contact email
                    App::import('Model', 'EmailTemplate');
                    $this->EmailTemplate = new EmailTemplate();
                    $template = $this->EmailTemplate->selectTemplate('Contact Us');
                    $this->Contact->_sendEmail($template, $emailFindReplace, Configure::read('site.contact_email'), $this->request->data['Contact']['email']);
                    // reply email
                    $template = $this->EmailTemplate->selectTemplate('Contact Us Auto Reply');
                    $this->Contact->_sendEmail($template, $emailFindReplace, $this->request->data['Contact']['email']);
					$this->Session->setFlash(__l('Thank you, we received your message and will get back to you as soon as possible.') , 'default', null, 'success');
					if ($this->RequestHandler->prefers('json')) {
						$message =  array(
							'status' => 0,
							'message' => __l('Thank you, we received your message and will get back to you as soon as possible.')
						);
					}else{
						$this->redirect(array(
							'controller' => 'contacts',
							'action' => 'add',
						));
					}
				}
			} else{
				$this->Session->setFlash(__l('Please enter valid captcha') , 'default', null, 'error');
				if ($this->RequestHandler->prefers('json')) {
					$message =  array(
						'status' => 1,
						'message' => __l('Please enter valid captcha')
					);
				}
			}
        } else if ($this->Auth->user('id')) {
			App::import('Model', 'User');
			$this->User = new User();
            $SignedInUserDetail = $this->User->find('first', array(
                'conditions' => array(
                    'User.id' => $this->Auth->user('id')
                ) ,
                'contain' => array(
                    'UserProfile' => array(
                        'fields' => array(
                            'UserProfile.first_name',
                            'UserProfile.last_name'
                        )
                    )
                ) ,
                'recursive' => 0
            ));
            $this->request->data['Contact']['first_name'] = !empty($SignedInUserDetail['UserProfile']['first_name']) ? $SignedInUserDetail['UserProfile']['first_name'] : '';
            $this->request->data['Contact']['last_name'] = !empty($SignedInUserDetail['UserProfile']['last_name']) ? $SignedInUserDetail['UserProfile']['last_name'] : '';
            $this->request->data['Contact']['telephone'] = !empty($SignedInUserDetail['UserProfile']['phone']) ? $SignedInUserDetail['UserProfile']['phone'] : '';
            $this->request->data['Contact']['email'] = !empty($SignedInUserDetail['User']['email']) ? $SignedInUserDetail['User']['email'] : '';
        }
        $this->pageTitle = __l('Contact Us');
		if ($this->RequestHandler->prefers('json')) {
			Cms::dispatchEvent('Controller.User.ContactUs', $this, array(
            'data' => $message
        ));
		}
    }
}
?>