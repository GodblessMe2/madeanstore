<?php 
require("../config/config.php");

if (isset($_POST['submit'])) {
	// code...
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$categories = mysqli_real_escape_string($conn, $_POST['categories']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);

	$prices = number_format($price, 2);

	echo $prices;

    if (isset($_FILES['picture'])) {
    	// code...
    	$img_name = $_FILES['picture']['name'];
    	$img_type = $_FILES['picture']['type'];
    	$tmp_name = $_FILES['picture']['tmp_name'];
    	$img_explode = explode('.', $img_name);
    	$img_ext = end($img_explode);
    	$extension = ["jpeg", "png", "jpg"];
    	$file_store ="uploads/".$img_name;
    	if(in_array($img_ext, $extension) === true) {
    		$types = ["image/jpeg", "image/jpg", "image/png"];
    		if (in_array($img_type, $types)=== true) {    			
    			 move_uploaded_file($tmp_name, $file_store);
    			 $query = "INSERT INTO products (name, price, picture, description, category_id) VALUES ('$name', '$price', '$file_store', '$description', '$categories')";

    			 if (mysqli_query($conn, $query)) {
    			 	// code...
    			 	header("Location: product.php");
    			 } else {
    			 	echo "ERROR ".mysql_error($conn);
    			 }
    			} else {
    				echo "Please upload an image file - jpeg, png, jpg";
    			}
    		} else {
    			echo "Please upload an image file - jpeg, png, jpg";
    		}
    	}

    }


?>