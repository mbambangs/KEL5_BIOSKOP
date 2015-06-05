<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/pemesanandata.php');


	// ambil nama pemesan berdasarkan email
	$dataNama=getNameByEmail($_SESSION['email']);
	$_SESSION['namauser']=$dataNama['nama'];
	//echo $_SESSION['namauser'];


	// get post data dari bioskopdetail
	$kodejadwal = $_POST["kodejadwal"];
	// masih statik -> belum bs ambil dari kalender krn belum fix
	$tanggalnya = "6 Juni 2015";
	//$kursi = $_POST["jlhkursidipesan"];
	//echo $kursi;

	//get detail pemesanan berdasarkan kode jadwal
	$dataDetail=getDataBioskop($kodejadwal);
	$tanggalpesan=getTanggalSekarang();
	$_SESSION['waktumulai']=$dataDetail['waktumulai'];
	$_SESSION['waktuselesai']=$dataDetail['waktuselesai'];
	$_SESSION['nama']=$dataDetail['nama'];
	$_SESSION['judulfilm']=$dataDetail['judulfilm'];
	$_SESSION['nomorstudio']=$dataDetail['nomorstudio'];
	$_SESSION['namabioskop']=$dataDetail['namabioskop'];
	$_SESSION['jalan']=$dataDetail['jalan'];
	$_SESSION['nomorkontak']=$dataDetail['nomorkontak'];
	$_SESSION['tanggalnya']=$tanggalnya;
	$_SESSION['kursi']=$_POST["jlhkursidipesan"];
	$_SESSION['tanggalsekarang']=$tanggalpesan;

	//echo $_SESSION['waktumulai'];

	// simpan ke session
	$_SESSION['kodepesan']=generateRandomString();
	// $_SESSION['jadwalpesan']='abc';
	// echo $_SESSION['jadwalpesan'];

	//insert data ke pemesanan
	$tanggal=date("Y-m-d H:i:s");
	$tanggalDay = date("Y-m-d");
    insertPemesanan($_SESSION['kodepesan'],$tanggal,$_SESSION['email']);

	 $cekNumRow = hitungNumRowInstance($kodejadwal,$tanggalDay);
	if ($cekNumRow==0){
		echo "jumlah row 0";
		insertInstance($kodejadwal,$tanggalDay);
	} else{
		echo "gagal";
	}
	//set variabel session lalu random kursinya sesuai dengan jumlah kursi yang dipesan
	$jumlahKursi = $_SESSION['kursi'];
	$idKursi=getRandomKursi($jumlahKursi);

	// session dibawah ini untuk dilempar ke halaman pesantiket.php
	$_SESSION['dataKursi']=$idKursi;
	//perulangan dibawah ini untuk memasukkan data ke db relasi tiket
	foreach ($idKursi as $nomorKursi) {
		  		$_SESSION['idtiket']=getKodeTiket();
		  		echo $nomorKursi['idkursi'];
		  		echo $nomorKursi['nomorkursi'];
		  		insertTiket($kodejadwal,$tanggal,$_SESSION['idtiket'],$nomorKursi['idkursi'],$_SESSION['kodepesan']);
	}
//	echo generateRandomString();

	// ambil total yang harus dibayar berdasarkan idpesan
	$totalBayar=getTotalBayar($_SESSION['kodepesan']);
	$_SESSION['totalharga']=$totalBayar['totalharga'];
	echo $_SESSION['totalharga'];
	header ("refresh:0;url=../pesantiket.php");
	die();

?>