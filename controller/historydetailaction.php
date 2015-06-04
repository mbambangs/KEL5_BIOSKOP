<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/historydata.php');
	
	if(isset ($_SESSION['email'])){
		$detailpemesanan = getdetailpemesanan($_GET['kodepemesanan']);
		$_SESSION['detailpemesanan'] = $detailpemesanan;
	}
	if(isset ($_SESSION['listhistorypemesanan'])){
		header ("refresh:0;url=../detailhistory.php");
		die();
	}
	else{
		header ("refresh:0;url=../login.php");
		die();
	}
?>