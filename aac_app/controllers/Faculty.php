<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->template('faculty/dashboard');
	}
}
