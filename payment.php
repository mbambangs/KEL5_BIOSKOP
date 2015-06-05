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
  font: 600 15px "Open Sans", Roboto, sans-serif;
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
}
#id_accomodation{
  width:150px;   
}
</style>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Pembayaran Pesanan <?php echo $_SESSION['kodepesan']; ?> </h5>
        <h3> Kartu Kredit </h3>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' action='konfirmasibayar.php'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Jenis Kartu</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation'>
                <option>VISA</option>
                <option>MASTERCARD</option>
                <option>PAYPAL</option>
              </select><img src="images/pembayaran.jpg"/>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Nomor Kartu</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='No.Kartu' type='text'>
                </div>
              </div>
              <div class='col-md-2'>
              	 <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='' type='text'>
                </div>
              </div>
             <div class='col-md-2'>
                 <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='' type='text'>
                </div>
              </div>
              <div class='col-md-2'>
                 <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='' type='text' >
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Nama Pemegang Kartu</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Nama Pemegang Kartu' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Tanggal Kadaluarsa</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment'>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                </div>
              </div>
              <div class='col-md-9'>
              	<div class='col-md-3'>
                <div class='form-group internal'>
                  	<select class='form-control' id='id_equipment'>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                  </select>
              </div>
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Kode CVC*</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Negara Bank Penerbit</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment'>
                    <option>INDONESIA</option>
                    <option>MALAYSIA</option>
                    <option>AMERIKA SERIKAT</option>
                    <option>SINGAPURA</option>
                  </select>
                </div>
              </div> 
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Bank Penerbit Kartu</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='' type='text'>
                </div>
              </div>
            </div>
          </div>
        <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Ketentuan</label>

            <div class='col-md-8'>
              <div class='make-switch' data-off-label='TIDAK' data-on-label='YA' id='id_pets_switch'>
                <input id='id_pets' type='checkbox' value='chk_hydro'>
              </div>
              <br>Anda menyetujui syarat dan ketentuan yang berlaku yang dikeluarkan oleh pihak Bank dan menyetujui
    		  untuk membayar kepada kami.
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Bayar</button>
            </div>
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
