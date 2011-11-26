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
 * @since       Version 1.0
 * @filesource
 */

class Pinp() {

    /**
     * Slim auto-loader
     *
     * This method lazy-loads class files when a given class if first used.
     * Class files must exist in the same directory as this file and be named
     * the same as its class definition (excluding the dot and extension).
     *
     * @return void
     */
    public static function autoload( $class ) {
        if ( strpos($class, 'Slim') !== 0 ) {
            return;
        }
        $file = dirname(__FILE__) . '/' . str_replace('_', DIRECTORY_SEPARATOR, substr($class,5)) . '.php';
        if ( file_exists($file) ) {
            require $file;
        }
    }
}

/* End of file Pinp.php */
/* Location: ./Pinp/Pinp.php */
