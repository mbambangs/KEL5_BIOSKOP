<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/pemesanandata.php');

	updatePemesanan($_SESSION['kodepesan']);
	header ("refresh:0;url=../sukses.php");
	die();

?>