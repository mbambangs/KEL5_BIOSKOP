<?php
	include 'def.php';
    function connectDB(){
		//Database connection
// 		$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=test123";
    	$conn_string = "host=".DB_HOST." port=".DB_PORT." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASS;
//     	echo $conn_string;
		$dbconn = pg_pconnect($conn_string);
		return $dbconn;
    }
?>
