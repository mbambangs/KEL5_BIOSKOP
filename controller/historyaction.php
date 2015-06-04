<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/historydata.php');
	
	if(isset ($_SESSION['email'])){
		$historypemesanan = getdaftarpemesananbyuser($_SESSION['email']);
		$_SESSION['listhistorypemesanan'] = $historypemesanan;
	}
	if(isset ($_SESSION['listhistorypemesanan'])){
		header ("refresh:0;url=../history.php");
		die();
	}
	else{
		header ("refresh:0;url=../login.php");
		die();
	}
?>