<?php 
  $host = "localhost";
  $user = "root";
  $password = "Accountant1234";
  $dbname = "alptem_store";

  // Create Connection 
  $conn = mysqli_connect($host, $user, $password, $dbname);

  if (mysqli_connect_errno()) {
  	// code...
  	echo "Failed to connect to the database ".mysqli_connect_errno();
  }


?>