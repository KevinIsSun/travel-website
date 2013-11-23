<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * @author kevin
	 * @email 18818272641d@gmail.com
	 * 不忘初心 方得始终
	 */
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('log_in');
	}
	
}
