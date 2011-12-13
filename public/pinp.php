<?php
/**
 * pinp.php
 *
 *  Pinp: A small php framework
 *
 * @author      Damien Hodgkin <dracul01@gmail.com>
 * @copyright   Copyright (c) 2011, FourElements Development
 * @license     BSD License http://www.opensource.org/licenses/bsd-license.php
 * @package     pinp
 * @link        http://pinp.us
 * @since       Pinp v 0.0.1
 */

/*
 * APPLICATION ENVIRONMENT
 *
 * Set the apps environment. 
 */
define('ENVIRONMENT', 'development');

/*
 * ERROR REPORTING
 *
 * The error reporting level is determined by the environment.
 *
 * development: E_ALL
 * testing    : NONE
 * production : NONE
 */

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development': error_reporting(E_ALL); break;
        case 'testing': case 'production': error_reporting(0); break;
        default: exit('The application environment is not set correctly.');
    }
}

/* Set BASEPATH */
$sys_path = '../Pinp';
if (realpath($sys_path) !== false) 
    $sys_path = realpath($sys_path).'/';
    
$sys_path = rtrim($sys_path, '/').'/';
define("BASEPATH", str_replace("\\", "/", $sys_path));

/* Set APPPATH */
$app_path = '../app';
if (realpath($app_path) !== false) 
  $app_path = realpath($app_path).'/';

$app_path = rtrim($app_path, '/').'/';
define("APPPATH", str_replace("\\", "/", $app_path));

require BASEPATH . "Pinp.php";

$app = new Pinp('layout.html');

/* End of file pinp.php */
/* Location: ./public/pinp.php */
?>