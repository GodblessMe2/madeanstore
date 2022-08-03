<?php 
session_start();


if(!empty($_GET['action'])) {
  foreach ($_SESSION['cart'] as $key => $value ) {
    print_r($key);
    if ($value['item_name'] === $value['item_name']) {
      unset($_SESSION['cart'][$key]);
         $_SESSION['cart'] = array_values($_SESSION['cart']);
         echo "<script>
           alert('item removed');
           window.location.href='shopping-cart.php';
         </script>";
    } 
  }
}

?>