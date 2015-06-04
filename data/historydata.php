<?php 
	$basedir = '../';
	include ($basedir.'common/db.php');
	
	function getdaftarpemesananbyuser($email){
		if(connect_db() != FALSE){
			$query_string="SELECT Distinct b.nama, f.judulfilm, p.waktu, p.totalharga, p.statusbayar, p.kode
							FROM pemesanan p, jadwal_instance jin, jadwal_film jf,  bioskop b,tiket t, film f
							WHERE p.kode = t.idpemesanan AND
							t.kodejadwal = jin.kodejadwal AND
							t.tanggal = jin.tanggal AND
							jin.kodejadwal = jf.kode AND
							jf.kodefilm = f.kodefilm AND
							jf.jaringan = b.jaringan AND
							jf.bioskop = b.kodebioskop AND
							p.emailpemesanan = '$email'";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result = pg_fetch_all($sql);
			return $result;
		}
	}
	function  getdetailpemesanan($idpemesanan){
		if(connect_db() != FALSE){
				$query_string="SELECT f.judulfilm, p.kode, u.nama, b.nama as namabioskop, jf.nomorstudio, jin.tanggal, jf.waktumulai,jf.waktuselesai,p.waktu, count(*) as total, p.totalharga, p.statusbayar, 
								(SELECT array_to_string(array_agg(kur.nomorkursi), ', ') 
									from tiket tik, kursi kur
									WHERE 
									tik.idkursi = kur.idkursi AND
									tik.kodejadwal=jin.kodejadwal and tik.idpemesanan=p.kode) as kursibooked
								FROM pemesanan p, users u,  bioskop b, jadwal_film jf, jadwal_instance jin, tiket t, film f
								WHERE
								p.kode = t.idpemesanan AND
								t.kodejadwal = jin.kodejadwal AND
								t.tanggal = jin.tanggal AND
								jin.kodejadwal = jf.kode AND
								jf.kodefilm = f.kodefilm AND
								jf.jaringan = b.jaringan AND
								jf.bioskop = b.kodebioskop AND
								p.emailpemesanan = u.email AND
								p.kode = '$idpemesanan'
								GROUP BY f.judulfilm, p.kode, u.nama, b.nama, jf.nomorstudio, jin.tanggal, jf.waktumulai,jf.waktuselesai, p.totalharga, p.statusbayar,jin.kodejadwal";
				$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
				$result = pg_fetch_array($sql);
				return $result;
		}
		
		
	}
	function insertreviewintopemesanan($kodepemesanan, $rating, $komentar){
		echo $kodepemesanan.' '.$rating.' '.$komentar;
		if(connect_db() != FALSE){
			$query_string = "UPDATE pemesanan SET nilaireview=$rating, komentarreview='$komentar'
			WHERE  kode='$kodepemesanan'";
			$sql = pg_query($query_string) or die("Query failed: ".pg_last_error());
			$result =  pg_fetch_all($sql);
			echo $result;
			return $result;
		}
	}
?>