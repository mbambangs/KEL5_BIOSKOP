<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Home </title>
	<?php 
      	include dirname(__FILE__)."/common/def.php";
      	require_once dirname(__FILE__)."/headhtml.php";
     ?>
<body>
   	<?php 
		include dirname(__FILE__)."/menu.php";
   		include dirname(__FILE__)."/slider.php";
   	?>
		<div class="container">
		<div class="content">
		<div class="content-top-grid">
				<h3>NOW PLAYING</h3>
				<div class="content-top-in">
				<div class="col-md-4 grid">
					<a href="images/m1.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m1.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Big Hero 6</a></h4>
						<p>Big Hero 6 adalah film 3D superhero animasi komputer yang diproduksi oleh Walt Disney Animation Studios, berdasarkan dari tim superhero Marvel Comics dengan nama yang sama.</p>
					<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>

				</div>
				<div class="col-md-4 grid">
					<a href="images/m2.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m2.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Sherlock Holmes</a></h4>
						<p>Sherlock Holmes adalah tokoh detektif fiksi rekaan Sir Arthur Conan Doyle, seorang pengarang dan dokter berkebangsaan Skotlandia. Diperankan oleh Robert Downney Jr</p>
						<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>
				</div>
				<div class="col-md-4 grid">
					<a href="images/m3.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m3.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Transcendence</a></h4>
						<p>Transcendence adalah sebuah film fiksi ilmiah yang disutradarai oleh Wally Pfister, dan ditulis oleh Jack Paglen.Dibintangi oleh Johnny Depp, Rebecca Hall, Kate Mara</p>
						<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>

		<div class="content-bottom">
			<div class="content-top-in">
				<div class="col-md-4 grid">
					<a href="images/m4.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/m4.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">Life of PI</a></h4>
						<p>Life of Pi adalah sebuah novel petualangan fantasi karya Yann Martel yang diterbitkan tahun 2001, Tokoh utamanya, Piscine Molitor "Pi" Patel, seorang bocah India dari Pondicherry</p>
					<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>

				</div>
				<div class="col-md-4 grid">
					<a href="images/r2.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/r2.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">The Amazing Spiderman 2</a></h4>
						<p>The Amazing Spiderman adalah film pahlawan super Amerika yang diadaptasi dari karakter Spider-Man terbitan Marvel Comics yang diperankan oleh Andrew Garfield</p>
						<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>
				</div>
				<div class="col-md-4 grid">
					<a href="images/r1.jpg" class="b-link-stripe b-animate-go  thickbox swipebox"><img class="img-responsive" src="images/r1.jpg" alt=""/></a>
					<div class="simply" >
						<h4><a href="#">The Lego Movie</a></h4>
						<p>The LEGO Movie adalah film animasi komputer tahun 2014 komedi petualangan Amerika-Australia yang akan datang disutradarai dan ditulis oleh Phil Lord dan Chris Miller</p>
						<a href="#" class="hvr-sweep-to-right">More Info</a> 
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<?php include "footerhtml.php"?> 
</body>
</html>

