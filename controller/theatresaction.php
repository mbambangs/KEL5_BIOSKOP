<?php
    session_start();
	$basedir="../";
	require_once $basedir."/data/bioskopdata.php";
	
	$listcity = getallcity();
	$_SESSION['listcities']=$listcity;
	//print_r ($listcity);
	if(isset($_SESSION['listcities'])){
		header("refresh:0;url=../theatres.php");
		die();
	}
?>