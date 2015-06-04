<?php 
	$basedir = $_SERVER['DOCUMENT_ROOT']."/KEL5_BIOSKOP/";
	include ($basedir.'common/db.php');

	function getdetailfilm(){
		if(connect_db() != FALSE){
			$query_string= "select distinct(f.judulfilm), f.sutradara, f.sinopsis, f.trailer ,f.rating, f.jmlperating, g.nama, f.kodefilm from film f, genre g, genre_film gf, jadwal_film jf
							where f.kodefilm = gf.kodefilm and g.kode = gf.kodegenre and 
							f.kodefilm =(select kodefilm from jadwal_film where jaringan='J1' and bioskop='B03' group by kodefilm)";
							
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	
	function getreview(){
		if(connect_db() != FALSE){
			$query_string="select u.nama, p.nilaireview, p.komentarreview from users u, pemesanan p where
						   u.email = p.emailpemesanan and u.email in (select u.email from users u, bioskop b where jaringan='J1' and kodebioskop='B03') and p.kode in (select t.idpemesanan from tiket t , jadwal_instance ji where t.kodejadwal=ji.kodejadwal and ji.kodejadwal in (
						   select ji.kodejadwal from jadwal_instance ji, jadwal_film jf where jf.kode = ji.kodejadwal and jf.kode in (select jf.kode from jadwal_film jf 
						   where jf.kodefilm='FL003' and jf.jaringan='J1' and jf.bioskop='B03')))";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_array($sql);
			return $result;
		}
	}

	
?>