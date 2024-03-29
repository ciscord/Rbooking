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
class Transaction extends AppModel
{
    public $name = 'Transaction';
    public $actsAs = array(
        'Polymorphic' => array(
            'classField' => 'class',
            'foreignKey' => 'foreign_id',
        )
    );
    //$validate set in __construct for multi-language support
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ) ,
        'TransactionType' => array(
            'className' => 'TransactionType',
            'foreignKey' => 'transaction_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ) ,
        'PaymentGateway' => array(
            'className' => 'PaymentGateway',
            'foreignKey' => 'payment_gateway_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        )
    );
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);
        $this->validate = array(
            'user_id' => array(
                'rule' => 'numeric',
                'allowEmpty' => false,
                'message' => __l('Required')
            ) ,
            'amount' => array(
                'rule2' => array(
                    'rule' => array(
                        'comparison',
                        '>',
                        0
                    ) ,
                    'allowEmpty' => false,
                    'message' => __l('Should be greater than 0')
                ) ,
                'rule1' => array(
                    'rule' => 'numeric',
                    'allowEmpty' => false,
                    'message' => __l('Required')
                ) ,
            )
        );
    }
    function log($foreign_id = null, $class = '', $payment_gateway_id = null, $transaction_type_id = null, $amount = null)
    {
        $model_class = explode('.', $class);
        if (!empty($model_class[1])) {
            $class = $model_class[1];
        }
        App::import('Model', $class);
        $obj = new $class();
        $data = $obj->find('first', array(
            'conditions' => array(
                $class . '.id' => $foreign_id
            ) ,
            'recursive' => -1
        ));
        if ($transaction_type_id == ConstTransactionTypes::SignupFee) {
            $amount = Configure::read('user.signup_fee');
        } elseif ($transaction_type_id == ConstTransactionTypes::ItemListingFee) {
            $amount = $data[$class]['item_fee'];
        } elseif (in_array($transaction_type_id, array(ConstTransactionTypes::BookItem, ConstTransactionTypes::RefundForRejectedBooking, ConstTransactionTypes::RefundForExpiredBooking, ConstTransactionTypes::RefundForCanceledBooking))) {
			$amount = ($data[$class]['original_price']+$data[$class]['booker_service_amount']+$data[$class]['additional_fee_amount']) - $data[$class]['coupon_discount_amont'];
        } elseif (empty($amount) && $transaction_type_id == ConstTransactionTypes::HostAmountCleared) {
            $amount = $data[$class]['original_price']-$data[$class]['host_service_amount'];
        } elseif (empty($amount)) {
            $amount = !empty($data[$class]['price']) ? $data[$class]['price'] : $data[$class]['amount'];
        }
        if ($transaction_type_id == ConstTransactionTypes::SignupFee) {
            $user_id = $foreign_id;
        } elseif (in_array($transaction_type_id, array(
            ConstTransactionTypes::RefundForRejectedBooking,
            ConstTransactionTypes::RefundForExpiredBooking,
            ConstTransactionTypes::RefundForCanceledBooking,
            ConstTransactionTypes::RefundForBookingCanceledByAdmin,
        ))) {
            $user_id = $data[$class]['owner_user_id'];
		} else if (in_array($transaction_type_id, array(ConstTransactionTypes::AdminAddFundToWallet))) {
			$user_id = ConstUserIds::Admin;
        } else {
            $user_id = $data[$class]['user_id'];
        }
        if (in_array($transaction_type_id, array(
            ConstTransactionTypes::SignupFee,
            ConstTransactionTypes::ItemListingFee,
        ))) {
            $receiver_user_id = ConstUserIds::Admin;
        } elseif (in_array($transaction_type_id, array(
            ConstTransactionTypes::HostAmountCleared,
            ConstTransactionTypes::BookItem,
        ))) {
            $receiver_user_id = $data[$class]['owner_user_id'];
		} else if (in_array($transaction_type_id, array(ConstTransactionTypes::AdminDeductFundFromWallet))) {
			$receiver_user_id = ConstUserIds::Admin;
        } else {
            $receiver_user_id = $data[$class]['user_id'];
        }
        $_data = array();
        $_data['Transaction']['user_id'] = $user_id;
        $_data['Transaction']['receiver_user_id'] = $receiver_user_id;
        $_data['Transaction']['foreign_id'] = $foreign_id;
        $_data['Transaction']['class'] = $class;
        $_data['Transaction']['amount'] = $amount;
        $_data['Transaction']['payment_gateway_id'] = $payment_gateway_id;
        $_data['Transaction']['transaction_type_id'] = $transaction_type_id;
		if (in_array($transaction_type_id, array(ConstTransactionTypes::AdminAddFundToWallet, ConstTransactionTypes::AdminDeductFundFromWallet))) {
			 $_data['Transaction']['description'] = $data[$class]['description'];
		}
        $this->create();
        $this->save($_data);
        return $this->getLastInsertId();
    }
}
?>