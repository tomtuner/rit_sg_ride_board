<!DOCTYPE html>
<html lang="en">

<head>
<title>SG Ride Board</title>
</head>
<body>
	<h1>Login to SG Ride Board</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('verifylogin'); ?>
	<label for="email">Email:</label>
	<input type="text" size="20" id="emaiil" name="email"/>
	<br/>
	<label for="password">Password:</label>
	<input type="password" size="20" id="password" name="password"/>
	<br/>
	<input type="submit" value="Login"/>
	</form>
</body>
</html>