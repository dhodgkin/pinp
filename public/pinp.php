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


require BASEPATH . "config.php";
require BASEPATH . "Pinp.php";

$app = new Pinp('layout.html');

/* End of file pinp.php */
/* Location: ./public/pinp.php */
?>