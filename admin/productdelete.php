<?php 
require("../config/config.php");
 $new_id = $_GET['delete_id'];


$query = "DELETE FROM products WHERE id = '$new_id'";

if(mysqli_query($conn, $query)) {
   header("Location: productcreate.php");
} else {
	echo "ERROR ". mysqli_error($conn);
}
?>