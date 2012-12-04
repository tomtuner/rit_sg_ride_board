<h1>Offer a Ride</h1>
<h4>Please fill out the fields below</h4>
<?=validation_errors(); ?>
<?php echo form_open('offer_ride/build_trip'); 


$trip_title = array (
	'name'	=>	'trip_title',
	'id'	=>	'trip_title',
	'value'	=>	set_value('trip_title')
);

$departure_address = array (
	'name'	=>	'departure_address',
	'id'	=>	'departure_address',
	'value'	=>	set_value('departure_address')
);

$destination_address = array (
	'name'	=>	'destination_address',
	'id'	=>	'destination_address',
	'value'	=>	set_value('destination_address')
);

$cities = array (
	'Boston'	=>	'Boston, MA',
	'NY'	=>	'New York, NY',
	'Hartford'	=>	'Hartford, CT',
	'Burlington' => 'Burlington, VT',
	'Syracuse' => 'Syracuse, NY',
	'Albany' => 'Albany, NY',
	'Buffalo' => 'Buffalo, NY',
	'Pittsburgh' => 'Pittsburgh, PA',
	'Philadelphia' => 'Philadelphia, PA');

$date_leaving_array = array (
	'name'	=>	'date_leaving',
	'id'	=>	'date_leaving'
);

$times = array (
	'EarlyMorn'	=>	'Early Morning (6AM - 8AM)',
	'MidMorn' => 'Mid Morning (8AM - 10AM)',
	'LateMorn'	=>	'Late Morning (10AM - 12PM)',
	'EarlyAfternoon'	=>	'Early Afternoon (12PM - 2PM)',
	'Mid Afternoon' => 'Mid Afternoon (2PM - 5PM)',
	'Evening' => 'Evening (5PM - 8PM)',
	'Night' => 'Night (8PM - 6AM)'	);

$return_date = array(
	'name' => 'return_date',
	'id'   => 'return_date',
	'value'=> set_value('return_date', '')
);

$passengers_list = array (
	'one' => '1',
	'two' => '2',
	'three' => '3',
	'four' => '4',
	'five' => '5',
	'six' => '6',
	'seven' => '7'
);

$details = array (
	'name'	=>	'details',
	'id'	=>	'details',
	'rows'  =>  '4',
	'cols'  =>  '20',
	'value'	=>	set_value('details')
);


?>



<ul>
<li>
	<label for="trip_title">Trip Title</label>
	<div>
		<?=form_input($trip_title); ?>
	</div>
</li>
<li>
	<label for="departure_address">Departure Address (City, State, Zip Code)</label>
	<div>
		<?=form_input($departure_address); ?>
	</div>
</li>
<li>
	<label for="destination_address">Destination Address (City, State, Zip Code)</label>
	<div>
		<?=form_input($destination_address); ?>
	</div>
</li>
<li>
	<label for="closest_city">Closest City to Destination</label>
	<div>
		<?=form_dropdown('closest_city', $cities, 'large'); ?>
	</div>
</li>
<li >
	<label for="date_leaving">Date Leaving (mm/dd/yyyy)</label>
	<div>
		<?=form_input('date_leaving', $date_leaving_array, 'id = leaving_datepicker')?>
	</div>
</li>
<li>
	<label for="time_leaving">Time Leaving</label>
	<div>
		<?=form_dropdown('time_leaving', $times, 'large'); ?>
	</div>
</li>
<li>
	<label for="return_date">Return Date (mm/dd/yyyy)</label>
	<div>
		<?=form_input('return_date',$return_date, 'id = return_datepicker')?>
	</div>
</li>
<li>
	<label for="return_time">Return Time</label>
	<div>
		<?=form_dropdown('return_time', $times, 'large'); ?>
	</div>
</li>
<li>
	<label for="maximum_passengers">How many people can you take?</label>
	<div>
		<?=form_dropdown('maximum_passengers', $passengers_list);?>
	</div>
</li>
<li>
	<label for="details">Additional Details</label>
	<div>
		<?=form_textarea($details); ?>
	</div>
</li>

<li>
	<div>
	<?=form_submit(array('name' => 'submit'), 'Submit Trip')?>
	</div>
</li>
</ul>

<?=form_close(); ?>
