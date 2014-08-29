<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('vw_index');
	}

	public function mark(){
		$this->load->view('vw_mark');
	}

	public function add(){
		$this->load->view('vw_add');
	}
}
