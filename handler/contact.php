<?php 
   require("../config/config.php");

   if (isset($_POST['submit'])) {
   	// code...
   	$name = mysqli_real_escape_string($conn, $_POST['email']);
   	$msg = mysqli_real_escape_string($conn, $_POST['msg']);

   	$query = "INSERT INTO contact(email_contact, message) VALUES ('$name', '$msg')";

   	if (mysqli_query($conn, $query)) {
   		// code...
        echo "Successfully";
   	} else {
   		echo 'ERROR '. mysqli_error($conn);
   	}
   }



?>