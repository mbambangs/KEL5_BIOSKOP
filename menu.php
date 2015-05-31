<div class="container">
  	<div class="header-bottom">
		<div class="top-nav">
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
			  <ul>
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
				<li><a href="">BOOKING HISTORY</a></li>
				<?php if(!isset($_SESSION['email'])){
						if(isset($_SESSION['loginmenu'])){?>
							<li class="active" ><a href="login.php">LOGIN</a></li>
						<?}else{?>
						<li><a  href="login.php">LOGIN</a></li>
					<?php }?>
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
	