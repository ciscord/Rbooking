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
class DATABASE_CONFIG
{
    // For localhost i.e., development -->
    // *** Note: Do not edit $default and $master for server DB config
    var $default = array(
        'datasource' => 'Database/Postgres',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'postgres',
        'password' => 'ahsan123',
        'database' => 'RBooking_slot',
        'prefix' => '',
        'encoding' => 'UTF8',
        'port' => '5432',
    );
    var $master = array(
        'datasource' => 'Database/Postgres',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'postgres',
        'password' => 'ahsan123',
        'database' => 'RBooking_slot',
        'prefix' => '',
        'encoding' => 'UTF8',
        'port' => '5432',
    );
    var $test = array(
        'datasource' => 'Database/Postgres',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_database_name',
        'prefix' => '',
        'encoding' => 'UTF8',
    );
    // <-- localhost
    // For server i.e., production -->
    // if there is no master/slave, set the values same to both
    var $server_default = array(
        'datasource' => 'Database/Postgres',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'postgres',
        'password' => 'ahsan123',
        'database' => 'RBooking_slot',
        'prefix' => '',
        'encoding' => 'UTF8',
        'port' => '5432',
    );
    var $server_master = array(
        'datasource' => 'Database/Postgres',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'postgres',
        'password' => 'ahsan123',
        'database' => 'RBooking_slot',
        'prefix' => '',
        'encoding' => 'UTF8',
        'port' => '5432',
    );
    var $server_test = array(
        'datasource' => 'Database/Postgres',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_database_name',
        'prefix' => '',
        'encoding' => 'UTF8',
    );
    // <-- server
    public function __construct()
    {
        // When running on production server, switch the db config ...
        if (!empty($_SERVER['SERVER_ADDR']) && $_SERVER['SERVER_ADDR'] != '127.0.0.1') {
            $this->default = $this->server_default;
            $this->master = $this->server_master;
        }
    }
}
?>