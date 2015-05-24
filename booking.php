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
  		

 <?php include "footerhtml.php"?>
</body>
</html>

<?php } ?>