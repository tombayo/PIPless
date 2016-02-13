<?php
/**
 * PIPless v1.0.1
 */

//Start the Session
session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');

// Includes
require(APP_DIR .'config/config.php');
require(ROOT_DIR .'system/pl.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);

PIPless::go();

?>
