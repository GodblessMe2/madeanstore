<?php 
   require("../config/config.php");

   if (isset($_POST["submit"])) {
      // code...
      $categories = mysqli_real_escape_string($conn, $_POST['categories']);
      $query = "INSERT INTO categories (name) VALUES ('$categories')";

      if (mysqli_query($conn, $query)) {
         // code...
         echo "Successfully";
      } else {
         echo 'ERROR '. mysqli_error($conn);
      }
   }
?>