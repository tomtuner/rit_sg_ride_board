<h1>Registration</h1>
<h4>Please fill out the fields below</h4>
<?=validation_errors(); ?>
<?php echo form_open('signup/register'); 

$email = array (
	'name'	=>	'email',
	'id'	=>	'email',
	'value'	=>	set_value('email')
);

$password = array (
	'name'	=>	'password',
	'id'	=>	'password',
	'value'	=>	''
);

$password_conf = array (
	'name'	=>	'password_conf',
	'id'	=>	'password_conf',
	'value'	=>	''
);

$first_name = array (
	'name'	=>	'first_name',
	'id'	=>	'first_name',
	'value'	=>	set_value('first_name')
);

$last_name = array (
	'name'	=>	'last_name',
	'id'	=>	'last_name',
	'value'	=>	set_value('last_name')
);

$ph_num = array (
	'name'	=>	'ph_num',
	'id'	=>	'ph_num',
	'value'	=>	set_value('ph_num')
);

$school_address = array (
	'name'	=>	'school_address',
	'id'	=>	'school_address',
	'rows'	=>	'4',
	'cols'	=>	'20',
	'value'	=>	set_value('school_address')
);

$home_address = array (
	'name'	=>	'home_address',
	'id'	=>	'home_address',
	'rows'	=>	'4',
	'cols'	=>	'20',
	'value'	=>	set_value('home_address')
);

$options = array(
	'male'  => 'Male',
    'female'    => 'Female',
    'none'   => 'I\'d rather not say'
);

$sex_male = array(
	'name'	=>	'sex_group',
	'value'	=>	'M',
	'checked'	=> TRUE
);

$sex_female = array(
	'name'	=>	'sex_group',
	'value'	=>	'F',
	'checked'	=> FALSE
);

$deaf = array(
	'name'        => 'deaf',
	'id'          => 'deaf',
	'value'       => 'accept'
);

$smoker = array(
	'name'        => 'smoker',
	'id'          => 'smoker',
	'value'       => 'accept'
);
	
?>

<ul>
<li>
	<label for="email">E-mail</label>
	<div>
		<?=form_input($email); ?>
	</div>
</li>
<li>
	<label for="password">Password</label>
	<div>
		<?=form_password($password); ?>
	</div>
</li>
<li>
	<label for="password_conf">Confirm Password</label>
	<div>
		<?=form_password($password_conf); ?>
	</div>
</li>
<li>
	<label for="first_name">First Name</label>
	<div>
		<?=form_input($first_name); ?>
	</div>
</li>
<li>
	<label for="last_name">Last Name</label>
	<div>
		<?=form_input($last_name); ?>
	</div>
</li>
<li>
	<label for="ph_num">Phone Number</label>
	<div>
		<?=form_input($ph_num); ?>
	</div>
</li>
<li>
	<label for="school_address">School Address</label>
	<div>
		<?=form_textarea($school_address); ?>
	</div>
</li>
<li>
	<label for="home_address">Home Address</label>
	<div>
		<?=form_textarea($home_address); ?>
	</div>
</li>
<li>
	<label for="sex_group">What do you identify as?</label>
	<div>
		<?=form_radio($sex_male);?> M
	</div>
	<div>
		<?=form_radio($sex_female);?> F
	</div>
</li>
<li>
	<label for="deaf">Deaf</label>
	<div>
		<?=form_checkbox($deaf); ?>
	</div>
</li>
<li>
	<label for="smoker">Are you a smoker?</label>
	<div>
		<?=form_checkbox($smoker); ?>
	</div>
</li>

<li>
	<div>
	<?=form_submit(array('name' => 'register'), 'Register')?>
	</div>
</li>
</ul>
<?=form_close(); ?>