<?php
class VerifyLogin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','',TRUE);
	}
	
	function index()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_view');
		}
		else
		{
			redirect('rideboard', 'refresh');
		}
	}
	
	function check_database($password)
	{
		$email = $this->input->post('email');
		
		$result = $this->login_model->login($email, $password);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'email' => $row->email
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invaild email address or password');
			return false;
		}
	}
}