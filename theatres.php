<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Nonton 21 - Home </title>
	<link href="jquery/jquery-ui.css" rel="stylesheet">
	
</head>
	<?php 
      	include dirname(__FILE__)."/common/def.php";
      	include dirname(__FILE__)."/common/output.php";
      	require_once dirname(__FILE__)."/headhtml.php";
     ?>
<body>
   	<?php include dirname(__FILE__)."/menu.php";
   		include dirname(__FILE__)."/slider.php";
   	?>
		<div class="container">
		<div class="content">
		<div class="content-top-grid">
					<div class="ui-widget">

  <label>Your preferred programming language: </label>

  <select id="combobox">

    <option value="">Select one...</option>

    <option value="ActionScript">ActionScript</option>

    <option value="AppleScript">AppleScript</option>

    <option value="Asp">Asp</option>

    <option value="BASIC">BASIC</option>

    <option value="C">C</option>

    <option value="C++">C++</option>

    <option value="Clojure">Clojure</option>

    <option value="COBOL">COBOL</option>

    <option value="ColdFusion">ColdFusion</option>

    <option value="Erlang">Erlang</option>

    <option value="Fortran">Fortran</option>

    <option value="Groovy">Groovy</option>

    <option value="Haskell">Haskell</option>

    <option value="Java">Java</option>

    <option value="JavaScript">JavaScript</option>

    <option value="Lisp">Lisp</option>

    <option value="Perl">Perl</option>

    <option value="PHP">PHP</option>

    <option value="Python">Python</option>

    <option value="Ruby">Ruby</option>

    <option value="Scala">Scala</option>

    <option value="Scheme">Scheme</option>

  </select>

</div>
		</div>

		<div class="content-bottom">
			<div class="content-top-in">
			</div>
		</div>
	</div>
</div>

	<script src="jquery/jquery-ui.js"></script>
	<?php include 'jquery-combo.php'?>

<?php include "footerhtml.php"?> 
</body>
</html>

