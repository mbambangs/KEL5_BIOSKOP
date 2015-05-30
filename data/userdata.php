<?php
	$basedir = '../';
	include ($basedir.'common/db.php');
	
	function authenticate ($email,$password) {
	echo "test".$email .  $password;
	if( $usr = getbyusernameandpassword($email,$password) ){
			$password = ($password);
	
			if($usr["password"] === $password) {
				//jika login berhasil, register username pada session
				$_SESSION['admin_user'] = $email;
				//echo "lewat";
				return true;
			}
		}
		return false;
	}
	
	function getbyusernameandpassword($email, $password)
	{
// 		echo $email;
		$numrows=0;
		//username and password sent from form
		if(connect_db() != FALSE){
			$query_string="SELECT * FROM users WHERE email ='$email' and password ='$password'";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql); 
			return $result;
		}else
			echo "Not OK";
	}
	function countbyusernameandpassword($email, $password)
	{
		echo $email;
		$numrows=0;
		//username and password sent from form
		if(connect_db() != FALSE){
			$query_string="SELECT * FROM users WHERE email ='$email' and password ='$password'"; 
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$numrows = pg_num_rows ($sql);
			return $numrows;
		}else 
			echo "Not OK";
	}
?>

