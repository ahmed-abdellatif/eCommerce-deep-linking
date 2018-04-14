<!--
********************************************************************************************************
** cart.php : This is where the user will view all of the added products in his/her cart.
**
** User will then have the option to : 'Update Cart' (not implemented) and most importantly
** 'Checkout'
**
********************************************************************************************************
-->

<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

?>
<!--
******************************************************************************************
* Begin html
******************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mobile Shop | iPhone, Samsung, LG | Columbia SC
  </title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Mobile Store. We sell phones, cases, accessories, and much more.">
  <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
  <meta name="author" content="almandine design">
  <!-- Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <!-- Favicon and Apple Icons-->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="touch-icon-iphone.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
  <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
  <link rel="stylesheet" media="screen" href="assets/css/vendor.min.css">
  <!-- Main Template Styles-->
  <link id="mainStyles" rel="stylesheet" media="screen" href="assets/css/styles.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet">
  <!-- Modernizr-->
  <script src="assets/js/modernizr.min.js"></script>
  <style>


  .title-banner {
    overflow-x: hidden;
    position: relative;
    bottom: -2.5em;
    -webkit-text-size-adjust: 100%;
    -webkit-overflow-scrolling: touch;
    -webkit-font-smoothing: antialiased !important;
    font-size: 52px;
    text-shadow: 1px 1px 1px #000;
    font-weight: 550;
    color: #fff;
  }

  </style>
</head>
<!-- Body-->
<body>
<!--
******************************************************************************************
* Begin Sidebar Navigation Fullscreen
******************************************************************************************
-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <a class="site-logo" href="index.php"><img src="../assets/img/logo/logo.png" alt="AA Mobile Accessories Columbia South Carolina" style="position:relative; bottom:-1em; margin:0 auto;"></a>
      </div>

      <nav class="offcanvas-menu">
        <ul class="menu">

      <!-- Home -->
        <li><a href="index.php">Home</a></li>

           <!-- Phone Cases Begin -->
          <li class="has-children"><span><a href="#">Phone Cases</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="iphone/iphone-home.php">iPhones</a></li>
              <li><a href="samsung/samsung-home.php">Samsung</a></li>
              <li><a href="motorola/motorola-home.php">Motorola</a></li>
              <li><a href="lg/lg-home.html">LG</a></li>
              <li><a href="zte/zte-home.php">ZTE</a></li>
              <li><a href="Alcatel/alcatel-home.php">Alcatel</a></li>
              <li><a href="google/google-home.php">Google</a></li>
              <li><a href="Huawei/huawei-home.php">Huawei</a></li>
              <li><a href="htc/htc-home.php">HTC</a></li>
              <li><a href="coolpad/coolpad-home.php">Coolpad</a></li>
            </ul>
          </li>
          <!-- Accessories -->
          <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="accessories/pouches.php">Pouches</a></li>
              <li><a href="accessories/bluetooth-speakers.php">Bluetooth/Speakers</a></li>
              <li><a href="accessories/chargers.php">Chargers</a></li>
              <li><a href="accessories/lcds.php">LCDs</a></li>
              <li><a href="accessories/holders.php">Phone Holders</a></li>
              <li><a href="accessories/headphones.html">Headphones</a></li>
            </ul>
          </li>

          <!-- Contact -->
          <li><a href="#contact">Contact</a></li>

          <!--Register/Login -->
          <?php

      if(isset($_SESSION['username'])){
        echo '<li><a href="account.php">My Account</a></li>';
        echo '<li><a href="orders.php">My Orders</a></li>';
        echo '<li><a href="logout.php">Log Out</a></li>';
      }
      else{
        echo '<li><a href="register.php"><span>Sign Up</span></a></li>';
        echo '<li><a href="login.php"><span>Log In</span></a></li>';
      }
      ?>

      </nav>
    </div>



