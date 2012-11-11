<?php 

class SignUp extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('SignUp_model');
	}

	public function index()
	{
		$this->register();
	}
	
	public function register()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|callback_rit_email_check|xss_clean|strtolower');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean|sha1');
		$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'trim|required|min_length[6]|matches[password]|xss_clean');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean|alpha');
		$this->form_validation->set_rules('ph_num', 'Phone Number', 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules('school_address', 'School Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('home_address', 'Home Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('deaf', 'Deaf', 'trim|xss_clean');

		if($this->form_validation->run() == FALSE)
		{
			// Hasn't been run or validation errors
			$this->load->view('sign_up_view');

		}
		else
		{
			// Everything is good, process the form - write data into user table
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$ph_num = $this->input->post('ph_num');
			$school_address = $this->input->post('school_address');
			$home_address = $this->input->post('home_address');
			$deaf = $this->input->post('deaf');
			
			$data = array(
			'email'	=> $email,
			'password'	=>	$password,
			'first_name'	=>	$first_name,
			'last_name'	=>	$last_name,
			'school_address'	=>	$school_address,
			'home_address'	=>	$home_address,
			'ph_num'	=>	$ph_num,
			'deaf'	=>	$deaf
		);
			
/* 			$data = array($email, $password, $first_name, $last_name, $ph_num, $school_address, $home_address); */
			
			echo $email;
			echo $password;
			$this->SignUp_model->register_user($data);
		}		
	}
	
	public function rit_email_check($email)
	{
		$rit_mask = substr($email, -7);
		if ($rit_mask == 'rit.edu')
		{
			return TRUE;
		}else
		{
			$this->form_validation->set_message('rit_email_check', 'The %s field must be a valid RIT e-mail address.');
			return FALSE;
		}
	}
	
}