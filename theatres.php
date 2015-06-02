<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Theater </title>
	<link href="jquery/jquery-ui.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
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
				<div class="ui-widget">

	<div>
	<h1 class="new-text-center">Cari Bioskop</h1>
	</div>
		
		<form>
			<table style="width:100%">
				<tr>
				<th>Nama Kota</th>
				<td>
				<!-- Combo box  -->
				<select id="combobox" >
				<option value="">Select one...</option>
				<?php 
					$cities=$_SESSION['listcities'];
					foreach($cities as $city){?>
						<option value="<?php echo $city['id'];?>"><?php echo $city['nama'];?></option>
					<?php } ?>
				</select>
				</td>
				</tr>
				
				<tr>
				<th>Judul Film</th>
				<td>
				<!-- Film Text box -->
				<input type="text" style="width:78%" class="form-control" id="usr">
				</td></br>
				</tr>
				
				<td colspan="2">
				<!-- Submit button -->
				<div class="wrapper">
				<button>Cari Bioskop</button>
				</td>
				</div>
			</table>
		</form>
				</div>
			</div>
			
			<div class="content-bottom">
				<div class="content-top-in">
				</div>
			</div>
		</div>
	</div>
	<?php include 'jquery-combo.php'?>
	<?php include "footerhtml.php"?> 
	
</body>
</html>