<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PinpView.php View class
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

class Pinp_View {
    public function __construct() {}

    public function display( $template ) {
        echo $this->render('layout', $template);
    }

    public static function partial( $template ) {
        echo self::render('partial', $template);
    }

    public static function yield() {
        // TODO: add better handling of views
        echo self::render('view', 'index.html');
    }

    /* prepare the template, clean it up and ship it out for displaying */
    public static function render( $type, $template ) {
        //$file = dirname(__FILE__) . '/' . str_replace('_', DIRECTORY_SEPARATOR, substr($class,4)) . '.php';
        $file = "../app/" . $type . "s/" . $template . ".php";
        if ( file_exists($file) ) {
            ob_start();
            require $file;
            return ob_get_clean();
        }
    }

    /* render the built link */
    public static function linkTo( $data ) {
        echo self::prepareLink($data);
    }

    /* process array of data and builds <link> and <a> tags */
    public static function prepareLink( $data ) {
        if (!is_array($data)) {
            return;
        } else {
            if ($data['type'] == 'css') {
                $link = "<link rel='stylesheet' href='". $data['type'] ."/". $data['href'] .".". $data['type'] .">";
                return $link;
            }
        }
    }
}

/* End of file PinpView.php */
/* Location: ./Pinp/PinpView.php */
