<?php
/**
 * Controller.php The drphibes controller base class.
 *
 *  drphibes is a small php framework that works similar to
 *  Sinatra the Ruby web framework.
 *
 * @author Damien Hodgkin <dracul01@gmail.com>
 * @version 0.1a
 * @copyright 2011 Damien Hodgkin
 * @package default
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

//
//
