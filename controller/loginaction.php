<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/userdata.php');


	//ada yang mencoba login

	if(isset($_POST['email']) && isset($_POST['password'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if(authenticate($email,$password) ) {
			$_SESSION["email"]=$email;
			//jika login berhasil, redirect ke halaman account
			header("Location: ../index.php");
		}else{
			//login tidak berhasil redirect ke halaman login         
			header("Location: ../login.php");
		}
	}
?>
