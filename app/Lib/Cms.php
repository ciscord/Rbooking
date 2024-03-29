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
class Cms
{
    /**
     * Loads plugin's routes.php from app/config/routes.php.
     *
     * Plugin name is added to Hook.routes key of Configure object.
     *
     * @param string $pluginName plugin name
     */
    public static function hookRoutes($pluginName) 
    {
        $hooks = Configure::read('Hook.routes');
        if (!$hooks || !is_array($hooks)) {
            $hooks = array();
        }
        $hooks[] = $pluginName;
        Configure::write('Hook.routes', $hooks);
    }
    /**
     * Loads as a normal component from controller.
     *
     * @param string $controllerName Controller Name
     * @param mixed $componentName  Component name or array of Component and settings
     */
    public static function hookComponent($controllerName, $componentName) 
    {
        if (is_string($componentName)) {
            $componentName = array(
                $componentName
            );
        }
        self::hookControllerProperty($controllerName, 'components', $componentName);
    }
    /**
     * Attaches Behavior to a Model whenever loaded.
     *
     * @param string $modelName
     * @param string $behaviorName
     * @param array  $config
     */
    public static function hookBehavior($modelName, $behaviorName, $config = array()) 
    {
        self::hookModelProperty($modelName, 'actsAs', array(
            $behaviorName => $config
        ));
    }
    /**
     * Loads as a normal helper via controller.
     *
     * @param string $controllerName
     * @param mixed $helperName Helper name or array of Helper and settings
     */
    public static function hookHelper($controllerName, $helperName) 
    {
        if (is_string($helperName)) {
            $helperName = array(
                $helperName
            );
        }
        self::hookControllerProperty($controllerName, 'helpers', $helperName);
    }
    /**
     * Shows plugin's admin_menu element in admin navigation under Extensions.
     *
     * @param string $pluginName
     */
    public static function hookAdminMenu($pluginName) 
    {
        $pluginName = Inflector::underscore($pluginName);
        Configure::write('Admin.menus.' . $pluginName, 1);
    }
    /**
     * In admin panel for the provided action, the link will appear in table rows under 'Actions' column.
     *
     * @param string $action in the format ControllerName/action_name
     * @param string $title Link title
     * @param string $url
     */
    public static function hookAdminRowAction($action, $title, $url, $options = array()) 
    {
        $rowActions = Configure::read('Admin.rowActions');
        if (!is_array($rowActions)) {
            $rowActions = array();
        }
        if (!isset($rowActions[$action])) {
            $rowActions[$action] = array();
        }
        $rowActions[$action][$title] = array(
            'url' => $url,
            'options' => $options
        );
        Configure::write('Admin.rowActions', $rowActions);
    }
    /**
     * Admin tab
     *
     * @param string $action  in the format ControllerName/action_name
     * @param string $title   Tab title
     * @param string $element element name, like plugin_name.element_name
     * @param array  $options array with options for the hook to take effect
     */
    public static function hookAdminTab($action, $title, $element, $options = array()) 
    {
        $tabs = Configure::read('Admin.tabs');
        if (!is_array($tabs)) {
            $tabs = array();
        }
        if (!isset($tabs[$action])) {
            $tabs[$action] = array();
        }
        $tabs[$action][$title]['element'] = $element;
        $tabs[$action][$title]['options'] = $options;
        Configure::write('Admin.tabs', $tabs);
    }
    /**
     * Hook model property
     *
     * Useful when models need to be associated to another one, setting Behaviors, disabling cache, etc.
     *
     * @param string $modelName Model name (for e.g., Node)
     * @param string $property  for e.g., actsAs
     * @param string $value     array or string
     */
    public static function hookModelProperty($modelName, $property, $value) 
    {
        $configKeyPrefix = 'Hook.model_properties';
        self::_hookProperty($configKeyPrefix, $modelName, $property, $value);
    }
    /**
     * Hook controller property
     *
     * @param string $controllerName Controller name (for e.g., Nodes)
     * @param string $property       for e.g., components
     * @param string $value          array or string
     */
    public static function hookControllerProperty($controllerName, $property, $value) 
    {
        $configKeyPrefix = 'Hook.controller_properties';
        self::_hookProperty($configKeyPrefix, $controllerName, $property, $value);
    }
    /**
     * Hook property
     *
     * @param string $configKeyPrefix
     * @param string $name
     * @param string $property
     * @param string $value
     */
    protected static function _hookProperty($configKeyPrefix, $name, $property, $value) 
    {
        $propertyValue = Configure::read($configKeyPrefix . '.' . $name . '.' . $property);
        if (!is_array($propertyValue)) {
            $propertyValue = null;
        }
        if (is_array($value)) {
            if (is_array($propertyValue)) {
                $propertyValue = Set::merge($propertyValue, $value);
            } else {
                $propertyValue = $value;
            }
        } else {
            $propertyValue = $value;
        }
        Configure::write($configKeyPrefix . '.' . $name . '.' . $property, $propertyValue);
    }
    /**
     * Applies properties set from hooks to an object in __construct()
     *
     * @param string $configKey
     */
    public static function applyHookProperties($configKey, &$object = null) 
    {
        $objectName = empty($object->name) ? get_class($object) : $object->name;
        $hookProperties = Configure::read($configKey . '.' . $objectName);
        if (is_array(Configure::read($configKey . '.*'))) {
            $hookProperties = Set::merge(Configure::read($configKey . '.*') , $hookProperties);
        }
        if (is_array($hookProperties)) {
            foreach($hookProperties as $property => $value) {
                if (!isset($object->$property)) {
                    $object->$property = $value;
                } else {
                    if (is_array($object->$property)) {
                        if (is_array($value)) {
                            $object->$property = Set::merge($object->$property, $value);
                        } else {
                            $object->$property = $value;
                        }
                    } else {
                        $object->$property = $value;
                    }
                }
            }
        }
    }
    /**
     * Convenience method to dispatch event.
     *
     * Creates, dispatches, and returns a new CakeEvent object.
     *
     * @see CakeEvent::__construct()
     * @param string $name Name of the event
     * @param object $subject the object that this event applies to
     * @param mixed $data any value you wish to be transported with this event
     */
    public static function dispatchEvent($name, $subject, $data = null) 
    {
        $event = new CakeEvent($name, $subject, $data);
        $subject->getEventManager()->dispatch($event);
        return $event;
    }
}
