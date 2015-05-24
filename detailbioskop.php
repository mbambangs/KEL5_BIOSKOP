<?php
session_start();
if(isset ($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Home </title>
	<?php 
      	include dirname(__FILE__)."/common/def.php";
      	include dirname(__FILE__)."/common/output.php";
      	require  dirname(__FILE__)."/headhtml.php"
      	
     ?>
<body>	
 <?php menu_output('Theatres');
 ?>
 <div class="slider">				
	<div class="banner"></div>
	 <div class="header_desc">
		 <div class="logo">
			<a href="#"><img src="images/log.png" alt="" /></a>
		 </div>							
	</div>
 </div>
 		<div class="container">
		<div class="content">
		<div class="about">
		
				<h3><?php echo $_SESSION['namabioskop'];?></h3>
				<div class="about-in">
					<div class="col-md-8 in-profile">
						<h4>OUR PROFILE</h4>
						<div class="our-grid">
							<div class="col-md-6 sit-in">
								<a href="#" >
									<img src="images/ab.jpg" alt="image" class="img-responsive ">
								</a>	
							</div>				
								<div class="col-md-6 our-head">
									<h6 ><a href="#">Lorem ipsum dolor sit amet, consectetur adipisci ngelit. Donec nisi sem, vestibulum</a></h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi sem, vestibulum ac lobortis quis, aliquet in metus. Suspendi sse a nibh id eros consectetur laoreet. Etiam viverra auctor orci, eu mattis ipsum rutrum nec.
									Etortor tortor in turpis. Proin mauris nulla, rutrum aliquet arcu vel, porttitor varius dolor. Phasellus vitae tincidunt orci, et faucibus eros. Sed dolor sapien, pharetra placerat feugiat.rutrum aliquet arcu vel, porttitor varius dolor. Phasellus vitae tincidunt orci, et faucibus eros. Sed dolor.</p>
								</div>
							<div class="clearfix"> </div>
							<p>Proin mauris nulla, rutrum aliquet arcu vel, porttitor varius dolor. Phasellus vitae tincidunt orci, et faucibus eros. Sed dolor sapien, pharetra placerat feugiat non, molestie nec elit.Aenean fringilla metus enim, non congue velit porta id. Mauris non lacus sollicitudin, suscipit erat eu, sodales metus. Pellentesque sit amet fringilla orci. Suspendisse lacinia quam et sapien blandit, eu mattis risus posuere. Morbi turpis lorem, vestibulum at turpis vel, suscipit tristique urna. Sed nec dapibus tellus, vel fringilla turpis. Phasellus mollis, lacus sed auct or lobortis, ante nisl tincidunt nibh.</p>
						</div>
					</div>
					<div class="col-md-4 in-profile">
					<h4>Our Capabilities</h4>
					<div class="col-in-about">
						<span class="in-sed">1</span>
						<div class="left-sit">
							<h6><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h6>
							<p>Mes cuml dia sed net lacus utenias cet inge iiqt es site am eismod icto ligulate ameti dapibustic du nt mtsen lus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-in-about">
						<span class="in-sed">2</span>
						<div class="left-sit">
							<h6><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h6>
							<p>Mes cuml dia sed net lacus utenias cet inge iiqt es site am eismod icto ligulate ameti dapibustic du nt mtsen lus </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-in-about">
						<span class="in-sed">3</span>
						<div class="left-sit">
							<h6><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h6>
							<p>Mes cuml dia sed net lacus utenias cet inge iiqt es site am eismod icto ligulate ameti dapibustic du nt mtsen lus</p>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>

	</div>
	<div class="content-team ">
			
				<h4> TEAM</h4>
				<div class="team-left">					
					<div class="col-md-3 team-top">
					<a href="#"><img class="img-responsive  mix-in" src="images/p1.jpg" alt=""></a>
						<h6><a href="#">Duis autem</a></h6>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					</div>
					<div class="col-md-3 team-top ">
						<a href="#"><img class="img-responsive  mix-in" src="images/p2.jpg" alt=""></a>
						<h6><a href="#">Duis autem</a></h6>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					</div>
					<div class="col-md-3 team-top">
						<a href="#"><img class="img-responsive  mix-in" src="images/p3.jpg" alt=""></a>
						<h6><a href="#">Duis autem</a></h6>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					</div>
					<div class="col-md-3 team-top top-team">
						<a href="#"><img class="img-responsive  mix-in" src="images/p4.jpg" alt=""></a>
						<h6><a href="#">Duis autem</a></h6>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			
		</div>
</div>
</div>
  				

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>