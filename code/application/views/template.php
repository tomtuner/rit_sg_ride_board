<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$title?></title>
		<meta name="description" content="An online ride board to plan trips, establish car pools and get to where you want to go efficiently.">
		<link type="text/plain" rel="author" href="<?=base_url('humans.txt');?>" />
        <meta name="viewport" content="width=device-width">
        
    	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?=base_url('css/normalize.css');?>">
        <link rel="stylesheet" href="<?=base_url('css/main.css');?>">
        <link rel="stylesheet" href="<?=base_url('css/rideboard.css');?>">
	    <script src="<?=base_url('js/vendor/modernizr-2.6.2.min.js');?>"></script>

		<script>
  		 $(function() {
        	$( "#leaving_datepicker" ).datepicker({dateFormat: 'mm-dd-yy'});
        	$( "#return_datepicker" ).datepicker({dateFormat: 'mm-dd-yy'});
   		 });
    	</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="master">
			<div id="header">
				<?php $this->load->view('includes/header');?>
			</div> 
			<div id="content" role="main">
				<?php $this->load->view($main_content);?>
			</div>
			<div id="footer">
				<?php $this->load->view('includes/footer');?>
			</div>       
        </div>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
       
    </body>
</html>
