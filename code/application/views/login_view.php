<!DOCTYPE html>
<html lang="en">

<head>
<title>SG Ride Board</title>
</head>
<body>
	<h1>Login to SG Ride Board</h1>
	<?=validation_errors(); ?>
	<?=form_open('login'); ?>
	<div id = "field">
	<label for="email">Email:</label>
	<input type="text" size="20" id="email" name="email"/>
	<br/>
	<label for="password">Password:</label>
	<input type="password" size="20" id="password" name="password"/>
	<br/>
	</div>
	<div id = "submit">
	<input type="submit" value="Login"/>
	</div>
	<?=form_close() ?>
</body>
</html>