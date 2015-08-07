<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>RedesHost</title>
		<link href="../web/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../web/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="../web/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----../webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic|Roboto+Slab:400,100,700' rel='stylesheet' type='text/css'>
		<!---//../webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
	    		 
			});
		</script>
		
	</head>

	<body>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header" id="move-top">
						<div class="container">
						<div class="logo">
							<a href="index.php"><img src="../web/images/logo.png" title="Maguwohost" /></a>
						</div> 
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li id="index"><a href="index.php">Inicio </a></li>
								<li id="about"><a href="../web/about.php">Nosotros</a></li>
								<li id="pricing"><a href="../web/pricing.php">Hosting</a></li>
								<li id="domain"><a href="../web/domain.php"> Servicios</a></li>
								<li id="hosting"><a href="../web/hosting.php">Hosting</a></li>
							</ul>
							<a href="#" id="pull"><img src="../web/images/nav-icon.png" title="menu" /></a>
						</nav>
						<!----- contact-info ----->
						<div class="contact-info">
							<p>Do you need help ? Just Email, Live chat or Call us</p>
							<div class="contact-info-grids">
								<div class="contact-info-left">
									<a class="chat" href="#">Live Chat</a>
								</div>
								<div class="contact-info-right">
									<h3>6284-6534</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!----- contact-info ----->
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->