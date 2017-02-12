<?php

	session_start();
	unset($_SESSION['username']);
	session_destroy();
	$_SESSION = array();
	header("location: index.php")
?>