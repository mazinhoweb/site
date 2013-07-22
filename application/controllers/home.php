<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct(); 
	}
	
	public function index()
	{
		$this->load->view('shared/header');
		$this->load->view('home');
		$this->load->view('shared/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */