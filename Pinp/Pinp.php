<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

spl_autoload_register(array('Pinp', 'autoload'));

if ( @date_default_timezone_set(date_default_timezone_get()) === false ) {
    date_default_timezone_set('UTC');
}

class Pinp {
    protected $view;

    public function __construct( $layout ) {
        $this->view($layout, true);
    }
    
    public static function autoload( $class ) {
        if ( strpos($class, 'Pinp') !== 0 ) {
            return;
        }
        $file = dirname(__FILE__) . '/' . str_replace('_', DIRECTORY_SEPARATOR, substr($class,4)) . '.php';
        if ( file_exists($file) ) {
            require $file;
        }
    }

    public function view( $layout, $viewClass = null ) {
        if ( !is_null($viewClass) ) {
            if ( $viewClass instanceOf Pinp_View ) {
                $this->view = $viewClass;
            } else {
                $this->view = new Pinp_View($layout);
            }
        }
        return $this->view;
    }
}

/* End of file Pinp.php */
/* Location: ./Pinp/Pinp.php */
