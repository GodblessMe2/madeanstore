<?php 
//session_start();
?>
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>
    <div class="header-cart flex-col-l p-l-65 p-r-25">
      <div class="header-cart-title flex-w flex-sb-m p-b-8">
        <span class="mtext-103 cl2">Your Cart</span>
        <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
          <i class="zmdi zmdi-close"></i>
        </div>
      </div>

        <?php 
        session_start();
           if (isset($_SESSION['cart'])) {
             foreach ($_SESSION['cart'] as $value) {
               
           
        ?>
       
      <div class="header-cart-content flex-w js-pscroll">
        <ul class="header-cart-wrapitem w-full">
          <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img"><img alt="IMG" src="<?php echo $value['item_name']; ?>"></div>
            <div class="header-cart-item-txt p-t-8">
              <a class="header-cart-item-name m-b-18 hov-cl1 trans-04" href="#"><?php echo $value['item_name']; ?></a> 
              <span class="header-cart-item-info">1 x $<?php echo number_format($value['item_price']); ?></span>
            </div>
          </li>
           <?php 
            }
           }
         ?>
         <!--  <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img"><img alt="IMG" src="images/item-cart-02.jpg"></div>
            <div class="header-cart-item-txt p-t-8">
              <a class="header-cart-item-name m-b-18 hov-cl1 trans-04" href="#">Converse All Star</a> <span class="header-cart-item-info">1 x $39.00</span>
            </div>
          </li>
          <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img"><img alt="IMG" src="images/item-cart-03.jpg"></div>
            <div class="header-cart-item-txt p-t-8">
              <a class="header-cart-item-name m-b-18 hov-cl1 trans-04" href="#">Nixon Porter Leather</a> <span class="header-cart-item-info">1 x $17.00</span>
            </div
          </li> -->
        </ul>
        <div class="w-full">
          <div class="header-cart-total w-full p-tb-40">
            Total: $765.00
          </div>
          <div class="header-cart-buttons flex-w w-full">
            <a class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10" href="shoping-cart.html">View Cart</a> <a class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10" href="shoping-cart.html">Check Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>