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
   		include dirname(__FILE__)."/data/detailfilmdata.php";
		$results = false;
		$code = $_GET;
		$codeBioskop = $code['bioskop'];
		$codeJaringan = $code['jaringan'];
		$film = $code['film'];
		$cityCode = '';
		$results = getdetailfilm($codeJaringan, $codeBioskop);
		$rowPerPage = 5;
		$jadwalFilm = false;
		if (isset($code['city'])) {
			$cityCode = $code['city'];
			$jadwalFilm = getjadwalfilm($codeJaringan, $cityCode, $film, $codeBioskop);
		}
	
   	?>
	<div class="container" id="container">
		<div class="content clearfix">
			<div class="content-top-grid">
				<div class="ui-widget">

	<div>
	<h1 class="new-text-center">Jadwal Tayang</h1>
	</div>
		
		<form method="get" action="jadwal.php" style="width:auto;" >
			<input type="hidden" name="bioskop" value="<?php echo $codeBioskop; ?>" />
			<input type="hidden" name="jaringan" value="<?php echo $codeJaringan; ?>" />
			<input type="hidden" name="film" value="<?php echo $film; ?>" />
			<table align="left" style="width:100%">
				<tr>
				<th colspan="4"><?php echo $results[0]['judulfilm']?></th>
				</tr>
				
				<tr>
				<th width="100px">Pilih Kota</th>
				<td width="5px">:</td>
				<td width="290px">
				<!-- Combo box  -->
				<select id="combobox" name="city" >
				<option value="">Select one...</option>
				<?php 
					$cities=$_SESSION['listcities'];
					foreach($cities as $city){?>
						<?php $attrAdditional = ''; if($city['id'] == $cityCode) { $attrAdditional = 'selected'; } ?>
						<option <?php echo $attrAdditional; ?> value="<?php echo $city['id'];?>"><?php echo $city['nama'];?></option>
					<?php } ?>
				</select>
				</td>
				<td>
					<button style="color: #fff;border: none;background: none;background-color: #666666;padding: 6px 15px;" type="submit">Cari Bioskop</button>
				</td>
				</tr>
				
				<tr>
				<th colspan="4">Jadwal Tayang</th>
				</tr>
				
			</table>
		</form>
				</div>
			</div>

			<div class="content-bottom">
				<div class="content-top-in">
				<?php if ($jadwalFilm) { ?>
				<table id="listData" class="table table-striped">
				<thead>
	  ...			<tr>
						<th>Bioskop</th>
						<th>Tanggal Berlaku</th>
						<th>Tanggal Berakhir</th>
						<th>Jam Tayang</th>
					</tr>				
				</thead>

				<tbody id="listDataTable">
					<?php 
						$currentName = "";
						for ($i=0; $i < count($jadwalFilm); $i++) {
							$namaString = '';
							if ($currentName != $jadwalFilm[$i]['nama']) {
								$currentName = $jadwalFilm[$i]['nama'];
								$namaString = $currentName;
							}
							
							if (($i % $rowPerPage) == 0) {
								$currentName = "";
								$namaString = $jadwalFilm[$i]['nama'];
							}
					?>
					<tr class="listRowData" data-index="<?php echo $i; ?>">
						<td><?php echo $namaString ?></td>
						<td><?php echo $jadwalFilm[$i]['tglawal'] ?></td>
						<td><?php echo $jadwalFilm[$i]['tglakhir'] ?></td>
						<td><?php echo $jadwalFilm[$i]['waktumulai'] ?></td>
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
				<?php } ?>
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
				var allData = <?php echo count($jadwalFilm); ?>;
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
				
				if (allData <= rowPerPage) {
					next.hide();
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