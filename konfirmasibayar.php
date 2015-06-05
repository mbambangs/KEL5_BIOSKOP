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
  <meta http-equiv="refresh" content="5;URL='controller/konfirmasibayaraction.php'" />
 <?php menu_output('Profile')?>
 <div class="slider">       
  <div class="banner">
<!--  <a href="#"><img src="images/bioskop.jpg" /></a></div> -->
   <div class="header_desc">            
  </div>
 </div>
  <!DOCTYPE html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
*, *:after, *:before{
  -moz-box-sizing: border-box;
       box-sizing: border-box;
}
body{
  margin: 0;
  font-family: "Open Sans",sans-serif;
}
.loader-wrap{
  background: #333 url("back.png") repeat center center fixed;
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 99999;
}
.loader{
  font-size: 0;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
      -ms-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
  width: 120px;
  height: 20px;
}
.loader:after{
  color: white;
  content: "Proses Verifikasi Pembayaran...";
  font-family: "Open Sans", Roboto, sans-serif;
  font-size: 15px;
  position: absolute;
  width: 120px;
  top: 40px;
  left: 5px;
  text-align: center;
}
[class*='box-']{
  display: inline-block;
  font-size: 15px;
  line-height: 20px;
  margin-right: 5px;
  height: 20px;
  width: 20px;
  border: 5px solid rgba(0,183,229,0.9);
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  box-shadow: 0 0 10px #2187e7;
  border-radius: 50%;
  -webkit-transform: scale(0.7);
      -ms-transform: scale(0.7);
          transform: scale(0.7);
  -webkit-animation: loader 1s infinite linear;
          animation: loader 1s infinite linear;
}
[class*='box-']:last-child{
  margin-right: 0;
}
.box-1{
  -webkit-animation-delay: .4s;
          animation-delay: .4s;
}
.box-2{
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
.box-3{
  -webkit-animation-delay: .2s;
          animation-delay: .2s;
}
.box-4{
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
.box-5{
  -webkit-animation-delay: .4s;
          animation-delay: .4s;
}
@-webkit-keyframes loader{
    0% {
        -webkit-transform: scale(1.2);
                transform: scale(1.2);
        opacity: 1;
    }

    100% {
        -webkit-transform: scale(0.7) rotate(10deg);
                transform: scale(0.7) rotate(10deg);
        opacity: 0.1;
    }
}
@keyframes loader{
    0% {
        -webkit-transform: scale(1.2);
                transform: scale(1.2);
        opacity: 1;
    }

    100% {
        -webkit-transform: scale(0.7) rotate(10deg);
                transform: scale(0.7) rotate(10deg);
        opacity: 0.1;
    }
}
</style>
  <body>
    <div class="loader-wrap">
  <div class="loader">
    <div class="box-1 box"></div>
    <div class="box-2 box"></div>
    <div class="box-3 box"></div>
    <div class="box-4 box"></div>
    <div class="box-5 box"></div>
  </div>
</div>
  </body>

 <?php include "footerhtml.php"?>
 $(window).load(function() {
  $(".loader-wrap").fadeOut("slow");
})
</body>
</html>

<?php } ?>
