<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * config.php Configuration
 *
 *  Pinp is a small php framework
 *
 * @package     pinp
 * @author      Damien Hodgkin <dracul01@gmail.com>
 * @copyright   Copyright (c) 2011, FourElements Development
 * @license     BSD License http://www.opensource.org/licenses/bsd-license.php
 * @link        http://pinp.us
 * @version     0.0.1
 * @filesource
 */

define('ADMIN', false);
define('MAINTAINANCE', false);
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

/* End of file config.php */
/* Location: ./Pinp/config.php */