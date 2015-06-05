<?php 
	$basedir = $_SERVER['DOCUMENT_ROOT']."/KEL5_BIOSKOP/";
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
<<<<<<< HEAD
	
	function gettheaterresult($city){
		if(connect_db() != FALSE){
			$query_string=	"select j.kode, b.kodebioskop, j.nama as jaringan,b.nama,b.jalan,b.nomorkontak,h.harikerja
							from bioskop b , jaringan_bioskop j, harga_tiket h
							where b.jaringan=j.kode and b.jaringan=h.jaringan and
							b.kodebioskop=h.bioskop and b.kotakab='$city'  and
							tglawalberlaku in (select validtgl from (select h.jaringan, h.bioskop, max(h.tglawalberlaku) as validtgl
							from harga_tiket h, bioskop b where h.jaringan=b.jaringan
							and h.bioskop=b.kodebioskop and h.jaringan=j.kode and b.kotakab='$city'
							and tglawalberlaku <= current_timestamp
							group by h.jaringan, h.bioskop) as tglaktif) order by j.nama asc";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	
=======
>>>>>>> origin/master
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
<<<<<<< HEAD
	
	function getMovieByCityAndTitle($city, $title) {
		if(connect_db() != FALSE){
			$query_string=	"select j.kode, b.kodebioskop, j.nama as jaringan,b.nama,b.jalan,b.nomorkontak,h.harikerja
							from bioskop b , jaringan_bioskop j, harga_tiket h
							where b.jaringan=j.kode and b.jaringan=h.jaringan and
							b.kodebioskop=h.bioskop and b.kotakab='$city' and
							tglawalberlaku in (select validtgl from (select h.jaringan, h.bioskop, max(h.tglawalberlaku) as validtgl
							from harga_tiket h, bioskop b where h.jaringan=b.jaringan
							and h.bioskop=b.kodebioskop and h.jaringan=j.kode and b.kotakab='$city' and h.jaringan in (select jf.jaringan from film f, jadwal_film jf where 
							f.kodefilm=jf.kodefilm and lower(judulfilm) like lower('%$title%') group by jf.jaringan) and h.bioskop in(select jf.bioskop from film f, jadwal_film jf where 
							f.kodefilm=jf.kodefilm and lower(judulfilm) like lower('%$title%') group by jf.bioskop )
							and tglawalberlaku <= current_timestamp
							group by h.jaringan, h.bioskop) as tglaktif) order by j.nama asc";
							//echo "<pre>".print_r($query_string, true)."</pre>";
							//exit();
=======
	function getfilmputarbybioskop($jaringan,$kodebioskop,$tanggal){
		if (empty ($tanggal))
			$tanggal= "date(now())";
		if(connect_db() != FALSE){
			$query_string= "SELECT distinct f.judulfilm, jf.nomorstudio, jf.kode, f.rating, jf.waktumulai, jf.tglawal,jf.tglakhir,
							(SELECT count(*) FROM kursi k WHERE jaringan='$jaringan' AND bioskop='$kodebioskop' AND nomorstudio=jf.nomorstudio)
							-(SELECT count(*) FROM tiket tik, kursi kur, jadwal_film jfil 
							  WHERE jfil.kode=tik.kodejadwal AND jfil.kode = jf.kode 
							  AND kur.idkursi = tik.idkursi AND jfil.jaringan='$jaringan' 
							  AND jfil.bioskop='$kodebioskop' AND jfil.nomorstudio=jf.nomorstudio
							  AND tik.tanggal=to_date('$tanggal','YYYY-MM-DD')) 
							as jlhkursikosong
							FROM  jadwal_film jf, film f, studio s, kursi k, tiket t, jadwal_instance jin
							WHERE jf.kodefilm = f.kodefilm
							AND jf.jaringan= s.jaringan
							AND jf.bioskop=s.bioskop
							AND jf.nomorstudio = s.nomor
							AND jf.jaringan='$jaringan' AND jf.bioskop='$kodebioskop'
							AND jin.tanggal = to_date('$tanggal','YYYY-MM-DD')";
>>>>>>> origin/master
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	
<<<<<<< HEAD
=======
	
>>>>>>> origin/master
?>