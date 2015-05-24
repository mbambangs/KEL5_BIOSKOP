<?php 
    function header_output($title){
    	echo "
    	<!DOCTYPE html>
		<html>
		<head>
		<title>Nonton 21 - Home </title>
    	<link href='css/bootstrap.css' rel='stylesheet' type='text/css' media='all' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!--theme-style-->
		<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />	
		<!--//theme-style-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<meta name='keywords' content='Modern Music Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design' />
		<script type='application/x-javascript'> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!--//fonts-->
		<!---->
		<link rel='stylesheet' href='css/slider.css' type='text/css' media='screen' />
		<script type='text/javascript' src='js/jquery.min.js'></script>
		<script type='text/javascript' src='js/jquery.nivo.slider.js'></script>
		<!-- Scroll top -->
		<script type='text/javascript' src='js/move-top.js'></script>
		<script type='text/javascript' src='js/easing.js'></script>
		<!--End  Scroll top -->
		 <script type='text/javascript'>
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		  </script>
		  <link rel='stylesheet' href='css/swipebox.css' />
		  <script src='js/jquery.swipebox.min.js'></script> 
		  <script type='text/javascript'>
			jQuery(function($) {
			   $('.swipebox').swipebox();
			});
		  </script>";
    }
	function menu_output($page){
		echo "
		<div class='container'>
  		<div class='header-bottom'>
		<div class='top-nav'>
			  <span class='menu'><img src='images/menu.png' alt=''> </span>
			  <ul>";
		if($page=='Home')
			echo "	<li class='active'><a href='index.php'>HOME</a></li>";
		else
			echo "	<li><a href='index.php'>HOME</a></li>";
		
		if($page=='NowPlaying')
			echo "<li class='active'><a href='404.html'>NOW PLAYING</a></li>";
		else
			echo "<li><a href='404.html'>NOW PLAYING</a></li>";
		
		if($page=='ComingSoon')
			echo "<li class='active'><a href='404.html'>COMING SOON</a></li>";
		else
			echo "<li><a href='about.html'>COMING SOON</a></li>";
				
		if (!isset($_SESSION['email'])){
			if($page=='Login')
				echo "<li class='active'><a href='login.php'>LOGIN</a></li>";
			else
				echo "<li><a href='login.php'>LOGIN</a></li>";
		}else {
			if($page=='Booking')
				echo "<li class='active'><a href='404.html'>BOOKING</a></li>";
			else
				echo "<li><a href='bookingdum.php'>BOOKING</a></li>";
			
			if($page=='Theatres')
				echo "<li class='active'><a href='detailbioskop.php'>THEATRES</a></li>";
			else
				echo "<li><a href='detailbioskop.php'>THEATRES</a></li>";
			if($page=='Profile')
				echo "<li class='active'><a href='404.html'>PROFILE</a></li>";
			else
				echo "<li><a href='about.html'>PROFILE</a></li>";
			
			echo "<li><a href='controller/logoutaction.php'>LOGOUT</a></li>";
		}
		echo "<div class='clearfix'></div>
			     </ul>
			  <script>
				$('span.menu').click(function(){
					$('.top-nav ul').slideToggle(500, function(){
					});
				});
			  </script>
		</div>
		<div class='social-icons'>						
		    	<ul class='social'>
		        	<li><a  href='#' ><i> </i> </a></li>
		            <li><a  href='#' ><i  class='rss'></i></a></li>
		            <li><a  href='#' ><i class='twitter'></i></a></li>
		            <li><a href='#'><i class='dribble'></i></a></li>
		            <div class='clearfix'></div>
		        </ul>
		</div>
		<div class='clearfix'></div>
      </div>
	 </div>
	</div>

		";
	}
	function menu_slider(){
		echo "
		<div class='header'>  	
	     <div class='slider'>
	      <div class='slider-wrapper theme-default'>
	            <div id='slider' class='nivoSlider'>
	               <img src='images/5.jpg' data-thumb='images/5.jpg' alt='' />
	            	<img src='images/6.jpg' data-thumb='images/6.jpg' alt='' />
				</div>
	       </div>
	        <div class='header_desc'>
				 <div class='logo'>
				 	<a href='index.html'><img src='images/logo.png' alt='' /></a>
				  </div>							
		    </div>
		</div>	";
	}
	function menu_home_afterlogin($page){
		echo "
		<div class='container'>
  		<div class='header-bottom'>
		<div class='top-nav'>
			  <span class='menu'><img src='images/menu.png' alt=''> </span>
			  <ul>";
		
			echo "	<li class='active'><a href='index.php'>HOME</a></li>";
			echo "<li><a href='404.html'>NOW PLAYING</a></li>";
			echo "<li><a href='about.html'>COMING SOON</a></li>";
			echo "<li><a href='bookingdum.php'>BOOKING</a></li>";
			echo "<li><a href='theatres.php'>THEATRES</a></li>";
			echo "<li><a href='about.html'>PROFILE</a></li>";
			echo "<li><a href='controller/logoutaction.php'>LOGOUT</a></li>";
		
		echo "<div class='clearfix'></div>
			     </ul>
			  <script>
				$('span.menu').click(function(){
					$('.top-nav ul').slideToggle(500, function(){
					});
				});
			  </script>
		</div>
		<div class='social-icons'>
		    	<ul class='social'>
		        	<li><a  href='#' ><i> </i> </a></li>
		            <li><a  href='#' ><i  class='rss'></i></a></li>
		            <li><a  href='#' ><i class='twitter'></i></a></li>
		            <li><a href='#'><i class='dribble'></i></a></li>
		            <div class='clearfix'></div>
		        </ul>
		</div>
		<div class='clearfix'></div>
      </div>
	 </div>
	</div>
		
		";
	}
	
?>