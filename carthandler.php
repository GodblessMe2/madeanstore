<?php 
session_start(); 

if(isset($_POST['values'])) {
  $result = $_POST['values'];
  // echo $result;
}

if (isset($_SESSION['cart'])) {
$checker = array_column($_SESSION['cart'], 'item_name');
if (in_array($_GET['cart_name'], $checker)) {
		echo "<script>alert('Product already in the cart');
        window.location.href = 'product.php';
		</script>";
	} else {

	$count = count($_SESSION['cart']);
	$_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price'], 'item_image' => $_GET['cart_image'], 'item_quantity' => $result);
	echo "<script>alert('Product Added');
	              window.location.href='product.php';
	      </script>";
	  } 

} else {
	$_SESSION['cart'][0] = array('item_id' => $_GET['cart_id'], 'item_name' => $_GET['cart_name'], 'item_price' => $_GET['cart_price'], 'item_image' => $_GET['cart_image'], 'item_quantity' => $result);
	echo "<script>alert('Product Added');
	              window.location.href='product.php';
	      </script>";
}

// session_destroy();
// var_dump($_SESSION['cart']);
?>

