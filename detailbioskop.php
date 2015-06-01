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
 <?php include dirname(__FILE__)."/menu.php";?>
 <div class="slider">				
	<div class="banner">
<!-- 	<a href="#"><img src="images/bioskop.jpg" /></a></div> -->
	 <div class="header_desc">						
	</div>
 </div>
 <div class="container">
	<div class="content">
	<div class="about">
<!-- 		<h4> Detail Bioskop</h4> -->
		<br/>
				<div class="about-in">
					<div class="col-md-8 in-profile">
						<h4> Detail Bioskop</h4>
						<div class="our-grid">
							<div class="col-md-6 sit-in">
								<a href="#" >
									<img src="images/cinema.jpg" alt="image" class="img-responsive ">
								</a>	
							</div>				
								<div class="col-md-6 our-head">
									<h6 ><a href="#"><?echo $_SESSION['namabioskop'];?></a></h6>
									<p>
										<? echo ($_SESSION['jalan'].', '.$_SESSION['kotakab'])."<br/>";
										 echo $_SESSION['nomorkontak'];?>
									</p>
									<br/>
									<table style="color:#787878">
										<tr>
											<td>Tarif</td>
											<td width="10">:</td>
											<td >Senin-Kamis IDR <? echo ($_SESSION['harikerja']); ?></td>
										</tr>
										<tr>
											<td></td>
											<td width="10"></td>
											<td >Jumat IDR <? 
											$hargajumat = $_SESSION['harikerja'] + 5000;
											echo ($hargajumat); ?></td>
										</tr>
											<td></td>
											<td width="10"></td>
											<td>Sabtu/Minggu/Libur: IDR <? echo ($_SESSION['harilibur']); ?><br/></td>	
										</tr>
									</table>	
									<br/><br/>
									
									<p>Tanggal : 
									<form role="form" action="controller/bioskopdetailaction.php?jaringan=<?echo $_SESSION['jaringan']?>&kodebioskop=<?echo $_SESSION['kodebioskop']?>" method="POST">
									<input style="color=#787878" type="text" name="datetosee" id="sel12" size="20" value="<?php if(!isset($_SESSION['tanggal'])){
																																echo date("m-d-Y");
																															}else{ echo ($_SESSION['tanggal']);} ?>"/ >
                       					 <script type="text/javascript">
                               			 	var cal = new Zapatec.Calendar.setup({
                               					inputField:"sel12",
                                				ifFormat:"%Y-%m-%d",
                               					button:"button2",
                                				showsTime:false });
                        				</script>
                        				<br/><br/>
                        				<div class="form-group">
											<input type="submit" class="btn btn-danger" value="Lihat jadwal">
										</div>
                        			</form>
								</div>
							<div class="clearfix"> </div>
							<br/>
							

          
    					</div>
   					 </div> 
				</div>
			</div>
					<div class="col-md-4 in-profile">
					<h4>Promo</h4>
					<div class="col-in-about">
						<span class="in-sed">1</span>
						<div class="left-sit">
							<h6><a href="#">Buy 1 Get 1 Using BNI Card</a></h6>
							<p>Dengan menggunakan kartu Debit BNI Online Prioritas kamu bisa mendapatkan promo beli 1 gratis 1.
							Berlaku hingga tanggal 20 Juni 2015</p>
							<img src="images/BNI-logo.png"/>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-in-about">
						<span class="in-sed">2</span>
						<div class="left-sit">
							<h6><a href="#">Get 50% discount for PopCorn</a></h6>
							<p>Ingin berbagi sesuatu dengan temanmu saat nonton? Dengan menjadi member kamu bisa dapatkan potongan 50% setiap pembelian Popcorn berukuran besar.
							Berlaku hingga tanggal 11 Juni 2015</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="content-team ">
				<h4 style="font-size: 14pt"> Jadwal Penayangan Film</h4>
							<div class="post">
						    <div class="entry">
						        <table id="datatable" class="dataTable">
						            <thead>
						                <tr>
						                    <th>Film</th>
						                    <th>Studio</th>
						                    <th>Rating</th>
						                    <th>Jam Tayang</th>
						                    <th>Jumlah Kursi Kosong</th>
						                    <th>#Tiket dipesan</th>
						                    <th>Silahkan pesan</th>
						                </tr>
						            </thead>
						            <tbody>
						                <?php
						                if(isset ($_SESSION['jadwaltayang'])){
											$jadwals = $_SESSION['jadwaltayang'];
						                	foreach($jadwals as $jadwal){?>
						                		<tr>
													<td><?php echo $jadwal['judulfilm'];?></td>
													<td><?php echo $jadwal['nomorstudio'];?></td>
													<td><?php echo $jadwal['rating'];?></td>
													<td><?php echo $jadwal['waktumulai'];?></td>
													<td><?php echo $jadwal['jlhkursikosong'];?></td>
													<td><input type="text" size="5" name="jlhkursidipesan"/></td>
								                    <td>
								                    		<form action="#" method="POST">
								                    		<input type="hidden" name="kodejadwal" value="<?php echo $jadwal['kode'];?>">
								                    		<input type="submit" class="btn btn-danger" value="Pesan">
								                    		</form>
								                    </td>
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
	</div>
</div>
  				

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>