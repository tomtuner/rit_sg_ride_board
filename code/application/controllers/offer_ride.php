<?php

class Offer_Ride extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('offer_ride_model');
		$this->load->model('trip_model');
	}
	
	public function index()
	{
		$this->build_trip();
	}
	
	public function build_trip()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('trip_title', 'Trip Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('departure_address', 'Departure address', 'trim|required|xss_clean|callback_validate_location_depart');
		$this->form_validation->set_rules('destination_address', 'Destination address', 'trim|required|xss_clean|callback_validate_location_arrive');
		$this->form_validation->set_rules('closest_city', 'Closest city to destination', 'trim|required|xss_clean');
		$this->form_validation->set_rules('date_leaving', 'Departure date', 'trim|required|xss_clean|callback_validate_leaving_date|callback_verify_order');
		$this->form_validation->set_rules('time_leaving', 'Departure time', 'trim|xss_clean');
		$this->form_validation->set_rules('maximum_passengers', 'Maximum Passenger', 'trim|required|xss_clean');
		$this->form_validation->set_rules('details', 'Additional Details', 'trim|xss_clean');
		$this->form_validation->set_rules('return_date', 'Return date', 'trim|required|xss_clean|callback_validate_return_date');
		$this->form_validation->set_rules('return_time', 'Return time', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$data = array('title' => 'Offer a Ride', 'main_content' => 'offer_ride_view');
			$this->load->view('template', $data);
		}
		else
		{
			$trip_title = $this->input->post('trip_title');
			$departure_address = $this->input->post('departure_address');
			$destination_address = $this->input->post('destination_address');
			$closest_city = $this->input->post('closest_city');
			$date_leaving = $this->input->post('date_leaving');
			$time_leaving = $this->input->post('time_leaving');
			$maximum_passengers = $this->input->post('maximum_passengers');
			$details = $this->input->post('details');
			$return_date = $this->input->post('return_date');
			$return_time = $this->input->post('return_time');
		
			$data = array(  'departure_address' => $departure_address,
							'destination_address' => $destination_address,
							'closest_city' => $closest_city,
							'date_leaving' => $date_leaving,
							'time_leaving' => $time_leaving,
							'maximum_passengers' => $maximum_passengers,
							'details' => $details,
							'trip_title' => $trip_title,
							'return_date' => $return_date,
							'return_time' => $return_time);

		
			
			
				$this->offer_ride_model->create_trip($data);
		
		
		}
	}
	
	function validate_leaving_date($str_date)
	{
		$result = $this->trip_model->current_future_date($str_date);
		if($result == true)
		{
			return true;
		}
		else 
		{
			$this->form_validation->set_message('validate_leaving_date', 'Departure date needs to be today or a future date');
			return false;
		}
	}
	
	function validate_return_date($str_date)
	{
		$result = $this->trip_model->current_future_date($str_date);
		if($result == true){
			return true;
		}
		else
		{
			$this->form_validation->set_message('validate_return_date', 'Return date needs to be today or a future date');
			return false;
		}
	}
	
	function verify_order($str_depart)
	{
		$str_return = $this->input->post('return_date');
		$result = $this->trip_model->verify_dates($str_depart, $str_return);
		if($result == true)
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('verify_order', 'Return date must be on or after depart date');
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