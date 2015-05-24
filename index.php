<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Home </title>
	<?php 
      	include dirname(__FILE__)."/common/def.php";
      	include dirname(__FILE__)."/common/output.php";
      	require_once dirname(__FILE__)."/headhtml.php"
     ?>
<body>
		<div class="container">
		   <div class="header-bottom">
		      <div class="top-nav">
			  <span class="menu"><img src="images/menu.png" alt=""> </span>

					    <ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="404.html">Albums</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
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
  	 <div class="header">  	
		 		<!-- Slider -->				
				     <div class="slider">
				      <div class="slider-wrapper theme-default">
				            <div id="slider" class="nivoSlider">
				                <img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
				                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
				                <img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
				                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
				            </div>
				        </div>
				          <div class="header_desc">
				 			 <div class="logo">
				 				<a href="index.html"><img src="images/log.png" alt="" /></a>
							 </div>							
		     		    </div>
				   </div>
			     <!--- End Slider --->
		
	</div>
	<!---->

		<div class="container">
		<div class="content">
		<div class="content-top-grid">
		<!--		<h3>NOW PLAYING</h3>-->
				<div class="content-top-in">
				<div class="col-md-4 grid">
					<a href="images/m1.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m1.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Exerci tation ullamcorper suscipit</a></h4>
						<p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
					<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>

				</div>
				<div class="col-md-4 grid">
					<a href="images/m2.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m2.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Exerci tation ullamcorper suscipit</a></h4>
						<p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
						<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>
				</div>
				<div class="col-md-4 grid">
					<a href="images/m3.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m3.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Exerci tation ullamcorper suscipit</a></h4>
						<p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
						<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>

		<div class="content-bottom">
			<div class="col-md-8">
				<div class="content-grid">
					<h3>Fusce mollis consectetur torto</h3>
					<p>Aliquam mattis varius dolor, id adipiscing metus.</p>
				</div>
					<div class="col-md-6 grid-top">
						<a href="#"><img src="images/pi1.jpg" alt="" class="img-responsive"></a>
						<p >Proin lobortis erat sed metus interdum vel is all si aliquetsil purus cursus. Sed lacus erat bibnioum in rutrumriCurabitur condimentum erat non i sed.Sed ultrices posere mauris nec volutpat. ve asl luctus id libero.Suspendis alelri interdum poatill aliquet. Nunc molestie felis quis turis fringilla alryjhl tincunt. Nulla facilisi. Sed ac imperdiet sem.</p>

							</div>
							<div class="col-md-6 grid-middle">
					<ul>
					<li><a href="#"><i> </i>Phasellus in urna</a></li>
					<li><a href="#"><i> </i>Vestibulum vitae lorem</a></li>
					<li><a href="#"><i> </i>augue turpis varius orci</a></li>
					<li><a href="#"><i> </i>Sed ultrices posere</a></li>
					<li><a href="#"><i> </i>Phasellus in urna</a></li>
					<li><a href="#"><i> </i>Vestibulum vitae lorem</a></li>
					<li><a href="#"><i> </i>augue turpis varius orci</a></li>
					<li><a href="#"><i> </i>Sed ultrices posere</a></li>
					<li><a href="#"><i> </i>Vestibulum vitae lorem</a></li>
					<li><a href="#"><i> </i>augue turpis varius orci</a></li>
					<li><a href="#"><i> </i>Sed ultrices posere</a></li>
				</ul>		
				</div>
				<div class="clearfix"> </div>
			</div>					
			<div class="col-md-4 sap">
				<!---->
				<div class="cur-right">
					<h3>Curabitur egestas</h3>
						<div class="product">
							<a href="#" class="fashion"><img class="img-responsive " src="images/pic.jpg" alt=""></a>
							<div class="grid-product">
							<p>Phasellus scelerisque enim eget eros accumsan eget ullamco</p>
							<a href="#" class="more-info">More Info <i> </i></a> 
							</div>
						<div class="clearfix"> </div>
						</div>
						<div class="product">
							<a href="#" class="fashion"><img class="img-responsive " src="images/pic1.jpg" alt=""></a>
							<div class="grid-product">
							<p>Phasellus scelerisque enim eget eros accumsan eget ullamco</p>
							<a href="#" class="more-info">More Info <i> </i></a> 
							</div>
						<div class="clearfix"> </div>
						</div>
						<div class="product">
							<a href="#" class="fashion"><img class="img-responsive" src="images/pic2.jpg" alt=""></a>
							<div class="grid-product">
							<p>Phasellus scelerisque enim eget eros accumsan eget ullamco</p>
							<a href="#" class="more-info">More Info <i> </i></a> 
							</div>
						<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php include "footerhtml.php"?> 
</body>
</html>

