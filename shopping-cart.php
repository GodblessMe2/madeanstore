<?php 
 session_start();

?>
<?php require("config/config.php"); ?>
<?php include("inc/head.php");?>
<?php include("inc/header.php");?>
<?php 

// if(isset($_POST['num-product1'])) {
//   echo "Successfully";
// }
// session_destroy();
  
?>

  <div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
      <a class="stext-109 cl8 hov-cl1 trans-04" href="index-2.html">Home <i aria-hidden="true" class="fa fa-angle-right m-l-9 m-r-10"></i></a> <span class="stext-109 cl4">Shoping Cart</span>
    </div>
  </div>
  <form class="bg0 p-t-75 p-b-85" method="POST" action="orderhandler.php">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
          <div class="m-l-25 m-r--38 m-lr-0-xl">
            <div class="wrap-table-shopping-cart">
              <table class="table-shopping-cart">
                <tr class="table_head">
                  <th class="column-1">Product</th>
                  <th class="column-2"></th>
                  <th class="column-3">Price</th>
                  <th class="column-4">Quantity</th>
                  <th class="column-5">Total</th>
                  <th class="column-5">Remove</th>
                </tr>

                <?php 
                 $subtotal = 0;
                  if(isset($_SESSION['cart'])) {
                    
                    foreach ($_SESSION['cart'] as $value) {
                     $total = $value['item_price'] * $value['item_quantity'];
                     $subtotal = $subtotal + $value['item_price'] * $value['item_quantity'];

                ?>

                <tr class="table_row">
                  <td class="column-1">
                    <div class="how-itemcart1"><img alt="IMG" src="admin/<?php echo $value['item_image']; ?>"></div>
                  </td>
                  <td class="column-2" name="item_name"><?php echo $value['item_name']; ?></td>
                  <td class="column-3" name="item_price">$ <?php echo number_format($value['item_price']); ?></td>
                  <td class="column-4" name="item_qty"><?php echo $value['item_quantity']; ?>
                    <!-- <div class="wrap-num-product flex-w m-l-auto m-r-0">
                      <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" disabled>
                        <i class="fs-16 zmdi zmdi-minus"></i>
                      </div>
                        <input class="mtext-104 cl3 txt-center num-product" name="num-product1"  type="number" value="" disabled>
                      <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-plus" disabled></i>
                      </div>
                    </div> -->
                  </td>
                  <td class="column-5">$ <?php echo number_format($total); ?></td>
                  <td>

                    <a href="hello.php?action=remove&name=<?php echo $value['item_name']; ?>" class="btn btn-danger">Remove</a>
                  </td>
                </tr>
                <?php 
                }
                  };
                ?>  
                <!-- <tr class="table_row">
                  <td class="column-1">
                    <div class="how-itemcart1"><img alt="IMG" src="images/item-cart-05.jpg"></div>
                  </td>
                  <td class="column-2">Lightweight Jacket</td>
                  <td class="column-3">$ 16.00</td>
                  <td class="column-4">
                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                      <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-minus"></i>
                      </div><input class="mtext-104 cl3 txt-center num-product" name="num-product2" type="number" value="1">
                      <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-plus"></i>
                      </div>
                    </div>
                  </td>
                  <td class="column-5">$ 16.00</td>
                </tr> -->
              </table>
            </div>
            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
              <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                Update Cart
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
          <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
            <h4 class="mtext-109 cl2 p-b-30">Cart Totals</h4>
            <div class="flex-w flex-t bor12 p-b-13">
              <div class="size-208">
                <span class="stext-110 cl2">Subtotal:</span>
              </div>
              <div class="size-209">
                <span class="mtext-110 cl2">$<?php echo number_format($subtotal);?></span>
              </div>
            </div>
            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
              <div class="size-208 w-full-ssm">
                <span class="stext-110 cl2">Shipping:</span>
              </div>
              <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                <p class="stext-111 cl6 p-t-2">There are no shipping methods available. Please double check your address, or contact us if you need any help.</p>

                <?php 
                     if(isset($_SESSION['loginId'])){
                      $data = $_SESSION['loginId'];
                  ?>

                <div class="p-t-15">
                  <span class="stext-112 cl8">Shipping</span>
                  <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">                    
                    <select class="js-select2" name="payment">
                      <option>
                        Select a payment method...
                      </option>
                      <option >
                        Cash on delivery
                      </option>
                      <option>
                        Paypal
                      </option>
                    </select>
                    <div class="dropDownSelect2"></div>
                  </div>
                  <div class="bor8 bg0 m-b-12">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" name="country" placeholder="Country" type="text" value="<?php echo $data['login-country']; ?>">
                  </div>
                  <div class="bor8 bg0 m-b-12">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" name="state" placeholder="State" type="text" value="<?php echo $data['login-state']; ?>">
                  </div>
                  <div class="bor8 bg0 m-b-22">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" name="area" placeholder="Area" type="text" value="<?php echo $data['login-area']; ?>">
                  </div>
                  <div class="bor8 bg0 m-b-22">
                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" name="phoneNumber" placeholder="Phone Number" type="number">
                  </div>
                </div>
                <?php }; ?>
              </div>
            </div>
            <div class="flex-w flex-t p-t-27 p-b-33">
              <div class="size-208">
                <span class="mtext-101 cl2">Total:</span>
              </div>
              <div class="size-209 p-t-1">
                <span class="mtext-110 cl2">$<?php echo number_format($subtotal);?></span>
              </div>
              <input type="hidden" name="subtotal" value="<?php echo number_format($subtotal);?>">
            </div>
            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" type="submit" name="placeOrder">Place Order</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <?php include("inc/footer.php"); ?>
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top"><i class="zmdi zmdi-chevron-up"></i></span>
  </div>
  <script src="vendor/jquery/jquery-3.2.1.min.js">
  </script> 
  <script src="vendor/animsition/js/animsition.min.js">
  </script> 
  <script src="vendor/bootstrap/js/popper.js">
  </script> 
  <script src="vendor/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="vendor/select2/select2.min.js">
  </script> 
  <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
  </script> 
  <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js">
  </script> 
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js">
  </script> 
  <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
  </script> 
  <script src="js/main.js">
  </script> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13">
  </script> 
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  </script>
</body>
</html>