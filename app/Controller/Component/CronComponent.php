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
class CronComponent extends Component
{
	public function main() 
    {
        $this->_cronsInPlugin('main');
    }
    public function daily() 
    {
        $this->_cronsInPlugin('daily');
    }
    public function _cronsInPlugin($function) 
    {
        $plugins = explode(',', Configure::read('Hook.bootstraps'));
        if (!empty($plugins)) {
            App::uses('ComponentCollection', 'Controller');
            $collection = new ComponentCollection();
            foreach($plugins AS $plugin) {
                $pluginName = Inflector::camelize($plugin);
                if (file_exists(APP . 'Plugin' . DS . $pluginName . DS . 'Controller' . DS . 'Component' . DS . $pluginName . 'CronComponent.php')) {
                    $pluginComponent = $pluginName . 'CronComponent';
                    App::uses($pluginComponent, $pluginName . '.Controller/Component');
                    $cronObj = new $pluginComponent($collection);
                    if (method_exists($cronObj, $function)) {
                        $cronObj->{$function}();
                    }
                }
            }
        }
    }
}
?>