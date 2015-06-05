<?php
	//basis data
	$basedir = '../';
	include ($basedir.'common/db.php');


	
    function updatePemesanan($kode){
    	$koneksi = connect_db() ;
    	if(connect_db() != FALSE){
    	$kueri = "update pemesanan set statusbayar=TRUE where kode='$kode'";
    	pg_query($koneksi, $kueri) or die("Eror dalam eksekusi kueri : $kueri\n"); 
    	}
    }
   

?>