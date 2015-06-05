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
        require  dirname(__FILE__)."/headhtml.php"
     ?>
<body>
 <?php menu_output('Profile')?>
 <div class="slider">       
  <div class="banner">
<!--  <a href="#"><img src="images/bioskop.jpg" /></a></div> -->
   <div class="header_desc">            
  </div>
 </div>
  <!DOCTYPE html>
<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
  

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
  <script src="js/jquery.stickyheader.js"></script>

    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<style>
.panel-primary>.panel-heading {
  : 60font0 15px "Open Sans", Roboto, sans-serif;
  background:url(../images/body_bg.png);
  color: #fff;
  background-color: #A77BA7;
  border-color: #A77BA7;
}
  .indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  font-family: 'Roboto', sans-serif;
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Roboto, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}
.col-md-2{
  font: 600 15px "Open Sans", Roboto, sans-serif;
  font-size: 22px;
}
#id_accomodation{
  width:150px;   
}
</style>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h3>Konfirmasi Pemesanan Tiket</h3>
        <h2>KODE PEMESANAN :  <b><?php echo $_SESSION['kodepesan']; ?></b> </h2>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' action='payment.php'>
        
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Nama Pemesan</label>
            <div class='col-md-2'>
             <?php echo $_SESSION['namauser']; ?>
            </div>
          </div>

           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Bioskop</label>
            <div class='col-md-2'>
               <?php echo ($_SESSION['namabioskop'].','.$_SESSION['nama']); ?>
            </div>
          </div>

           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'></label>
            <div class='col-md-2'>
              <h4> <?php echo $_SESSION['jalan']; ?> </h4>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Judul Film</label>
            <div class='col-md-2'>
              <?php echo $_SESSION['judulfilm']; ?>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Tanggal Main</label>
            <div class='col-md-2'>
               <?php echo ($_SESSION['tanggalnya'].','.$_SESSION['waktumulai'].'-'.$_SESSION['waktuselesai']); ?>                
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Jumlah Tiket</label>
            <div class='col-md-2'>
              <?php echo $_SESSION['kursi']; ?>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Nomor Kursi</label>
            <div class='col-md-2'>
             <?php
                  $kursinya = $_SESSION['dataKursi'];
                    foreach($kursinya as $nomorKursi){ ?>
                        <img src="images/kursi.png"/><?php echo $nomorKursi['nomorkursi']; ?><br>
                    <?php
                    }
                    ?>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Tanggal Pesan</label>
            <div class='col-md-2'>
              <?php echo $_SESSION['tanggalsekarang']; ?>
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Total Tagihan</label>
            <div class='col-md-2'>
             <?php $totalbayar=number_format($_SESSION['totalharga'],2,',','.'); ?>
              IDR RP.<?php echo $totalbayar; ?>
            </div>
          </div>
         <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Pilih Cara Bayar</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation'>
                <option>KARTU KREDIT</option>
                <option>TRANSFER</option>
                <option>A T M</option>
              </select>
            </div>
            <br>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Bayar</button>
            </div>
           

        </form>
      </div>
    </div>
  </div>
</body>

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>
