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
class FriendsDetailsComponent extends Component
{
    public function startup(Controller $controller)
    {
        App::import('Model', 'SocialMarketing.UserFollower');
        $this->UserFollower = new UserFollower();
        if (!empty($_SESSION['Auth']['User']['id'])) {
			$userFollowers = $this->UserFollower->find('list', array(
				'conditions' => array(
					'UserFollower.user_id' => $_SESSION['Auth']['User']['id']
				) ,
				'fields' => array(
					'UserFollower.id',
					'UserFollower.followed_user_id',
				),
				'recursive' => -1,
			));
			Configure::write('site.friend_ids', $userFollowers);
		}
    }
}
