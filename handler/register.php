<?php 
require("../config/config.php");

if(isset($_POST['register'])){
   $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $userName = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $country = mysqli_real_escape_string($conn, $_POST['country']);
   $state = mysqli_real_escape_string($conn, $_POST['state']);
   
   if ($firstName == '' || $lastName == '' || $email == '' || $userName == '' || $password == '' || $country == '' || $state == '') {
      echo "<script>alert('Please All Fields Are Required');
        window.location.href = '../customerforms.php';
      </script>";
   } else {

      $query = "INSERT INTO customers(firstname, lastname, email, username, password, country_name, state_name)VALUES('$firstName', '$lastName', '$email', '$userName', '$password', '$country', '$state')";

      if (mysqli_query($conn, $query)) {
         echo "<script>alert('Welcome To Coza Store, Your Number One Shopping Store');
         window.location.href = '../customerforms.php';
         </script>";
      } else {
         echo "ERROR " .mysql_error($conn);
      }
   }
   
}




?>

