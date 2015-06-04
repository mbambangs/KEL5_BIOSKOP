<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/historydata.php');
	
	if(isset($_POST['rating']) && isset($_POST['komentar']) && isset($_POST['kodepemesanan'])){
		$res = insertreviewintopemesanan($_POST['kodepemesanan'],$_POST['rating'],$_POST['komentar']);
		
		    alert("Review Ditambahkan");
			header ("refresh:0;url=../review.php");
			die();
			
		
	}
	function alert($a){
		echo "<script>alert('".mysql_real_escape_string($a)."');</script>";
	
	}
?>