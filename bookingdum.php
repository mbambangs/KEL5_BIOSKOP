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
 <?php menu_output('Profile')?>

 	<!DOCTYPE html>
<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
  

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
  <script src="js/jquery.stickyheader.js"></script>

  	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<style>
	.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}

</style>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h1>NONTON 21</h1>
      </div>
      <div class='panel-heading'>
        <h3>ANGKLUNG PLATINUM Cinema 21</h3>
        <h5>Jln. Garnisun, Sudirman, Jakarta </h5>
        <h5>(021)123456</h5>
      </div>
 			<table>
					<thead>
						<tr>
							<th>Film</th>
							<th>Studio</th>
							<th>Rating</th>
							<th>Jam Tayang</th>
							<th>Jumlah Kursi<p> Kosong</th>
							<th>#Tiket <p> Dipesan</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr><td class="user-name">Doraemon : The Battle of The Five Armies</td><td class="user-email">Studio 1</td><td class="user-phone">9,0</td><td class="user-mobile">12.00 14.00 16.00</td><td class="user-mobile">1</td><td class="user-mobile"><input class='form-control' id='id_first_name'  type='text' size="1" value="0">
                </div></td><td class="user-mobile"> <button class='btn-lg btn-danger' style='float:right' type='submit'>Pesan</button></td></tr>
						<tr><td class="user-name">Doraemon : The Battle of The Five Armies</td><td class="user-email">Studio 1</td><td class="user-phone">9,0</td><td class="user-mobile">12.00 14.00 16.00</td><td class="user-mobile">1</td><td class="user-mobile"><input class='form-control' id='id_first_name'  type='text' size="1" value="0">
                </div></td><td class="user-mobile"> <button class='btn-lg btn-danger' style='float:right' type='submit'>Pesan</button></td></tr>
                		<tr><td class="user-name">Doraemon : The Battle of The Five Armies</td><td class="user-email">Studio 1</td><td class="user-phone">9,0</td><td class="user-mobile">12.00 14.00 16.00</td><td class="user-mobile">1</td><td class="user-mobile"><input class='form-control' id='id_first_name'  type='text' size="1" value="0">
                </div></td><td class="user-mobile"> <button class='btn-lg btn-danger' style='float:right' type='submit'>Pesan</button></td></tr>
                		<tr><td class="user-name">Doraemon : The Battle of The Five Armies</td><td class="user-email">Studio 1</td><td class="user-phone">9,0</td><td class="user-mobile">12.00 14.00 16.00</td><td class="user-mobile">1</td><td class="user-mobile"><input class='form-control' id='id_first_name'  type='text' size="1" value="0">
                </div></td><td class="user-mobile"> <button class='btn-lg btn-danger' style='float:right' type='submit'>Pesan</button></td></tr>
					</tbody>
				</table>
    </div>
  </div>
</body>

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>