<?php 
	$basedir = $_SERVER['DOCUMENT_ROOT']."/KEL5_BIOSKOP/";
	include ($basedir.'common/db.php');

	function getallcity(){
		if(connect_db() != FALSE){
			$query_string="SELECT * FROM kota_kab order by nama asc";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	
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
	
	function getbioskopdetail($jaringan, $kodebioskop){
		if(connect_db() != FALSE){
			$query_string="SELECT * FROM bioskop WHERE jaringan ='J1' and kodebioskop ='B01'";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}
	
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
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	
?>