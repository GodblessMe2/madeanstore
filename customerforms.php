<?php 
 session_start();
 
if (isset($_SESSION['loginId'])) {
   header("location: shopping-cart.php");
  }
?>
<?php require("config/config.php"); ?>

<?php include("inc/head.php");?>
<?php include("inc/header.php");?>


   <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
      <h2 class="ltext-105 cl0 txt-center">Customers Login/Registration</h2>
   </section>
   <section class="bg0 p-t-104 p-b-116">
      <div class="container">
         <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
               <form action="handler/login.php" method="POST">
                  <h4 class="mtext-105 cl2 txt-center p-b-30">Sign in</h4>
                 <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="username" placeholder="Your Username" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/user2.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="password" placeholder="Your Password" type="password"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/padlock.png">
                  </div>
                  <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="login">Sign In</button>
               </form>
            </div>
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
               <form action="handler/register.php" method="POST">
                  <h4 class="mtext-105 cl2 txt-center p-b-30">Register Now</h4>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="firstname" placeholder="Your Firstname" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/add-user.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="lastname" placeholder="Your Lastname" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/add-user.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="email" placeholder="Your Email Address" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/icon-email.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="username" placeholder="Your Username" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/user2.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="password" placeholder="Your Password" type="password"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/padlock.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="country" placeholder="Country" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/map.png">
                  </div>
                  <div class="bor8 m-b-20 how-pos4-parent">
                     <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="state" placeholder="State" type="text"> 
                     <img alt="ICON" class="how-pos4 pointer-none" src="images/icons/contract.png">
                  </div>
                  <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="register">Register</button>
               </form>
            </div>
         </div>
      </div>
   </section>
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
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes">
   </script> 
   <script src="js/map-custom.js">
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