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
class HighPerformancesController extends AppController
{
    public $name = 'HighPerformances';
    public function admin_check_s3_connection() 
    {
        App::import('Vendor', 'HighPerformance.S3');
        $s3 = new S3(Configure::read('s3.aws_access_key') , Configure::read('s3.aws_secret_key'));
        $s3->setEndpoint(Configure::read('s3.end_point'));
		$buckets = $s3->listBuckets();
		if (in_array(Configure::read('s3.bucket_name'), $buckets)) {
            $this->Session->setFlash(__l('Bucket name and configuration is ok') , 'default', null, 'success');
        } else {
            $this->Session->setFlash(__l('Problem with the configuration') , 'default', null, 'error');
        }
        if (!empty($_GET['f'])) {
            $this->redirect(Router::url('/', true) . $_GET['f']);
        }
    }
    public function admin_copy_static_contents()
    {
        $this->_copy_content(JS, 'js');
        $this->_copy_content(CSS, 'css');
        $this->_copy_content(IMAGES, 'img');
        $this->_copy_content(WWW_ROOT . DS . 'font', 'font');
        App::import('Model', 'Settings');
        if (!empty($_GET['f'])) {
            $this->Session->setFlash(__l('Static content successfully copied.') , 'default', null, 'success');
            $this->redirect(Router::url('/', true) . $_GET['f']);
        }
    }
    public function _copy_content($dir, $current_dir)
    {
		App::import('Vendor', 'HighPerformance.S3');
		$s3 = new S3(Configure::read('s3.aws_access_key') , Configure::read('s3.aws_secret_key'));
        $handle = opendir($dir);
        while (false !== ($readdir = readdir($handle))) {
            if ($readdir != '.' && $readdir != '..') {
                $path = $dir . '/' . $readdir;
                if (is_dir($path)) {
                    @chmod($path, 0777);
                    if (!strstr($path, "_thumb")) {
                        $this->_copy_content($path, $current_dir . "/" . $readdir);
                    }
                }
                if (is_file($path)) {
                    @chmod($path, 0777);
					$s3->putObjectFile($path, Configure::read('s3.bucket_name') , $current_dir . '/' . $readdir, S3::ACL_PUBLIC_READ);
                    flush();
                }
            }
        }
        closedir($handle);
        return true;
    }
    public function update_content()
    {
		$this->disableCache();
        if ($this->Auth->user('id')) {
            App::import('Model', 'Items.Item');
            $this->Item = new Item();
            if (isPluginEnabled('ItemFavorites')) {
                $followingItemIds = $this->Item->ItemFavorite->find('all', array(
                    'conditions' => array(
                        'ItemFavorite.user_id' => $this->Auth->user('id')
                    ) ,
					'contain' => array(
						'User'
					),
                    'recursive' => -1
                ));
				$this->set('followingItemIds', $followingItemIds);
            }
			if (isPluginEnabled('RequestFavorites')) {
				App::import('Model', 'Requests.Request');
				$this->Request = new Request();
                $followingRequestIds = $this->Request->RequestFavorite->find('all', array(
                    'conditions' => array(
                        'RequestFavorite.user_id' => $this->Auth->user('id')
                    ) ,
                    'fields' => array(
                        'RequestFavorite.request_id'
                    ) ,
                    'recursive' => -1
                ));
				$this->set('followingRequestIds', $followingRequestIds);
            }
			App::import('Model', 'Users.User');
			$this->User = new User();
			if (isPluginEnabled('SocialMarketing')) {
				$followinguserIds = $this->User->UserFollower->find('all', array(
						'conditions' => array(
							'UserFollower.user_id' => $this->Auth->user('id')
						) ,
						'fields' => array(
							'UserFollower.followed_user_id'
						) ,
						'recursive' => -1
					));
				$this->set('followinguserIds', $followinguserIds);
			}
            $ownItemIds = $this->Item->find('list', array(
                'conditions' => array(
                    'Item.user_id' => $this->Auth->user('id')
                ) ,
                'fields' => array(
                    'Item.id',
					'Item.id'
                ) ,
                'recursive' => -1
            ));
			// social connections list
			if ($this->Auth->user('id') && $this->Auth->user('is_show_facebook_friends') && $this->Auth->user('is_facebook_friends_fetched')) {
				$social_conditions['Item.user_id != '] = $this->Auth->user('id');
				$tmpItems = $this->Item->find('list', array(
					'conditions' => $social_conditions,
					'fields' => array(
						'Item.id',
						'Item.user_id',
					) ,
					'recursive' => -1
				));
				$tmpUserItemCount = array_count_values($tmpItems);
				if (!empty($tmpItems)) {
					$user_ids = $this->Item->User->find('list', array(
						'conditions' => array(
							'User.id' => array_keys($tmpUserItemCount) ,
							'User.is_facebook_friends_fetched' => 1
						) ,
						'fields' => array(
							'User.id',
							'User.network_fb_user_id',
						),
						'recursive' => -1,
					));
					if (!empty($user_ids)) {
						$network_level = $this->Item->getFacebookFriendLevel($user_ids);
						$this->set('network_level', $network_level);
					}
				}
			}
			$requestIds = array();
			$ownRequestIds = array();
			if (isPluginEnabled('Requests')) {
				$rids = '';
				if(!empty($_GET['rids'])){$rids=$_GET['rids']; $rids=explode(',',$rids);}
				App::import('Model', 'Requests.Request');
				$this->Request = new Request();
				$requestIds = $this->Request->find('all', array(
					'conditions' => array(
						'Request.id' => $rids
					),
					'recursive' => -1,
				));
				$ownRequestIds = $this->Request->find('list', array(
								'conditions' => array(
									'Request.user_id' => $this->Auth->user('id')
								) ,
								'fields' => array(
									'Request.id',
									'Request.id'
								) ,
								'recursive' => -1
							));		
			}
			$this->set('requestIds', $requestIds);
			$this->set('ownRequestIds', $ownRequestIds);
            $this->set('ownItemIds', $ownItemIds);
		    $user = $this->User->find('first', array(
                'conditions' => array(
                    'User.id' => $this->Auth->user('id') ,
                ) ,
                'recursive' => -1
            ));
            $this->response->modified($user['User']['modified']);
        }
    }
	public function remove_s3_file() {
		if(!empty($this->request->data['url'])) {
			App::import('Vendor', 'HighPerformance.S3');
			$s3 = new S3(Configure::read('s3.aws_access_key'), Configure::read('s3.aws_secret_key'));
			$s3->setEndpoint(Configure::read('s3.end_point'));
			$s3->deleteObject(Configure::read('s3.bucket_name'), $this->request->data['url']);
			exit;
		}
	}
	public function show_Item_comments()
    {
		$this->disableCache();
		if(!empty($this->request->params['named']['id'])) {
			App::import('Model', 'Items.Item');
            $this->Item = new Item();
			$item = $this->Item->find('first',array(
				'conditions' => array(
					'Item.id' => $this->request->params['named']['id']
				) ,
                'recursive' => 0
			));
			$this->set('item', $item);
		}
		$this->layout = 'ajax';
    }
}
?>