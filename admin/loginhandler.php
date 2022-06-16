<?php 
  session_start();

  require("../config/config.php");

  if (isset($_POST['submit'])) {
  	$username = mysqli_real_escape_string($conn, $_POST['username']);
  	$password = mysqli_real_escape_string($conn, $_POST['password']);

  	$query = "SELECT * FROM admins WHERE username ='$username' AND password ='$password'";

  	$result = mysqli_query($conn, $query);

  	$data = mysqli_fetch_assoc($result );

    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

  	// var_dump($data['username']);

  	if ($usename = $data['username'] AND $password = $data['password']) {
  		// code...
  		header('Location: index.php');
  	} else {
  		// code...
  		header('Location: login.php');
  	}
  	
  }

  mysqli_free_result($result);

  mysql_close($conn);





  	




?>