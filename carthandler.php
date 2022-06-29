<?php 
session_start(); 

if(isset($_SESSION['cart'])) {
	$count = count($_SESSION['cart']);
	$_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price'], 'item_image' => $_GET['cart_image']);
	$detail = 'js-addcart-detail';
	if ($detail == js-addcart-detail) {
		echo "Hello world";
	} else {
		echo "not set";
	}
} else {
	$_SESSION['cart'][0] = array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price'], 'item_image' => $_GET['cart_image']);
	echo "<script>alert('Product Added');
	              window.location.href='product.php';
	      </script>";
}
var_dump($_SESSION['cart']);
?>

