<?php
	//basis data
	$basedir = '../';
	include ($basedir.'common/db.php');


	function generateRandomString($length = 10) {
    	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	function getKodeTiket($length = 3) {
    	$characters = '0123456789';
    	$charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	function getDataBioskop($kodeJadwal){
		if(connect_db() != FALSE){
			$query_string="Select J.kode,J.waktumulai,J.waktuselesai,F.judulfilm,J.nomorstudio,JB.nama as namabioskop,B.nama,B.jalan,B.nomorkontak
							From jadwal_film J,film F,jaringan_bioskop JB,Bioskop B
							Where J.bioskop=B.kodebioskop and J.kodefilm=F.kodefilm and JB.kode=J.jaringan and J.Kode='$kodeJadwal';";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}

	function getNameByEmail($Email){
		if(connect_db() != FALSE){
			$query_string="Select nama from users where email='$Email';";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}

	}
	function getTotalBayar($KodePesan){
		if(connect_db() != FALSE){
			$query_string="Select totalharga from pemesanan where kode='$KodePesan';";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}

	 function getTanggalSekarang(){ 
        $namaBulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"); 
        $today = date('l, jS F Y');  
        $sekarang = date('j') . " " . $namaBulan[(date('n')-1)] . " " . date('Y'). " ".date("H:i:s"); 
        return $sekarang; 
    }   

    
    function insertPemesanan($kode,$date,$email){
    	$koneksi = connect_db() ;
    	if(connect_db() != FALSE){
    	$kueri = "insert into pemesanan values ('$kode','$date','$email',0,FALSE,0,'')";
    	pg_query($koneksi, $kueri) or die("Eror dalam eksekusi kueri : $kueri\n"); 
    	}
    }
    	//cek apakah data instance udah ada atau belum
    function hitungNumRowInstance($kode,$tanggalDay){
    		$koneksi = connect_db() ;
    		if(connect_db() != FALSE){
    		$query_string="select * from jadwal_instance where kodejadwal='$kode' and tanggal='$tanggalDay';";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_num_rows($sql);
    		echo $result;
			return $result;
    	}
	}
     function insertInstance($kodejadwal,$tanggalDay){
    	$koneksi = connect_db() ;
    	if(connect_db() != FALSE && result==0){
    	$kueri = "insert into jadwal_instance values ('$kodejadwal','$tanggalDay',0)";
    	pg_query($koneksi, $kueri) or die("Eror dalam eksekusi kueri : $kueri\n"); 
    	}
    }
     function insertTiket($kodejadwal,$tanggal,$getKodeTiket,$kursiRandom,$kodepesan){
    	$koneksi = connect_db() ;
    	if(connect_db() != FALSE && result==0){
    	$kueri = "insert into tiket values ('$kodejadwal','$tanggal','$getKodeTiket','$kursiRandom','$kodepesan')";
    	pg_query($koneksi, $kueri) or die("Eror dalam eksekusi kueri : $kueri\n"); 
    	}
    }
    function getRandomKursi($jmlKursi){
    	if(connect_db() != FALSE){
			$query_string="select k.idkursi,k.nomorkursi 
			from kursi k
			where k.idkursi NOT IN (select idkursi from tiket where k.idkursi=idkursi)
			ORDER BY RANDOM()
			LIMIT '$jmlKursi';";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
    }

?>