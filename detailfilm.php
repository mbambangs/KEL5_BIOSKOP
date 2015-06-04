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
		$results = getdetailfilm();
		for ($i=0; $i < count($results); $i++) {
		
			
		}
		
		echo "<pre>".print_r($results, true)."</pre>";
		exit();
   	?>
	<div class="container" id="container">
		<div class="content">
			<div class="content-top-grid">
				<div class="ui-widget">

	<div>
	<h1 class="new-text-center">Detail Film</h1>
	</div>
		
		<form method="get" action="detailfilm.php" style="width:auto;" >
			<table align="left" style="width:80%">
				<tr>
				<th colspan="3"><?php echo $results[0]['judulfilm']?></th>
				</tr>
				
				<tr>
				<th width="45px">Rating</th>
				<td width="5px">:</td>
				<td><?php echo $results[0]['rating'].' dari ' .$results[0]['jmlperating'] ?></td>
				</tr>
				
				<tr>
				<th width="45px">Genre</th>
				<td width="5px">:</td>
				<td>isi genre</td>
				</tr>
				
				<tr>
				<th width="45px">Sutradara</th>
				<td width="5px">:</td>
				<td>isi sutradara</td>
				</tr>
				
				<tr>
				<th width="45px">Sinopsis</th>
				<td width="5px">:</td>
				<td>isi sinopsis</td>
				</tr>

				<tr>
				<th width="45px">Trailer</th>
				<td width="5px">:</td>
				<td>isi trailer</td>
				</tr>
				
				<tr>
				<th colspan="3">Review</th>
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

				<tbody>
					<?php 
						$currentjaringan = "";
						$rowPerPage = 3;
						for ($i=0; $i < count($results); $i++) {
							$jaringan = 'asd';
							if ($currentjjaringanStringaringan != $results[$i]['nama']) {
								$currentjaringan = $results[$i]['nama'];
								$jaringanString = $currentjaringan;
							}
							
							if (($i % $rowPerPage) == 0) {
								$currentjaringan = "";
								$jaringanString = $results[$i]['nama'];
							}
							
					?>
					<tr class="listRowData" data-index="<?php echo $i; ?>">
						<td><?php echo $results[$i]['nama'] ?></td>
						<td><?php echo $results[$i]['nilaireview'] ?></td>
						<td><?php echo $results[$i]['komentarreview'] ?></td>
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
				var allData = <?php echo count($results); ?>;
				var allRowElement = $("#listData .listRowData");
				var tableList = $("#listData");
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
					allRowElement.hide();
				}
				
				var setPagePagination = function(index) {
					hideAll();
					var i;
					for (i = 0; i < page[index].length; i++) {
						page[index][i].show();
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