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
class AffiliateEventHandler extends Object implements CakeEventListener
{
    /**
     * implementedEvents
     *
     * @return array
     */
    public function implementedEvents() 
    {
        return array(
            'View.AdminDasboard.onActionToBeTaken' => array(
                'callable' => 'onActionToBeTakenRender'
            )
        );
    }
    public function onActionToBeTakenRender($event) 
    {
        $view = $event->subject();
        App::import('Model', 'User');
        $user = new User();
        $data['waiting_for_approval'] = $user->AffiliateRequest->find('count', array(
            'conditions' => array(
                'AffiliateRequest.is_approved = ' => ConstAffiliateRequests::Pending,
            ) ,
            'recursive' => -1
        ));
		$data['cash_withdrawal_waiting_for_approval'] = $user->AffiliateCashWithdrawal->find('count', array(
            'conditions' => array(
                'AffiliateCashWithdrawal.affiliate_cash_withdrawal_status_id = ' => ConstAffiliateCashWithdrawalStatus::Pending,
            ) ,
            'recursive' => -1
        ));
        $event->data['content']['AffiliateWithdrawRequests'] = $view->element('Affiliates.admin_action_taken', $data);
        $event->data['content']['AffiliateCashWithdrawRequests'] = $view->element('Affiliates.admin_action_taken', $data);
    }
}
?>