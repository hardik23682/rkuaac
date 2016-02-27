<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$is_login = $this->input->post('btnLogin');
		//if form submitted
		if($is_login == 'Login')
		{
			$config = array(
				array(
					'field' => 'txtemail',
					'label' => 'E-mail',
					'rules' => 'required|valid_email',
					'errors' => array(
						'required' => 'You must provide a %s',
						'valid_email' => 'You must provide a valid %s'
					)
				),
				array(
					'field' => 'txtpass',
					'label' => 'Password',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s',
					)
				)
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == true)
			{
				$data = $this->user_model->validatelogin();
				if($data['validated'])
				{
					if($data['is_approved']==1)
					{
						$this->session->set_userdata('userinfo', $data);
						redirect('faculty/index');

					}
					else
					{
						$error = "Your account not activated by Administrator. Please try after sometime";
					}
				}
				else
				{
					$error = "Invalid Email or Password";
				}
			}
			else
			{
				$error = validation_errors();
			}
			$data['error'] = $error;
			$this->load->template('login',$data);
		}
		else
		{
			// if form not submitted
			$this->load->template('login');
		}
	}


}
