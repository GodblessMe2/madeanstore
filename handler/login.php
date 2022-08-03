<?php 
  session_start();

  require("../config/config.php");

  if (isset($_POST['login'])) {
  	$username = mysqli_real_escape_string($conn, $_POST['username']);
  	$password = mysqli_real_escape_string($conn, $_POST['password']);

  	$query = "SELECT * FROM customers WHERE username ='$username' AND password ='$password'";

  	$result = mysqli_query($conn, $query);

  	$data = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];


  	// var_dump($data['username']);

  	if ($usename = $data['username'] AND $password = $data['password']) {
  		// code...
  		$data = $_SESSION['loginId'] = array('login-id' => $data['id'], 'login-country' => $data['country_name'], 'login-state' => $data['state_name'], 'login-area' => $data['area_name']);

      if(isset($_SESSION['loginId'])){
        header("location: ../shopping-cart.php"); 
        // var_dump($data['login-state']);
      }
  	} else {
  		header('Location: ../customerforms.php');
  	}
  	
  }
  // mysqli_free_result($result);

  // mysql_close($conn);
