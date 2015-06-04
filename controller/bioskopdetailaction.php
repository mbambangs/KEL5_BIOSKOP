<?php
	session_start();
	$basedir = '../';
	include ($basedir.'data/bioskopdata.php');
	if(isset ($_SESSION['email'])){
	

	    if(isset($_GET['jaringan'] )&& isset($_GET['kodebioskop']) ){
			//getbioskopinfo
			$bioskop= getbioskopdetail($_GET['jaringan'], $_GET['kodebioskop']);
			$_SESSION['jaringan']=$bioskop['jaringan'];
			$_SESSION['kodebioskop']=$bioskop['kodebioskop'];
			$_SESSION['namabioskop']=$bioskop['nama'];
			$_SESSION['nomorkontak']=$bioskop['nomorkontak'];
			$_SESSION['jalan']=$bioskop['jalan'];
			$_SESSION['kotakab']=$bioskop['namakabupaten'].', '.$bioskop['provinsi'];
			$_SESSION['emailadmin']=$bioskop['emailadmin'];
			
			//get tarif info
			$tarif= gettarifbybioskop($_GET['jaringan'], $_GET['kodebioskop']);
			$_SESSION['tglawalberlaku']=$tarif['tglawalberlaku'];
			$_SESSION['harilibur']=$tarif['harilibur'];
			$_SESSION['harikerja']=$tarif['harikerja'];
		
			if(isset($_SESSION['jadwaltayang']))
				unset($_SESSION['jadwaltayang']);
			
	    	//get jadwal tayang
	    	if(isset ($_POST['datetosee'])){
	    		$filmputars = getfilmputarbybioskop($_GET['jaringan'], $_GET['kodebioskop'], $_POST['datetosee']);
	    		$_SESSION['jadwaltayang']=$filmputars;
	    		$_SESSION['tanggal']=$_POST['datetosee'];
	    		
	    	}
	    	
	    }
		
		
		if(isset($_SESSION['jaringan'])){
			header ("refresh:0;url=../detailbioskop.php?jaringan=".$bioskop['jaringan']."&kodejaringan=".$bioskop['kodebioskop']);
			die();
		}
		else{
			header ("refresh:0;url=../login.php");
			die();
		}
	}
	
?>
