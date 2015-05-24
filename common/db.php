<?php
	include 'def.php';
    function connect_db(){
		//Database connection
// 		$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=test123";
    	$conn_string = "host=".DB_HOST." port=".DB_PORT." dbname=".DB_NAME." user=".DB_USER." password=".DB_PASS;
		$dbconn = pg_pconnect($conn_string);
		if($dbconn!=FALSE){
			$query_string="SET SEARCH_PATH TO ".DB_SEARCHPATH;
			pg_query($query_string) or die("Query failed: ".pg_last_error());
		}
		return $dbconn;
    }
?>
