<?php 
	$basedir = '../';
	include ($basedir.'common/db.php');

	function getallcity(){
		if(connect_db() != FALSE){
			$query_string="SELECT * FROM kota_kab order by nama asc";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	function getbioskopdetail($jaringan, $kodebioskop){
		if(connect_db() != FALSE){
			$query_string="SELECT * FROM bioskop WHERE jaringan ='J1' and kodebioskop ='B01'";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}
?>