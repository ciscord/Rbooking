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
$controllers = Cache::read('controllers_list', 'default');
if ($controllers === false) {
    $controllers = App::objects('controller');
    foreach($controllers as &$value) {
        $value = Inflector::underscore($value);
    }
    foreach($controllers as $value) {
        $controllers[] = Inflector::singularize($value);
    }
    array_push($controllers, 'admin');
    $controllers = implode('|', $controllers);
    Cache::write('controllers_list', $controllers);
}
CmsRouter::connect('/seats/selection/:order_id/:message', array(
    'controller' => 'custom_price_per_types_seats',
    'action' => 'seat_selection'
) , array(
    'order_id' => '[0-9]+',
    'message' => '[^\/]*'
));
CmsRouter::connect('/seats/selection/:order_id', array(
    'controller' => 'custom_price_per_types_seats',
    'action' => 'seat_selection'
) , array(
    'order_id' => '[0-9]+'
));
?>