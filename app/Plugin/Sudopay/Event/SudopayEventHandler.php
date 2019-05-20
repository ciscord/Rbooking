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
class SudopayEventHandler extends Object implements CakeEventListener
{
    /**
     * implementedEvents
     *
     * @return array
     */
    public function implementedEvents()
    {
        return array(
            'View.Payment.GetGatewayList' => array(
                'callable' => 'onGetGatewayList'
            ) ,
        );
    }
    public function onGetGatewayList($event)
    {
        App::import('Model', 'Sudopay.Sudopay');
        $this->Sudopay = new Sudopay();
        $s = $this->Sudopay->getSudoPayObject();
        $gateway_response = $s->callGateways();
		$model = $event->data['model'];
		$foreign_id = $event->data['foreign_id'];
		if (empty($gateway_response['error']['code'])) {
			$event->gatewayGroups = $this->Sudopay->getGatewayGroups($gateway_response, $model, $foreign_id);
			$event->gateways = $this->Sudopay->getGateways($gateway_response, $model, $foreign_id);
			$event->form_fields_tpls = $gateway_response['_form_fields_tpls'];
		}
    }
}
?>