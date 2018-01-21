<?php 
	session_start();
	$_SESSION['username'];
	session_destroy();
	echo "<script>location.replace('index.php')</script>";
?>