<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Code Igniter
*
* An open source application development framework for PHP 4.3.2 or newer
*
* @package     CodeIgniter
* @author      Andy Lyon
* @since       Version 1.0
* @filesource
*/

// ------------------------------------------------------------------------

/**
* SFTP class using PHPs phpseclib features.
* base on phpseclib http://phpseclib.sourceforge.net/
*
* @package     CodeIgniter
* @subpackage  Libraries
* @category    Sftp
* @author      Andrey Eremin
* @version     0.1
*/

class Sftp {

	var $hostname	 = '';
	var $username	 = '';
	var $password	 = '';
	var $default_dir = '';
	var $sftp        = null;

	public function __construct() {
		$this->CI = &get_instance();
		$this->CI->config->load('sftp', true);

		// load config
		$this->hostname = $this->CI->config->item('hostname');
		$this->username = $this->CI->config->item('username');
		$this->password = $this->CI->config->item('password');
		$this->default_dir = $this->CI->config->item('default_dir');

		// Load libraries
		foreach (glob("{".APPPATH."libraries/sftp/Crypt/*.php}", GLOB_BRACE) as $filename) {
		    include_once $filename;
		}

		include(APPPATH.'libraries/sftp/Math/BigInteger.php');
		include(APPPATH.'libraries/sftp/Net/SFTP.php');	

		// connect to server
		if($this->CI->config->item('autoconnect') == true) {
			$this->connect();
		}
	}
	
	// Connect to SFTP server
	public function connect() {
		$this->sftp = new Net_SFTP($this->hostname);
		if (!$this->sftp->login($this->username, $this->password)) {
		    throw new Exception('Login Failed');
		}
	}

	// return list of files
	public function files_list($path = '') {
		$ret = array();
		$files =  $this->sftp->nlist( (strlen($path) > 0 ? $path : $this->default_dir) );
		foreach ($files as $obj) {
			if($obj != "." && $obj != "..") {
				array_push($ret, $obj);
			}
		}
		return $ret;
	}

	// get content of file
	public function download($filename) {
		return  $this->sftp->get($filename);
	}

}
// END Sftp Class

/* End of file Sftp.php */