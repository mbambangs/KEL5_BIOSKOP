<?php 
require_once 'themes/header.php';
if(isset($_GET['page'])){
	$folder = $mysqli->real_escape_string($_GET['page']);
	if($folder == 'logout'){
		session_destroy();
		header('Location: index.php');
		exit();
	}
	require $folder.'/process.php';
	require $folder.'/form.php';
	require $folder.'/list.php';
}
else{
	require 'home.php';
}	
require_once 'themes/footer.php';
?>