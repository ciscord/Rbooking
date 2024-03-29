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
/**
 * Behavior for simple usage of Sphinx search engine
 * http://www.sphinxsearch.com
 *
 * @copyright 2008, Vilen Tambovtsev
 * @author  Vilen Tambovtsev
 * @license      http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class SphinxBehavior extends ModelBehavior
{
    /**
     * Used for runtime configuration of model
     */
    var $runtime = array();
    var $_defaults = array(
        'server' => 'localhost',
        'port' => 3312
    );
    /**
     * Spinx client object
     *
     * @var SphinxClient
     */
    var $sphinx = null;
    function setup(&$model, $config = array()) 
    {
        $settings = array_merge($this->_defaults, (array)$config);
        $this->settings[$model->alias] = $settings;
        App::import('Vendor', 'sphinxapi');
        $this->runtime[$model->alias]['sphinx'] = new SphinxClient();
        $this->runtime[$model->alias]['sphinx']->SetServer($this->settings[$model->alias]['server'], $this->settings[$model->alias]['port']);
    }
    /**
     * beforeFind Callback
     *
     * @param array $query
     * @return array Modified query
     * @access public
     */
    function beforeFind(&$model, $query) 
    {
        if (empty($query['sphinx']) || empty($query['search'])) return true;
        //pr($query);
        if ($model->findQueryType == 'count') {
            $model->recursive = -1;
            $query['limit'] = 1;
        }
        foreach($query['sphinx'] as $key => $setting) {
            switch ($key) {
                case 'filter':
                    foreach($setting as $arg) {
                        $arg[2] = empty($arg[2]) ? false : $arg[2];
                        $this->runtime[$model->alias]['sphinx']->SetFilter($arg[0], (array)$arg[1], $arg[2]);
                    }
                    break;

                case 'filterRange':
                case 'filterFloatRange':
                    $method = 'Set' . $key;
                    foreach($setting as $arg) {
                        $arg[3] = empty($arg[3]) ? false : $arg[3];
                        $this->runtime[$model->alias]['sphinx']->{$method}($arg[0], (array)$arg[1], $arg[2], $arg[3]);
                    }
                    break;

                case 'matchMode':
                    $this->runtime[$model->alias]['sphinx']->SetMatchMode($setting);
                    break;

                case 'sortMode':
                    $this->runtime[$model->alias]['sphinx']->SetSortMode(key($setting) , reset($setting));
                    break;

                default:
                    break;
            }
        }
        $this->runtime[$model->alias]['sphinx']->SetLimits(($query['page']-1) *$query['limit'], $query['limit']);
        $indexes = !empty($query['sphinx']['index']) ? implode(',', $query['sphinx']['index']) : '*';
        //pr($model->alias);
        //pr($query['search']);
        $result = $this->runtime[$model->alias]['sphinx']->Query($query['search'], $indexes);
        //pr($result);
        if ($result === false) {
            trigger_error("Search query failed: " . $this->runtime[$model->alias]['sphinx']->GetLastError());
            return false;
        } else if (isset($result['matches'])) {
            if ($this->runtime[$model->alias]['sphinx']->GetLastWarning()) {
                trigger_error("Search query warning: " . $this->runtime[$model->alias]['sphinx']->GetLastWarning());
            }
        }
        unset($query['conditions']);
        unset($query['order']);
        unset($query['offset']);
        $query['page'] = 1;
        if ($model->findQueryType == 'count') {
            $result['total'] = !empty($result['total']) ? $result['total'] : 0;
            $query['fields'] = 'ABS(' . $result['total'] . ') AS count';
        } else {
            if (isset($result['matches'])) $ids = array_keys($result['matches']);
            else $ids = array(
                0
            );
            $query['conditions'] = array(
                $model->alias . '.' . $model->primaryKey => $ids
            );
            $query['order'] = 'FIND_IN_SET(' . $model->alias . '.' . $model->primaryKey . ', \'' . implode(',', $ids) . '\')';
        }
        return $query;
    }
}
?>