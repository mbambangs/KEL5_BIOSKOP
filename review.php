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
      	require_once dirname(__FILE__)."/headhtml.php";
     ?>
</head>
<body>	
 <?php include dirname(__FILE__)."/menu.php";?>
 <div class="container">
	 <div class="col-md-6 contact-grid">
						<h4>Review</h4>
						<form action="controller/reviewaction.php" method="POST">
							<p class="your-para">Rating</p>
							<input type="text" name="rating" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Komentar:</p>
							<textarea cols="77" name ="komentar" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
							<div class="send">
								<input type="hidden" name="kodepemesanan" value="<?php echo $_GET['kodepemesanan'];?>"/>
								<input type="submit" value="Send" >
							</div>
						</form>
	</div>
</div>
<br/>
 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>