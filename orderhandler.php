<?php 
 session_start();

 require("config/config.php");
 
 if (!isset($_SESSION['loginId'])) {
   header("location: customerforms.php");
  } else {
  	if (isset($_POST['placeOrder'])) {
  		$subtotal = mysqli_real_escape_string($conn, $_POST['subtotal']);
  		$paymentMethod = mysqli_real_escape_string($conn, $_POST['payment']);
  		$country = mysqli_real_escape_string($conn, $_POST['country']);
  		$state = mysqli_real_escape_string($conn, $_POST['state']);
  		$area = mysqli_real_escape_string($conn, $_POST['area']);
  		$phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
  		if($subtotal == 0) {
          echo "<script>alert('Add Item to cart');
        window.location.href = 'product.php';
		</script>";
  		} else {
          if ($subtotal == '' || $paymentMethod == '' || $country == '' || $state == '' || $area == '' || $phone == '') {
		      echo "<script>alert('Please Fill in all detail to process your order');
		        window.location.href = 'shopping-cart.php';
               </script>";
            } else {
            	
            }
  		}
  		// echo $subtotal;
  	}
  }

 ?>