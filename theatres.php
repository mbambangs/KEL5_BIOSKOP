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
   	<?php include dirname(__FILE__)."/menu.php";
   		include dirname(__FILE__)."/slider.php";
   	?>
   	<a href="controller/bioskopdetailaction.php?jaringan=J1&kodebioskop=B01">Cinema XX 21</a>
   	<?php include "footerhtml.php"?> 
</body>
</html>

<?php } ?>