<!--
******************************************************************************************
* Begin Sidebar Navigation Mobile Screen
******************************************************************************************
-->

    <div class="offcanvas-container" id="mobile-menu">
      <nav class="offcanvas-menu">
        <ul class="menu">
          <!-- Home -->
          <li><span><a href="index.php"><span>Home</span></a></li>
          <!--Phone Cases Begin -->
          <li class="has-children"><span><a href="#">Phone Cases</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="iphone/iphone-home.php">iPhones</a></li>
              <li><a href="samsung/samsung-home.php">Samsung</a></li>
              <li><a href="motorola/motorola-home.php">Motorola</a></li>
              <li><a href="lg/lg-home.html">LG</a></li>
              <li><a href="zte/zte-home.php">ZTE</a></li>
              <li><a href="Alcatel/alcatel-home.php">Alcatel</a></li>
              <li><a href="google/google-home.php">Google</a></li>
              <li><a href="Huawei/huawei-home.php">Huawei</a></li>
              <li><a href="htc/htc-home.php">HTC</a></li>
              <li><a href="coolpad/coolpad-home.php">Coolpad</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">accessories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li>
                <li><a href="accessories/pouches.php">Pouches</a></li>
                <li><a href="accessories/bluetooth-speakers.php">Bluetooth/Speakers</a></li>
                <li><a href="accessories/chargers.php">Chargers</a></li>
                <li><a href="accessories/lcds.php">LCDs</a></li>
                <li><a href="accessories/holders.php">Phone Holders</a></li>
              </li>
            </ul>
          </li>
          <li><a href="new-arrivals.php"><span>New Arrivals</span></a></li>

          <?php

      if(isset($_SESSION['username'])){
        echo '<li><a href="account.php">My Account</a></li>';
        echo '<li><a href="orders.php">My Orders</a></li>';
        echo '<li><a href="logout.php">Log Out</a></li>';
      }
      else{
        echo '<li><a href="register.php"><span>Sign Up</span></a></li>';
        echo '<li><a href="login.php"><span>Log In</span></a></li>';
      }
      ?>
        </ul>
        </li>
        </ul>
      </nav>
    </div>

