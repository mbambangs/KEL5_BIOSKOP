<?php
session_start();
if(isset ($_SESSION['email'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Home </title>
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
				<h4 style="font-size: 14pt"> Daftar pemesanan</h4>
							<div class="post">
						    <div class="entry">
						        <table id="datatable" class="dataTable">
						            <thead>
						                <tr>
						                	<th>Bioskop</th>
						                    <th>Film</th>
						                    <th>Tanggal Pesan</th>
						                    <th>Total</th>
						                    <th>Status Pembayaran</th>
						                    <th>Aksi</th>
						                </tr>
						            </thead>
						            <tbody>
						             <?php
						                if(isset ($_SESSION['listhistorypemesanan'])){
											$histories = $_SESSION['listhistorypemesanan'];
						                	foreach($histories as $history){?>

						                	<tr>
							              		<td><?php echo $history['nama'];?></td>
							              		<td><?php echo $history['judulfilm'];?></td>
							              		<td><?php echo $history['waktu'];?></td>
							              		<td><?php echo $history['totalharga'];?></td>
							              		<?php if($history['statusbayar']=='t'){?>
							              			<td><?php echo "Lunas";?></td>
							              		<?php }else{ ?>
							              			<td><?php echo "Belum Lunas";?></td>
							              		<?php }?>
							              		<td><a href="controller/historydetailaction.php?kodepemesanan=<?php echo $history['kode'];?>">Lihat</a></td>
						              		</tr>
						              		 <?php 
						                	}
						                }
						             ?>
						            </tbody>
						        </table>
						    </div>
						    </div>
		</div>
	</div>
</div>

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>