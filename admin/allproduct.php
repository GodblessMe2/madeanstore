<?php
   require("../config/config.php");

   // Create Query
   $query = 'SELECT * FROM products ORDER BY created_at DESC';

   // Get Result
   $result = mysqli_query($conn, $query);

   // Fetch Data

   $store_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

   //Free Result
   mysqli_free_result($result);

   // Close Connection
   mysqli_close($conn); 

?>