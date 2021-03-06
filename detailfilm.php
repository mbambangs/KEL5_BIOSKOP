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
		$codeBioskop = 'B03';
		$codeJaringan = 'J1';
		$rowPerPage = 5;
		$results = getdetailfilm($codeJaringan, $codeBioskop);
		for ($i=0; $i < count($results); $i++) {
			$genre[$i] = $results[$i]['nama'];
		}
		$genreString = implode(", ", $genre);
		
		$review = getreview($codeJaringan, $codeBioskop, $results[0]['kodefilm']);
	
   	?>
	<div class="container" id="container">
		<div class="content clearfix">
			<div class="content-top-grid">
				<div class="ui-widget">

	<div>
	<h1 class="new-text-center">Detail Film</h1>
	</div>
		
		<form method="get" action="detailfilm.php" style="width:auto;" >
			<table align="left" style="width:100%">
				<tr>
				<th colspan="3"><?php echo $results[0]['judulfilm']?></th>
				<th style="text-align:right;"><a style="color:#fff;" href="jadwal.php?bioskop=<?php echo $codeBioskop; ?>&jaringan=<?php echo $codeJaringan; ?>&film=<?php echo $results[0]['kodefilm']; ?>">[JADWAL TAYANG]</a></th>
				</tr>
				
				<tr>
				<th width="45px">Pilih Kota</th>
				<td width="5px">:</td>
				<td><?php echo $results[0]['rating'].' dari ' .$results[0]['jmlperating'] ?></td>
				</tr>
				
				<tr>
				<th width="45px">Genre</th>
				<td width="5px">:</td>
				<td><?php echo $genreString; ?></td>
				</tr>
				
				<tr>
				<th width="45px">Sutradara</th>
				<td width="5px">:</td>
				<td><?php echo $results[0]['sutradara']; ?></td>
				</tr>
				
				<tr>
				<th width="45px">Sinopsis</th>
				<td width="5px">:</td>
				<td><?php echo $results[0]['sinopsis']; ?></td>
				</tr>

				<tr>
				<th width="45px">Trailer</th>
				<td width="5px">:</td>
				<td><a href="<?php echo $results[0]['trailer']; ?>"><?php echo $results[0]['trailer']; ?></a></td>
				</tr>
				
				<tr>
				<th colspan="3">Jadwal Tayang</th>
				</tr>
				
			</table>
		</form>
				</div>
			</div>

			<div class="content-bottom">
				<div class="content-top-in">
				<table id="listData" class="table table-striped">
				<thead>
	  ...			<tr>
						<th>Reviewer</th>
						<th>Rating</th>
						<th>Komentar</th>
					</tr>				
				</thead>

				<tbody id="listDataTable">
					<?php 
						$currentjaringan = "";
						for ($i=0; $i < count($review); $i++) {
					?>
					<tr class="listRowData" data-index="<?php echo $i; ?>">
						<td><?php echo $review[$i]['nama'] ?></td>
						<td><?php echo $review[$i]['nilaireview'] ?></td>
						<td><?php echo $review[$i]['komentarreview'] ?></td>
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
				var allData = <?php echo count($review); ?>;
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