<!--
******************************************************************************************
* Begin Main Screen Navigation Bar
******************************************************************************************
-->
        <header class="navbar navbar-sticky">
          <!-- Search-->
          <form class="site-search" method="get">
            <input type="text" name="site_search" placeholder="Type to search...">
            <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
          </form>
          <div class="site-branding">
            <div class="inner">
              <!-- Off-Canvas Toggle (#shop-categories)-->
              <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
              <!-- Off-Canvas Toggle (#mobile-menu)-->
              <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
              <!-- Site Logo-->
              <a class="site-logo" href="index.php"><img src="assets/img/logo/logo.png" alt="AA Mobile Accessories Columbia South Carolina"></a>
            </div>
          </div>


      <nav class="site-menu">
        <ul>
          <li><a href="index.php"><span>Home <i class="fas fa-home" style="position: relative;margin:0 auto;top:-1px;"></i></span></a></li>
          <li><a href="#"><span>Phone Cases</span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="iphone/iphone-home.php">iPhones</a>
                <ul class="sub-menu">
                 <li><a href="iphone/model/iphone5.html" name="iphone5">iPhone 5</a></li>
                  <li><a href="iphone/model/iphone6.html" name="">iPhone 6</a>
                  </li>
                  <li><a href="iphone/model/iphone7.html" name="">iPhone 7</a>
                  </li>
                  <li><a href="iphone/model/iphone7-plus.html" name="">iPhone 7 Plus</a>
                  </li>
                  <li><a href="iphone/model/iphone8.html" name="">iPhone 8</a>
                  </li>
                  <li><a href="iphone/model/iphone8-plus.html" name="">iPhone 8 Plus</a>
                  </li>
                  <li><a href="iphone/model/iphonex.html" name="">iPhone X</a>
                  </li>
                </ul>
              </li>
              <li class="has-children"><a href="samsung/samsung-home.php">Samsung</a>
                <ul class="sub-menu">
                  <li>
                    <a href="samsung/model/samsung-galaxys8.html" name="">Galaxy S8</a>
                  </li>
                  <li>
                    <a href="samsung/model/samsung-galaxys8-plus.html" name="i5s" />Galaxy S8 Plus</a>
                  </li>
                  <li>
                    <a href="samsung/model/samsung-s7-edge.html" name="">Galaxy S7 Edge</a>
                  </li>
                </ul>
              </li>
              <li class="has-children"><a href="motorola/motorola-home.php">Motorola</a>
                <ul class="sub-menu">
                  <li><a href="motorola/model/moto-g55.html" name="i5">Moto G55 Play</a></li>
                  <li><a href="motorola/model/moto-x4.html" name="i5s" />Moto X4</a>
                  </li>
                  <li><a href="motorola/model/moto-z2.html" name="i5c" />Moto Z2 Plus</a>
                  </li>
                </ul>
              </li>
              <li class="has-children"><a href="#">LG</a>
                <ul class="sub-menu">
                  <li><a href="lg/model/lg-1.html" name="">LG</a></li>
                  <li><a href="lg/model/lg-1.html" name="">LG</a></li>
                  <li><a href="lg/model/lg-1.html" name="">LG</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="#">ZTE</a>
                <ul class="sub-menu">
                  <li><a href="zte/zte-home.php" name="">ZTE</a></li>
                  <li><a href="zte/zte-home.php" name="">ZTE</a></li>
                  <li><a href="zte/zte-home.php" name="">ZTE</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="#">Alcatel</a>
                <ul class="sub-menu">
                  <li><a href="Alcatel/alcatel-home.php" name="">Alcatel</a></li>
                  <li><a href="Alcatel/alcatel-home.php" name="">Alcatel</a></li>
                  <li><a href="Alcatel/alcatel-home.php" name="">Alcatel</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="#">Coolpad</a>
                <ul class="sub-menu">
                  <li><a href="coolpad/coolpad-home.php" name="">Coolpad</a></li>
                  <li><a href="coolpad/coolpad-home.php" name="">Coolpad</a></li>
                  <li><a href="coolpad/coolpad-home.php" name="">Coolpad</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="#">Google</a>
                <ul class="sub-menu">
                  <li><a href="google/google-home.php" name="">google</a></li>
                  <li><a href="google/google-home.php" name="">google</a></li>
                  <li><a href="google/google-home.php" name="">google</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="#">Huawei</a>
                <ul class="sub-menu">
                  <li><a href="huawei/huawei-home.php" name="">Huawei</a></li>
                  <li><a href="huawei/huawei-home.php" name="">Huawei</a></li>
                  <li><a href="huawei/huawei-home.php" name="">Huawei</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="htc.html">HTC</a>
                <ul class="sub-menu">
                  <li><a href="htc/htc-home.php" name="">HTC</a></li>
                  <li><a href="htc/htc-home.php" name="">HTC</a></li>
                  <li><a href="htc/htc-home.php" name="">HTC</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="#"><span>Accessories</span></a>
            <ul class="sub-menu">
              <li><a href="accessories/pouches.php">Pouches</a></li>
              <li><a href="accessories/bluetooth-speakers.php">Bluetooth/Speakers</a></li>
              <li><a href="accessories/chargers.php">Chargers</a></li>
              <li><a href="accessories/lcds.php">LCDs</a></li>
              <li><a href="accessories/holders.php">Phone Holders</a></li>
              <li><a href="new-arrivals.php"><span>New Arrivals</span></a></li>
          </li>
          </ul>
          </li>




          <!-- My Account Drop Link -->
          <li><a href="#"><span>My Account<i class="fas fa-user-circle" style="position:relative; right:-1px;margin: 0 auto;"></i></span></a>
            <ul class="sub-menu">
              <?php
                if(isset($_SESSION['username'])){
                  echo '<li><a href="account.php">My Account</a></li>';
                  echo '<li><a href="logout.php">Log Out</a></li>';
                }
                 else {
                   echo '<li><a href="register.php"><span>Sign Up</span></a></li>';
                   echo '<li><a href="login.php"><span>Log In</span></a></li>';
                 }
             ?>
          </li>
          </ul>
          </li>

        </ul>
      </nav>
    </header>


<!--************************************************************************************************************ -->

<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
  <!-- Page Title-->
  <div class="page-title">
    <div class="container">
      <div class="column">
        <br><br><br>
        <h1>My Cart</h1>
      </div>
      <div class="column">
        <ul class="breadcrumbs">

          <li class="separator">&nbsp;</li>
          <br><br><br>
            <?php

      if(isset($_SESSION['username'])){
        echo '<li><a href="account.php">My Account</a></li>';
        echo '<li><a href="orders.php">My Orders</a></li>';
        echo '<li><a href="logout.php">Log Out</a></li>';
      }
      else{
        echo '<li><a href="register.php"><span>Sign Up /</span></a></li>';
        echo '<li><a href="login.php"><span>Log In</span></a></li>';
      }
      ?>
        </ul>
      </div>
    </div>
  </div>

<!--
************************************************************************************************************
* Here our cart will begin (if it hasn't already)
*
*
* Until we know how to do things the 'right' way. We stay safe and do them the 'Long' way.
*
* Note: the 'right' way is usually easier and more effecient
*
* Our grid layout looks like this :
*
*                   Cart
*
*   Product Name    Quantity     Subtotal    Discount
*
************************************************************************************************************
-->

<div class="container padding-bottom-3x mb-1">
  <div class="table-responsive shopping-cart">


<?php

         echo '<p><h3>Your Shopping Cart</h3></p>';

         if(isset($_SESSION['cart'])) {

           $total = 0;
           echo '<table class="table">';
           echo '<tr>';
           echo '<th>Code</th>';
           echo '<th>Name</th>';
           echo '<th>Quantity</th>';
           echo '<th>Cost</th>';
           echo '</tr>';
           foreach($_SESSION['cart'] as $product_id => $quantity) {

           $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


           if($result){

             while($obj = $result->fetch_object()) {
               $cost = $obj->price * $quantity; //work out the line cost
               $total = $total + $cost; //add to the total cost

               echo '<tr>';
               echo '<td>'.$obj->product_code.'</td>';
               echo '<td>'.$obj->product_name.'</td>';
               echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
               echo '<td>'.$cost.'</td>';
               echo '</tr>';
             }
           }

         }



         echo '<tr>';
         echo '<td colspan="3" align="right">Total</td>';
         echo '<td>'.$total.'</td>';
           echo '</tr>';

         echo '<tr>';
         echo '<th class="text-center"><a href="update-cart.php?action=empty" class="btn btn-sm btn-outline-danger">Empty Cart</a>&nbsp;<a href="iphone/model/iphone5.php" class="btn btn-outline-primary btn-sm" [secondary success alert]">Continue Shopping</a>';


         echo '</div>';
         echo '</div>';



      echo '<div class="shopping-cart-footer">';


    echo '<div class="shopping-cart-footer">';
    echo '<div class="column"><a class="btn btn-outline-secondary" href="shop-boxed-ls.html"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>';
        echo '<div class="column">';

/****************************************************************************************************
*        Check Out Button
****************************************************************************************************
*/
        if(isset($_SESSION['username'])) {
          echo '<a class="btn btn-success" href="orders-update.php" ">Checkout</a></div>';
        }
/*************************************************************************************************************************
*       else user is not logged in -> log in button
**************************************************************************************************************
*/
        else {
          echo '<a href="login.php"><button class="btn btn-primary btn-block"">Login</button></a>';
        }

        echo '</td>';

        echo '</tr>';
        echo '</table>';
      }

      else {
        echo "You have no items in your shopping cart.";
      }



      echo '</div>';
      echo '</div>';
echo '</div>';


?>

<!--
************************************************************************************************************
Footer
************************************************************************************************************
-->

<!-- Site Footer-->
<footer class="site-footer" style="text-align: justify-content-center; font-weight:bold; font-size:19px;">
  <div class="container" style="text-align: center;">
    <div class="row">
      <div class="col-lg-12">
        <!-- Contact Info-->
        <section class="widget widget-light-skin" id="contact">
          <h3 class="widget-title">Get In Touch With Us</h3>
          <p class="text-white"></p>
          <p class="text-white"></p>
          <p class="text-white"></p>
        </section>
      </div>
      <div class="col-lg-3 col-md-6">
        <!-- Mobile App Buttons-->
        <section class="widget widget-light-skin">
        </section>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="col-lg-3 col-md-6">
        </div>
      </div>
      <hr class="hr-light mt-2 margin-bottom-2x">
      <div class="row">
        <div class="col-md-7 padding-bottom-1x">
        </div>
</footer>
</div>
<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/scripts.min.js"></script>
<script>


</script>
</body>

</html>
