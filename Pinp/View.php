<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
    public function __construct( $template ) {
        echo $this->display($template);
    }

    public function display( $template ) {
        return $this->render('layout', $template);
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
        $file = "../app/" . $type . "s/" . $template . ".php";
        if ( file_exists($file) ) {
            ob_start();
            require $file;
            return ob_get_clean();
        }
    }
    
    /* render the built link */
    public static function linkTo( $type, $data ) {
        echo self::prepareLink($type, $data);
    }

    public static function prepareLink( $type, $data ) {
        if (!is_array($data) && !isset($type)) {
            return;
        } else {
            if ($type == 'link' && $data['type'] == 'css') {
                $link = "<link href='" . $data['type'] . "/" 
                        . $data['href'] . "." . $data['type']
                        . "' rel='stylesheet' type='text/" . $data['type'] . "'>";
            }

            if ($type == 'link' && $data['type'] == 'plain') {
                $link = "<link href='" . $data['href'] . "' rel='" . $data['rel']
                        . "' type='text/" . $data['type'] . "'>";
            }
            return $link;
        }
    }

    public static function script( $file ) {
        if (!isset($file)) {
            return;
        } else {
            return $script = "<script src='js/" . $file . "' type='text/javascript'></script>";
        }
    }
}

/* End of file PinpView.php */
/* Location: ./Pinp/PinpView.php */
