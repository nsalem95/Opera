<?php
	
	session_start();
	session_destroy();
	echo $_SESSION['uname'];
	header("Location: index.php");
	exit();
	
?>