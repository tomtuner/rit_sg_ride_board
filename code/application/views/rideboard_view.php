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
				<li class="horizontal">Sign Up</li>
				<li class="horizontal"><?php echo anchor('login', 'Sign In','title="Sign In"'); ?></li>
			</ul>
		</div>
		<div id="banner">
			<h1>Welcome to SG Ride Board!</h1>
		</div>
		
	</div>
	
	<div id="content">
		<div id="content_main">
		</div>
		<div id="content_list">
			<ul id="city_list">
				<li class="horizontal" ><div class="city_text">Boston, MA</div></li>
				<li class="horizontal" ><div class="city_text">Buffalo, NY</div></li>
				<li class="horizontal" ><div class="city_text">Burlington, VT</div></li>
				<li class="horizontal" ><div class="city_text">Syrcuse, NY</div></li>
	
			</ul>
			<ul id="city_list">
				<li class="horizontal" ><div class="city_text">Springfield, MA</div></li>
				<li class="horizontal" ><div class="city_text">Saratoga, NY</div></li>
				<li class="horizontal" ><div class="city_text">Stowe, VT</div></li>
				<li class="horizontal" ><div class="city_text">New York City, NY</div></li>
	
			</ul>
		</div>
		
	</div>
	
	<div id="footer">
		<div id="moto">This page was created by those who care about innovation.</div>
	</div>
</div> <!-- end of master -->

</body>
</html>
