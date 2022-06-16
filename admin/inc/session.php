<?php
 session_start();

 if (empty($_SESSION['username'] AND $_SESSION['password'])) {
 	// code...
 	header('location: login.php');
 }

?>