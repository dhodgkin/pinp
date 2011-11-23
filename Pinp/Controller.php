<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controller.php The Pinp controller base class.
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

class DP_Controller {
  private static $instance;

  public function __construct() {
    self::$instance =& $this;
  }
  
 	public static function &get_instance() {
		return self::$instance;
	}

}
