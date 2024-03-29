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
class Message extends AppModel
{
    public $name = 'Message';
    //$validate set in __construct for multi-language support
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $actsAs = array(
        'Aggregatable',
        'Polymorphic' => array(
            'classField' => 'class',
            'foreignKey' => 'foreign_id',
        )		
    );
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ) ,
        'OtherUser' => array(
            'className' => 'User',
            'foreignKey' => 'other_user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ) ,
        'MessageContent' => array(
            'className' => 'Items.MessageContent',
            'foreignKey' => 'message_content_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ) ,
        'Item' => array(
            'className' => 'Items.Item',
            'foreignKey' => 'item_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ) ,
        'ItemUser' => array(
            'className' => 'Items.ItemUser',
            'foreignKey' => 'item_user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ) ,
        'ItemUserStatus' => array(
            'className' => 'Items.ItemUserStatus',
            'foreignKey' => 'item_user_status_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ) ,
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
		$this->_permanentCacheAssociatedUsers = array(
			'other_user_id',
			'user_id',
		);
        $this->validate = array(
            'message_content_id' => array(
                'numeric'
            ) ,
            'message_folder_id' => array(
                'numeric'
            ) ,
            'is_sender' => array(
                'numeric'
            ) ,
            'subject' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            ) ,
            'amount' => array(
                'rule1' => array(
                    'rule' => 'notempty',
                    'message' => __l('Required')
                )
            ) ,
            'message' => array(
                'rule' => 'notempty',
                'allowEmpty' => false,
                'message' => __l('Required')
            )
        );
        $this->moreActions = array(
            ConstMoreAction::Suspend => __l('Suspend') ,
            ConstMoreAction::Unsuspend => __l('Unsuspend') ,
            ConstMoreAction::Flagged => __l('Flag') ,
            ConstMoreAction::Unflagged => __l('Clear flag') ,
            ConstMoreAction::Delete => __l('Delete') ,
        );
    }
    function myUsedSpace()
    {
        // to retreive my used mail space
        $size = $this->find('all', array(
            'conditions' => array(
                'is_deleted' => 0,
                'OR' => array(
                    array(
                        'Message.user_id' => $_SESSION['Auth']['User']['id']
                    ) ,
                    array(
                        'Message.other_user_id' => $_SESSION['Auth']['User']['id']
                    )
                )
            ) ,
            'fields' => 'SUM(Message.size) AS size',
            'recursive' => -1,
        ));
        return $size[0][0]['size'];
    }
    function myMessagePageSize()
    {
        // it returns the user's imbox page size or default styel decide by config
        $message_page_size = $this->User->UserProfile->find('first', array(
            'conditions' => array(
                'UserProfile.user_id' => $_SESSION['Auth']['User']['id']
            ) ,
            'fields' => array(
                'UserProfile.message_page_size'
            ) ,
            'recursive' => -1
        ));
        if (!empty($message_page_size['UserProfile']['message_page_size'])) {
            $limit = $message_page_size['UserProfile']['message_page_size'];
        } else {
            $limit = Configure::read('messages.page_size');
        }
        return $limit;
    }
    function getMessageOptionArray($folder_type)
    {
        $options = array();
        $options['More actions'] = __l('-- More actions --');
        $options['Mark as read'] = __l('Mark as read');
        $options['Mark as unread'] = __l('Mark as unread');
        $options['Add star'] = __l('Add star');
        $options['Remove star'] = __l('Remove star');
        if ($folder_type != 'inbox' && $folder_type != 'sent') {
            $options['Move to inbox'] = 'Move to inbox';
        }
         return $options;
    }
    function sendNotifications($to, $subject, $message, $order_id, $is_review = 0, $item_id, $item_user_status_id)
    {
        //  to save message content
        $message_content['MessageContent']['id'] = '';
        $message_content['MessageContent']['subject'] = $subject;
        $message_content['MessageContent']['message'] = $message;
        $this->MessageContent->save($message_content);
        $message_id = $this->MessageContent->id;
        $size = strlen($subject) +strlen($message);
        $from = ConstUserIds::Admin;
        $item_user_status_id = !empty($item_user_status_id) ? $item_user_status_id : '0';
        // To save in inbox //
        $is_saved = $this->saveMessage($to, $from, $message_id, ConstMessageFolder::Inbox, 0, 0, 0, $size, $item_id, $order_id, $is_review, $item_user_status_id);
        // To save in sent iteams //
        $is_saved = $this->saveMessage($from, $to, $message_id, ConstMessageFolder::SentMail, 1, 1, 0, $size, $item_id, $order_id, $is_review, $item_user_status_id);
        return $message_id;
    }
    function saveMessage($user_id, $other_user_id, $message_id, $folder_id, $is_sender = 0, $is_read = 0, $parent_id = null, $size, $item_id = null, $order_id = null, $is_review = 0, $item_user_status_id = 0, $item_user_dispute_id = null)
    {
        $message['Message']['message_content_id'] = $message_id;
        $message['Message']['user_id'] = $user_id;
        $message['Message']['other_user_id'] = $other_user_id;
        $message['Message']['message_folder_id'] = $folder_id;
        $message['Message']['is_sender'] = $is_sender;
        $message['Message']['is_read'] = $is_read;
        $message['Message']['parent_message_id'] = $parent_id;
        $message['Message']['size'] = $size;
        $message['Message']['item_id'] = $item_id;
        $message['Message']['item_user_id'] = $order_id;
        $message['Message']['is_review'] = $is_review;
        $message['Message']['item_user_status_id'] = $item_user_status_id;
        $this->create();
        $this->save($message);
        $id = $this->id;
        $hash = md5(Configure::read('Security.salt') . $id);
        $message['Message']['id'] = $id;
        $message['Message']['hash'] = $hash;
        $this->save($message);
        return $id;
    }
}
?>