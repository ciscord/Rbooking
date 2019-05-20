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
class SocialContactsController extends AppController
{
    public $name = 'SocialContacts';
    public function index()
    {
        $this->pageTitle = __l('My Contacts');
		App::import('Model', 'User');
		$this->User = new User();   
		$type = $this->request->params['named']['type'];
		if($type == 'gmail') {
			$type = 'google';
		}
        $conditions['SocialContact.user_id'] = $this->Auth->user('id');
		$conditions['SocialContact.social_source_id'] = constant(sprintf('%s::%s','ConstSocialSource',$type));
		$socialContacts = $this->SocialContact->find('all', array(
            'conditions' => $conditions,
			'contain' => array(
				'SocialContactDetail'
			) ,
			'recursive' => 0
        ));
		if (!empty($socialContacts)) {
			$userFollowers = $this->User->UserFollower->find('all', array(
				'conditions' => array(
					'UserFollower.user_id' => $this->Auth->user('id')
				) ,
				'recursive' => -1
			));
			if (!empty($userFollowers)) {
				foreach($userFollowers as $userFollower) {
					$userFollowerIds[] = $userFollower['UserFollower']['followed_user_id'];
				}
				$user_conditions['User.id'] = $userFollowerIds;
				$users = $this->User->find('list', array(
					'conditions' => $user_conditions,
					'fields' => array(
						'User.id',
						'User.email',
					) ,
					'recursive' => -1
				));
				if (!empty($users)) {
					$conditions['SocialContactDetail.email NOT'] = array_values($users);
				}
			}
			$this->paginate = array(
				'conditions' => $conditions,
				'contain' => array(
					'SocialContactDetail'
				) ,
				'limit' => 15,
				'recursive' => 0
			);
			$this->set('inviteUsers', $this->paginate());
		}
    }
    public function delete($id = null)
    {
		$status = true;
        if (is_null($id)) {
			if ($this->RequestHandler->prefers('json')) {
				$status = false;
				$this->set('iphone_response', array("message" => __l('Invalid request'), "error" => 1));
			}else{
				throw new NotFoundException(__l('Invalid request'));
			}
        }
		if($status){
			if ($this->SocialContact->delete($id)) {
				$type = $this->params['named']['type'];
				$foreign_id = $this->params['named']['foreign_id'];
				$import_action = $this->params['named']['import_action'];
				$this->Session->setFlash(__l('User Contact deleted') , 'default', null, 'success');
				$this->set('iphone_response', array("message" => __l('User Contact deleted'), "error" => 1));
				if (!$this->RequestHandler->prefers('json')) {
					$this->redirect(array(
						'controller' => 'social_marketings',
						'action' => 'publish',
						$foreign_id,
						'type' => $type,
						'publish_action' => $import_action,
					));
				}
			} else {
				if ($this->RequestHandler->prefers('json')) {
					$this->set('iphone_response', array("message" => __l('Invalid request'), "error" => 1));
				}else{
					throw new NotFoundException(__l('Invalid request'));
				}
			}
		}
		if ($this->RequestHandler->prefers('json')) {
				Cms::dispatchEvent('Controller.Record.Delete', $this, array());
		}
    }
    public function update()
    {
		$r = $this->request->data[$this->modelClass]['r'];
        if (!empty($this->request->data['SocialContact'])) {
            unset($this->request->data[$this->modelClass]['r']);
            foreach($this->request->data['SocialContact'] as $contact_id => $is_checked) {
                if ($is_checked['id']) {
                    $contactIds[] = $contact_id;
                }
            }
            if (!empty($contactIds)) {
				$contacts = $this->SocialContact->find('all', array(
					'conditions' => array(
						'SocialContact.id' => $contactIds
					) ,
					'contain' => array(
						'SocialContactDetail'
					) ,
					'recursive' => 1
				));
				if (!empty($contacts)) {
					foreach($contacts as $contact) {
						$emailFindReplace = array(
							'##USER_NAME##' => (!empty($contact['SocialContactDetail']['name'])) ? $contact['SocialContactDetail']['name'] : $contact['SocialContactDetail']['email'],
							'##OTHER_USER_NAME##' => $this->Auth->user('username') ,
							'##INVITE_LINK##' => Router::url('/', true) . 'r:' . $this->Auth->user('username'),
						);
						App::import('Model', 'EmailTemplate');
						$this->EmailTemplate = new EmailTemplate();
						$email_template = $this->EmailTemplate->selectTemplate('Invite New User');
						$this->SocialContact->_sendEmail($email_template, $emailFindReplace, $contact['SocialContactDetail']['email']);
					}
					$this->Session->setFlash(__l('Invite mail has been sent to selected contacts.') , 'default', null, 'success');
				} else {
					$this->Session->setFlash(__l('Please select atleast one contact to invite.') , 'default', null, 'error');
				}
            } else {
				$this->Session->setFlash(__l('Please select atleast one contact to invite.') , 'default', null, 'error');
			}
        }
		$this->redirect($r);
    }
}
?>