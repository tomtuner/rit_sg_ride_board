<?php

class Need_Ride extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('need_ride_model');
		$this->load->model('trip_model');
	}

	function index()
	{
		$this->build_trip();
	}

	function build_trip()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('trip_title', 'Trip Title', 'trim|xss_clean|required');
		$this->form_validation->set_rules('departure_address', 'Departure Address', 'trim|xss_clean|required|callback_validate_location_depart');
		$this->form_validation->set_rules('time_leaving', 'Time Leaving', 'trim|xss_clean|required');
		$this->form_validation->set_rules('date_leaving', 'Date Leaving', 'trim|xss_clean|required|callback_verify_date');
		$this->form_validation->set_rules('destination_address', 'Destination Address', 'trim|xss_clean|required|callback_validate_location_arrive');
		$this->form_validation->set_rules('closest_city', 'Closest City', 'trim|xss_clean|required');
		//$this->form_validation->set_rules('round_trip', 'Round Trip', 'trim|xss_clean');
		//$this->form_validation->set_rules('return_date', 'Return date', 'trim|xss_clean');
		//$this->form_validation->set_rules('return_time', 'Return time', 'trim|xss_clean');
		$this->form_validation->set_rules('details', 'Details', 'trim|xss_clean');

		if($this->form_validation->run() == false)
		{
			$data = array('title' => 'Need a ride', 'main_content' => 'need_ride_view');
			$this->load->view('template', $data);
		}
		else
		{
			$trip_title = $this->input->post('trip_title');
			$departure_location = $this->input->post('departure_address');
			$departure_time = $this->input->post('time_leaving');
			$departure_date = $this->input->post('date_leaving');
			$destination_location = $this->input->post('destination_address');
			$closest_city = $this->input->post('closest_city');
			//$round_trip = $this->input->post('round_trip');
			$details = $this->input->post('details');

			list($depart_city, $depart_state, $depart_zip) = $this->trip_model->parse_address($departure_location);
			list($dest_city, $dest_state, $dest_zip) = $this->trip_model->parse_address($destination_location);
			$depart_date = $this->trip_model->format_date(depart_date);

				
			$data = array('trip_title' => $trip_title,
					'dest_city' => $dest_city,
					'dest_state' => $dest_state,
					'dest_zip' => $dest_zip,
					'depart_city' => $depart_city,
					'depart_state' => $depart_state,
					'depart_zip' => $depart_zip,
					'closest_city' => $closest_city,
					'departure_time' => $departure_time,
					'departure_date' => $departure_date,
					'details' => $details);
				
			$this->need_ride_model->create_request($data);
		}
	}
	
	function verify_date($str_date)
	{
		$result = $this->trip_model->current_future_date($str_date);
		if($result == true)
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('verify_date', 'Date leaving must be either current date or future date');
			return false;
		}
	}
	
	function validate_location_depart($address)
	{
		
		list($result, $result1, $result2) = $this->trip_model->parse_address($address);
		
		if($result == 'error')
		{
			$this->form_validation->set_message('validate_location_depart', 'Please enter valid departure location "City, State ZipCode"');
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function validate_location_arrive($address)
	{
	
		list($result, $result1, $result2) = $this->trip_model->parse_address($address);
	
		if($result == 'error')
		{
			$this->form_validation->set_message('validate_location_arrive', 'Please enter valid destination location "City, State ZipCode"');
			return false;
		}
		else
		{
			return true;
		}
	}
}
