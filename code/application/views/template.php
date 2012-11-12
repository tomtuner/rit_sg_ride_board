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

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?=base_url('css/normalize.css');?>">
        <link rel="stylesheet" href="<?=base_url('css/main.css');?>">
        <link rel="stylesheet" href="<?=base_url('css/rideboard.css');?>">
        <script src="<?=base_url('js/vendor/modernizr-2.6.2.min.js');?>"></script>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="master">
			<header>
				<?php $this->load->view('includes/header');?>
			</header> 
			<div id="content" role="main">
				<?php $this->load->view($main_content);?>
			</div>
			<footer>
				<?php $this->load->view('includes/footer');?>
			</footer>       
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="<?=base_url('js/plugins.js');?>"></script>
        <script src="<?=base_url('js/main.js');?>"></script>
        <script src="<?=base_url('js/jquery.js')?>"></script>
        <script src="<?=base_url('js/jquery.easing.js');?>"></script>
        <script src="<?=base_url('js/jquery.collapse.js');?>"></script>
                <script type="text/javascript">			
			$(function(){				
				$('#city_list').jqcollapse({
				   slide: true,
				   speed: 1000,
				   easing: 'easeOutCubic'
				});				
			});			
		</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
