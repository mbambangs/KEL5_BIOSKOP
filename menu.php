<div class="container">
  	<div class="header-bottom">
		<div class="top-nav">
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
			  <ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="controller/theatresaction.php">THEATRES</a></li>
<<<<<<< HEAD
				<li><a href="">BOOKING HISTORY</a></li>
				<?php if(!isset($_SESSION['email'])){?>
					<li><a href="login.php">LOGIN</a></li>
=======
			  	<?php if (isset ($_SESSION['home'])){?>
					<li class="active"><a href="index.php">HOME</a></li>
				<?php }else{?>
					<li><a href="index.php">HOME</a></li>
				<?php }?>
				<?php if (isset ($_SESSION['theatre'])){?>
					<li class="active"><a href="theatres.php">THEATRES</a></li>
				<?php }else{?>
					<li><a href="theatres.php">THEATRES</a></li>
				<?php }?>
				<?php if (isset ($_SESSION['history'])){?>
				<li class="active"><a href="controller/historyaction.php">BOOKING HISTORY</a></li>
				<?php }else{?>
					<li><a href="controller/historyaction.php">BOOKING HISTORY</a></li>
				<?php }?>
				<?php if(!isset($_SESSION['email'])){
						if(isset($_SESSION['loginmenu'])){?>
							<li class="active" ><a href="login.php">LOGIN</a></li>
						<?}else{?>
						<li><a  href="login.php">LOGIN</a></li>
					<?php }?>
>>>>>>> origin/master
				<?php }else{?>
					<li><a href="controller/logoutaction.php">LOGOUT</a></li>
				<?php }?>
				<div class="clearfix"></div>
			  </ul>
			  <script>
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle(500, function(){
					});
				});
			  </script>
		</div>
		<div class="social-icons">						
		    	<ul class="social">
		        	<li><a  href="#" ><i> </i> </a></li>
		            <li><a  href="#" ><i  class="rss"></i></a></li>
		            <li><a  href="#" ><i class="twitter"></i></a></li>
		            <li><a href="#"><i class="dribble"></i></a></li>
		            <div class="clearfix"></div>
		        </ul>
		</div>
		 	<div class="clearfix"></div>
          </div>
		 </div>
	</div>
<<<<<<< HEAD
	<!---->
  	 <div class="header">  	
		 		<!-- Slider -->				
				     <div class="slider">
				      <div class="slider-wrapper theme-default">
				            <div id="slider" class="nivoSlider">
				                <img src="images/5.jpg" data-thumb="images/5.jpg" alt="" />
								<img src="images/6.jpg" data-thumb="images/6.jpg" alt="" />
								<img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
								<img src="images/7.jpg" data-thumb="images/7.jpg" alt="" />
				            </div>
				        </div>
				          <div class="header_desc">
				 			 <div class="logo">
				 				<a href="index.html"><img src="images/logo.png" alt="" /></a>
							 </div>							
		     		    </div>
				   </div>
			     <!--- End Slider --->
=======
	
>>>>>>> origin/master
