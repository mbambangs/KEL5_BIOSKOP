<?php
session_start();
if(isset ($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 </title>
	<?php 
      	include dirname(__FILE__)."/common/def.php";
      	include dirname(__FILE__)."/common/output.php";
      	require_once dirname(__FILE__)."/headhtml.php";
     ?>
<body>	
  <?php
      unset($_SESSION['theatre']);
      unset($_SESSION['home']);
  	   $_SESSION['history']='History';
       include dirname(__FILE__)."/menu.php";?>
   <div class="container">
	<div class="content">
	<div class="content-team ">
		<h4 style="font-size: 14pt">Pemesanan Tiket Film</h4>
		<?php $detailpemesanan = $_SESSION['detailpemesanan'];?>
		<h2><b></b><?php echo $detailpemesanan['judulfilm']; ?></b></h2>
		<div class="col-md-6 grid-middle">
			<ul>
			
					<li><i> </i>
						Kode Pemesanan : <?php echo $detailpemesanan['kode']?>
					</li>
					<li><i> </i>
						Nama Pemesanan : <?php echo $detailpemesanan['nama']?>
					</li>
					<li><i> </i>
						Bioskop : <?php echo $detailpemesanan['namabioskop']?>
					</li>
					<li><i> </i>
						Studio : Studio <?php echo $detailpemesanan['nomorstudio']?>
					</li>
					<li><i> </i>
						Tanggal/Waktu:  <?php echo date($detailpemesanan['tanggal']).'/'.$detailpemesanan['waktumulai'].'-'.$detailpemesanan['waktuselesai'];?>
					</li>
					<li><i> </i>
						Jumlah Kursi :  <?php echo $detailpemesanan['total']; ?>
					</li>
					<li><i> </i>
						No Kursi : <?php echo $detailpemesanan['kursibooked']; ?>
					</li>
					<li><i> </i>
						Tanggal Pesan : <?php echo $detailpemesanan['kursibooked']; ?>
					</li>
					<li><i> </i>
						Total Tagihan : <?php echo $detailpemesanan['totalharga']; ?>
					</li>
					<li><i> </i>
						Status Pembayaran: <?php if($detailpemesanan['statusbayar']=='t'){?>
							              			<td><?php echo "Lunas";?></td>
							              		<?php }else{ ?>
							              			<td><?php echo "Belum Lunas";?></td>
							              		<?php }?>
					</li>
					
			</ul>
		<br/>
		<form action="review.php?kodepemesanan=<?php echo $detailpemesanan['kode']?>" method="POST">
		<div class="send">
   			<input type="submit"  value="Beri Review">
   		</div>
    	</form>		
		</div>
		<div class="clearfix"> </div>	
		
	</div>
	</div>
</div>

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>