<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Theater </title>
	<link href="jquery/jquery-ui.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<style>
		.listRowData, .prev {
			display:none;
		}
		.navigation {
			color: #fff;
		}
		.navigation .nav {
			padding: 10px;
			color: #fff;
			margin: 10px;
			cursor:pointer;
			border: 1px solid #fff;
			float: left;
		}
	</style>
</head>
	<?php 
      	include dirname(__FILE__)."/common/def.php";
      	require_once dirname(__FILE__)."/headhtml.php";
     ?>
<body>
   	<?php 
		include dirname(__FILE__)."/menu.php";
   		include dirname(__FILE__)."/slider.php";
   		include dirname(__FILE__)."/data/bioskopdata.php";
		$results = false;
		$citySelected = '';
		$rowPerPage = 10;
		if (isset($_GET)) {
			if (($_GET['judulfilm'] != '') && ($_GET['cityname'] != '')) {
				$citySelected = $_GET['cityname'];
				$results = getMovieByCityAndTitle($_GET['cityname'], $_GET['judulfilm']);
			}
			else if ($_GET['cityname'] != ''){
				$citySelected = $_GET['cityname'];
				$results = gettheaterresult($_GET['cityname']);
				
			}
			if ((count($_GET) != 0) && empty($_GET['cityname'])) {
				echo '<script>alert("kolom kota harus diisi")</script>';
			}
		}
   	?>
	<div class="container" id="container">
		<div class="content">
			<div class="content-top-grid">
				<div class="ui-widget">

	<div>
	<h1 class="new-text-center">Cari Bioskop</h1>
	</div>
		
		<form method="get" action="theatres.php" >
			<table style="width:100%">
				<tr>
				<th>Nama Kota</th>
				<td>
				<!-- Combo box  -->
				<select id="combobox" name="cityname" >
				<option value="">Select one...</option>
				<?php 
					$cities=$_SESSION['listcities'];
					foreach($cities as $city){?>
						<?php $attrAdditional = ''; if($city['id'] == $citySelected) { $attrAdditional = 'selected'; } ?>
						<option <?php echo $attrAdditional; ?> value="<?php echo $city['id'];?>"><?php echo $city['nama'];?></option>
					<?php } ?>
				</select>
				</td>
				</tr>
				
				<tr>
				<th>Judul Film</th>
				<td>
				<!-- Film Text box -->
				<input type="text" style="width:78%" class="form-control" id="usr" name="judulfilm">
				</td></br>
				</tr>
				
				<td colspan="2">
				<!-- Submit button -->
				<div class="wrapper">
				<button type="submit">Cari Bioskop</button>
				</td>
				</div>
			</table>
		</form>
				</div>
			</div>
			
			<div class="content-bottom">
				<div class="content-top-in">
				<?php 
					if ($results != false) {
				?>
				<table id="listData" class="table table-striped">
				<thead>
	  ...			<tr>
						<th>Jaringan</th>
						<th>Nama Bioskop</th>
						<th>Lokasi</th>
						<th>Telepon</th>
						<th>Tarif Minimal</th>
					</tr>
				</thead>
				<tbody id="listDataTable">
					<?php 
						$currentjaringan = "";
						for ($i=0; $i < count($results); $i++) {
							$jaringanString = '';
							if ($currentjaringan != $results[$i]['jaringan']) {
								$currentjaringan = $results[$i]['jaringan'];
								$jaringanString = $currentjaringan;
							}
							
							if (($i % $rowPerPage) == 0) {
								$currentjaringan = "";
								$jaringanString = $results[$i]['jaringan'];
							}
							
					?>
					<tr class="listRowData" data-index="<?php echo $i; ?>">
						<td ><?php echo $jaringanString ?></td>
						<td><a href="detail.php?jaringan=<?php echo $results[$i]['kodebioskop'] ?>&kode=<?php echo $results[$i]['kode'] ?>"><?php echo $results[$i]['nama'] ?></a></td>
						<td><?php echo $results[$i]['jalan'] ?></td>
						<td><?php echo $results[$i]['nomorkontak'] ?></td>
						<td><?php echo $results[$i]['harikerja'] ?></td>
					</tr>
					<?php 
						}
					?>
				</tbody>
				</table>
				<div class="navigation">
					<div id="prev" class="nav prev">Prev</div>
					<div id="next" class="nav next">Next</div>
				</div>
				<?php
				}
				
				if ($results == false && count($_GET) > 0) {
					echo '<h2 style="text-align:center; color: #fff;">Data tidak ditemukan.<h2>';
				}
				?>
				</div>
			</div>
		</div>
	</div>
	<?php include 'jquery-combo.php'?>
	<?php include "footerhtml.php"?> 
	<?php
		if (isset($_GET)) {
	?>
		<script>
			
			$(window).load(function(){
				$(window).scrollTop( parseInt($('#container').offset().top) );
				var rowPerPage = <?php echo $rowPerPage; ?>;
				var allData = <?php echo count($results); ?>;
				var allRowElement = $("#listData .listRowData");
				var tableList = $("#listData");
				var listDataTable = $("#listDataTable");
				var prev = $("#prev");
				var next = $("#next");
				var i, page = [], listPageData = [];
				
				for (i = 1; i <= allData; i++) {
					listPageData.push($("#listData tr[data-index='"+(i-1)+"']"));
					var isChangeGroup = (i % rowPerPage) == 0;
					if (isChangeGroup) {
						page.push(listPageData);
						listPageData = [];
					}
					else {
						if (i == allData) {
							page.push(listPageData);
						}
					}
				}
				
				var hideAll = function() {
					listDataTable.empty();
				}
				
				var setPagePagination = function(index) {
					hideAll();
					var i;
					for (i = 0; i < page[index].length; i++) {
						listDataTable.append(page[index][i].show());
					}
					tableList.attr('current-index', index);
				}
				
				var setEventButton = function() {
					next.off('click')
						.on('click', function(){
							var currentIndex = parseInt(tableList.attr('current-index'), 10);
							setPagePagination(currentIndex + 1);
							tableList.attr('current-index', currentIndex + 1);
							prev.show();
							if (typeof page[currentIndex + 1 + 1] == "undefined") {
								next.hide();
							}
						});
					
					prev.off('click')
						.on('click', function(){
							var currentIndex = parseInt(tableList.attr('current-index'), 10);
							setPagePagination(currentIndex - 1);
							tableList.attr('current-index', currentIndex - 1);
							next.show();
							if (typeof page[currentIndex - 1 - 1] == "undefined") {
								prev.hide();
							}
						});
				}
				
				setPagePagination(0);
				setEventButton();
				
			});
		</script>
	<?php
		}
	?>
</body>
</html>