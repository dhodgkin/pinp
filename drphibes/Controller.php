<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controller.php The drphibes controller base class.
 *
 *  drphibes is a small php framework
 *
 * @package     DrPhibes
 * @author      Damien Hodgkin <dracul01@gmail.com>
 * @copyright   Copyright (c) 2011, FourElements Development
 * @license     New BSD (http://codeigniter.com/user_guide/license.html)
 * @link        http://dhodgkin.us
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

/* End of file Controller.php */
/* Location: ./drphibes/Controller.php */
