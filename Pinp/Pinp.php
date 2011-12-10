<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pinp.php The Pinp base class.
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

error_reporting(E_ALL | E_STRICT);

// Set autoloader
spl_autoload_register(array('Pinp', 'autoload'));

// Set timezone if it has not been set.
if ( @date_default_timezone_set(date_default_timezone_get()) === false ) {
    date_default_timezone_set('UTC');
}
class Pinp {
    protected $view;

    /**
     * Pinp constructor
     *
     * This does nothing right now. 
     */
    public function __construct() {}
    
    /**
     * Pinp auto-loader
     *
     * This method lazy-loads class files when a given class if first used.
     * Class files must exist in the same directory as this file and be named
     * the same as its class definition (excluding the dot and extension).
     *
     * @return void
     */
    public static function autoload( $class ) {
        if ( strpos($class, 'Pinp') !== 0 ) {
            return;
        }
        $file = dirname(__FILE__) . '/' . str_replace('_', DIRECTORY_SEPARATOR, substr($class,4)) . '.php';
        if ( file_exists($file) ) {
            require $file;
        }
    }

    public function view( $viewClass = null ) {
        if ( !is_null($viewClass) ) {
        //    $existingData = is_null($this->view) ? array() : $this->view->getData();
            
            if ( $viewClass instanceOf Pinp_View ) {
                $this->view = $viewClass;
            } else {
                $this->view = new Pinp_View();
            }
        //    $this->view->appendData($existingData);
        }
        return $this->view;
    }
}

/* End of file Pinp.php */
/* Location: ./Pinp/Pinp.php */
