<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->template('login');
	}
	public function register()
	{
		$register=$this->input->post("btnRegister");
		//If form submitted
		if($register=="Register")
		{
			//Creating validation for submitted form
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
				),
				array(
					'field' => 'txtcpass',
					'label' => 'Confirm Password',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s',
					)
				),
				array(
					'field' => 'txtyear',
					'label' => 'Experience Year',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s',
					)
				),
				array(
					'field' => 'txtmonth',
					'label' => 'Experience Month',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s',
					)
				),
				array(
					'field' => 'txtmobile',
					'label' => 'Mobile Number',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s',
					)
				),
				array(
					'field' => 'txtname',
					'label' => 'Faculty Name',
					'rules' => 'required',
					'errors' => array(
						'required' => 'You must provide a %s',
					)
				)
			);

			//Setting up rules for form
			$this->form_validation->set_rules($config);

			//Perform validation checking on form
			if ($this->form_validation->run() == true)
			{
				//Create array of form values for database insertion
				//array key name is same as field name
				$email=$this->input->post('txtemail');

				//Checking for existing user
				$count=$this->User_model->faculty_exists($email);
				if($count > 0)
				{
					//Display Error Message
					$data['error']="Already Register. Please login with existing credentials";
				}
				else
				{
					//Insert data into database table
					$data['faculty_name'] = $this->input->post('txtname');
					$data['school_id'] = $this->input->post('txtschool');
					$data['email_id'] = $email;
					$data['mobile_no'] = $this->input->post('txtmobile');
					$data['total_experience_y'] = $this->input->post('txtyear');
					$data['total_experience_m'] = $this->input->post('txtmonth');
					$data['password'] = md5($this->input->post('txtpass'));
					$data['is_approved'] = 0;
					$user_id = $this->User_model->faculty_add($data);

					if($user_id > 0)
					{
						// Display Success message to user
						$data['msg']="Successfully Register. After approval, you can login to the system";
					}
					else
					{
						//Display error due to some unavoidable conditions occurs while performing database operation
						$data['error']="Something went wrong. Please try again";
					}

				}
			}
			else
			{
				//Display error from form's data
				$error = validation_errors();
				$data['error'] = $error;
			}
			$this->load->template('registration',$data);
		}
		else
		{
			//If form not submitted
			$this->load->template('registration');
		}

	}
}
