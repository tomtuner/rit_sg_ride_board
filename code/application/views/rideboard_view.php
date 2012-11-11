<!DOCTYPE html>
<html lang="en">
<head>
<title>SG Ride Board</title>
<meta http-equiv="Content-language" content="en">
<meta name="Author" content="TSD">
<meta name="description" content="An online ride board to plan trips, establish car pools and get to where you want to go efficiently.">

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/rideboard.css" />


</head>
<body>
<div id="master">
	<div id="header">
		<div id=access>
			<ul class="top_nav" >
				<li class="horizontal"><?= anchor('signup', 'Sign Up','class="right_header_text"'); ?></li>
				<li class="horizontal"><?= anchor('login', 'Sign In','class="right_header_text"'); ?></li>
			</ul>
		</div>
		<div id="banner">
			<h1>Welcome to SG Ride Board!</h1>
		</div>
		
	</div>
	
	<div id="content">
		<div id="content_main" class="content_style">
			<h2>Where are you going?</h2>
		</div>
		<div id="content_list" class="content_style">
			<ul id="city_list">
				<li class="unselected" ><div class="city_text">Boston, MA</div></li>
				<li class="unselected" ><div class="city_text">Buffalo, NY</div></li>
				<li class="unselected" ><div class="city_text">Burlington, VT</div></li>
				<li class="unselected" ><div class="city_text">Syrcuse, NY</div></li>
	
			</ul>
			<ul id="city_list">
				<li class="unselected" ><div class="city_text">Springfield, MA</div></li>
				<li class="unselected" ><div class="city_text">Saratoga, NY</div></li>
				<li class="unselected" ><div class="city_text">Stowe, VT</div></li>
				<li class="unselected" ><div class="city_text">New York City, NY</div></li>
	
			</ul>
			<ul id="city_list">
				<li class="unselected" ><div class="city_text">Boston, MA</div></li>
				<li class="unselected" ><div class="city_text">Buffalo, NY</div></li>
				<li class="unselected" ><div class="city_text">Burlington, VT</div></li>
				<li class="unselected" ><div class="city_text">Syrcuse, NY</div></li>
	
			</ul>
			<ul id="city_list">
				<li class="unselected" ><div class="city_text">Springfield, MA</div></li>
				<li class="unselected" ><div class="city_text">Saratoga, NY</div></li>
				<li class="unselected" ><div class="city_text">Stowe, VT</div></li>
				<li class="unselected" ><div class="city_text">New York City, NY</div></li>
	
			</ul>	
		</div>
		
	</div>
	
	<div id="footer">
		<div id="moto">This page was created by those who care about innovation.</div>
	</div>
</div> <!-- end of master -->

</body>
</html>
