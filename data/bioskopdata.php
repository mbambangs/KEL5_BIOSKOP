<?php 
	$basedir = '../';
	include ($basedir.'common/db.php');
<<<<<<< HEAD

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
=======
	
	function getbioskopdetail($jaringan, $kodebioskop){
		if(connect_db() != FALSE){
			$query_string="SELECT b.jaringan,b.kodebioskop,b.nama,b.nomorkontak, b.jalan,b.kotakab,b.emailadmin, kk.nama as namakabupaten, kk.provinsi
							 FROM bioskop b, kota_kab kk
							 WHERE kk.id = b.kotakab
						     AND b.jaringan ='$jaringan' AND b.kodebioskop ='$kodebioskop'";
>>>>>>> origin/master
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}
	function gettarifbybioskop($jaringan,$kodebioskop){
		if(connect_db()!=false){
			$query_string="SELECT * FROM harga_tiket
							WHERE tglawalberlaku > now()
							AND jaringan ='$jaringan' AND bioskop ='$kodebioskop'";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}
	function getfilmputarbybioskop($jaringan,$kodebioskop,$tanggal){
		if (empty ($tanggal))
			$tanggal= "date(now())";
		if(connect_db() != FALSE){
			$query_string= "SELECT distinct f.judulfilm, jf.nomorstudio, jf.kode, f.rating, jf.waktumulai, jf.tglawal,jf.tglakhir,
							(SELECT count(*) FROM kursi k WHERE jaringan='J1' AND bioskop='B01' AND nomorstudio=jf.nomorstudio)
							-(SELECT count(*) FROM tiket tik, kursi kur, jadwal_film jfil 
							  WHERE jfil.kode=tik.kodejadwal AND jfil.kode = jf.kode 
							  AND kur.idkursi = tik.idkursi AND jfil.jaringan='$jaringan' 
							  AND jfil.bioskop='$kodebioskop' AND jfil.nomorstudio=jf.nomorstudio) 
							as jlhkursikosong
							FROM  jadwal_film jf, film f, studio s, kursi k, tiket t
							WHERE jf.kodefilm = f.kodefilm
							AND jf.jaringan= s.jaringan
							AND jf.bioskop=s.bioskop
							AND jf.nomorstudio = s.nomor
							AND jf.jaringan='$jaringan' AND jf.bioskop='$kodebioskop'
							AND jf.tglawal < to_date('$tanggal','MM-DD-YYYY')";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	
	
?>