
<?php
if (session_id() == '' || !isset($_SESSION)) {session_start();}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mobile Shop | iPhone, Samsung, LG | Columbia SC
  </title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Mobile Store in Columbia, South Carolina. We sell phones, cases, accessories, and much more.">
  <meta name="keywords" content="Ahmed Abdellatif, Web Developer, eCommerce Developer, Shopify, Web Design, Website Design, Website, Online Business, Business, Online Store">
  <meta name="author" content="Ahmed Abdellatif">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="touch-icon-iphone.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
  <link rel="stylesheet" media="screen" href="../assets/css/vendor.min.css">
  <link id="mainStyles" rel="stylesheet" media="screen" href="../assets/css/styles.min.css">

  <link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet">

  <!-- Modernizr-->
  <script src="../assets/js/modernizr.min.js"></script>

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
        <a class="site-logo" href="../index.php">
          <img src="../assets/img/logo/logo.png" alt="AA Mobile Accessories Columbia South Carolina" style="position:relative; bottom:-1em; margin:0 auto;"></a>

      </div>
      <!--Break off canvas menu-->

      <nav class="offcanvas-menu">
        <ul class="menu">


      <!-- Home -->
        <li><a href="../index.php">Home</a></li>

           <!-- Mobile Cases Begin -->
          <li class="has-children"><span><a href="model/aristo.php">Mobile Brands</a>
            <span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="../iphone/iphone.php">iPhones</a></li>
              <li><a href="../samsung/samsung.php">Samsung</a></li>
              <li><a href="../motorola/motorola.php">Motorola</a></li>
              <li><a href="lg.php">LG</a></li>
              <li><a href="../zte/zte.php">ZTE</a></li>
              <li><a href="../alcatel/alcatel.php">Alcatel</a></li>
              <li><a href="../google/google.php">Google</a></li>
              <li><a href="../huawei/huawei.php">Huawei</a></li>
              <li><a href="../htc/htc.php">HTC</a></li>
              <li><a href="../coolpad/coolpad.php">Coolpad</a></li>
            </ul>
          </li>

          <!-- Contact -->
          <li><a href="../index.php#contact">Contact</a></li>

          <!--Register/Login -->
<?php
if (isset($_SESSION['username'])) {
	echo '<li><a href="../account.php">My Account</a></li>';
	echo '<li><a href="../orders.php">My Orders</a></li>';
	echo '<li><a href="../logout.php">Log Out</a></li>';
	echo '<li><a href="../cart.php">My Cart</a></li>';
} else {
	echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
	echo '<li><a href="../login.php"><span>Log In</span></a></li>';
}
?>
</ul>
      </nav>
    </div>

    <div class="offcanvas-container" id="mobile-menu">
      <nav class="offcanvas-menu">
        <ul class="menu">

          <!-- Home -->
          <li><span><a href="../index.php"><span>Home</span></a></li>
          <!--Phone Cases Begin -->
          <li class="has-children"><span><a href="#">Phone Cases</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="../iphone/iphone.php">iPhones</a></li>
              <li><a href="../samsung/samsung.php">Samsung</a></li>
              <li><a href="../motorola/motorola.php">Motorola</a></li>
              <li><a href="lg.php">LG</a></li>
              <li><a href="../zte/zte.php">ZTE</a></li>
              <li><a href="../alcatel/alcatel.php">Alcatel</a></li>
              <li><a href="../google/google.php">Google</a></li>
              <li><a href="../huawei/huawei.php">Huawei</a></li>
              <li><a href="../htc/htc.php">HTC</a></li>
              <li><a href="../coolpad/coolpad.php">Coolpad</a></li>
            </ul>
          </li>
          <!-- Contact -->
          <li><a href="../index.php#contact">Contact</a></li>


<?php

if (isset($_SESSION['username'])) {
	echo '<li><a href="../account.php">My Account</a></li>';
	echo '<li><a href="../orders.php">My Orders</a></li>';
	echo '<li><a href="../logout.php">Log Out</a></li>';
	echo '<li><a href="../cart.php">My Cart</a></li>';

} else {
	echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
	echo '<li><a href="../login.php"><span>Log In</span></a></li>';
}
?>
</ul>
        </li>
        </ul>
      </nav>
    </div>

    <!--
    ******************************************************************************************
    * Top Bar
    ******************************************************************************************
    -->



<!--
******************************************************************************************
* Begin Main Screen Navigation Bar
******************************************************************************************
-->
        <header class="navbar navbar-sticky">

          <div class="site-branding">
            <div class="inner">
              <!-- Off-Canvas Toggle (#shop-categories)-->
              <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
              <!-- Off-Canvas Toggle (#mobile-menu)-->
              <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
              <!-- Site Logo-->
              <a class="site-logo" href="../index.php"><img src="../assets/img/logo/logo.png" alt="AA Mobile Accessories Columbia South Carolina"></a>
            </div>
          </div>


      <nav class="site-menu">
        <ul>
          <li><a href="../index.php"><span>Home <i class="fas fa-home" style="position: relative;margin:0 auto;top:-1px;"></i></span></a></li>



          <li><a href="#"><span>Mobile Brands <i class="fas fa-mobile-alt"></i> </span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="../iphone/iphone.php">iPhones</a>
                <ul class="sub-menu">
                  <li><a href="../iphone/model/iphone5.php" name="iphone5">iPhone 5</a></li>
                   <li><a href="../iphone/model//iphone6.php" name="">iPhone 6</a>
                   </li>
                   <li><a href="../iphone/model/iphone7.php" name="">iPhone 7</a>
                   </li>
                   <li><a href="../iphone/model/phone7-plus.php" name="">iPhone 7 Plus</a>
                   </li>
                   <li><a href="../iphone/model/iphone8.php" name="">iPhone 8</a>
                   </li>
                   <li><a href="../iphone/model/iphone8-plus.php" name="">iPhone 8 Plus</a>
                   </li>
                   <li><a href="../iphone/model/iphonex.php" name="">iPhone X</a>
                   </li>
                </ul>
              </li>

              <!--Samsung-->
              <li class="has-children"><a href="../samsung/samsung.php">Samsung</a>
                <ul class="sub-menu">
                  <li>
                    <a href="../samsung/model/galaxy-8.php" name="">Galaxy S8</a>
                  </li>
                  <li>
                    <a href="../samsung/model/galaxy-8-plus.php" name="i5s" />Galaxy S8 Plus</a>
                  </li>
                  <li>
                    <a href="../samsung/model/galaxy-s7-edge.php" name="">Galaxy S7 Edge</a>
                  </li>
                </ul>
              </li>

              <!--Motorola -->
              <li class="has-children"><a href="../motorola/motorola.php">Motorola</a>
                <ul class="sub-menu">
                  <li><a href="../motorola/motorolaBrand1.html" name="i5">Moto G55 Play</a></li>
                </ul>
              </li>

              <!--LG -->
              <li class="has-children"><a href="lg.php">LG</a>
                <ul class="sub-menu">
                  <li><a href="model/aristo.php" name="">Aristo</a></li>
                  <li><a href="model/stylo.php" name="">Stylo</a></li>
                  <li><a href="model/tribute.php" name="">Tribute</a></li>
                  <li><a href="model/tribute.php" name="">X Power</a></li>

                </ul>
              </li>

              <!--ZTE -->
              <li class="has-children"><a href="../zte/zte.php">ZTE</a>
                <ul class="sub-menu">
                  <li><a href="../zte/model/zteBrand1.php" name="">ZTE</a></li>
                </ul>
              </li>

              <!--Alcatel -->
              <li class="has-children"><a href="./../alcatel/alcatel.php">Alcatel</a>
                <ul class="sub-menu">
                  <li><a href="alcatel/model/alcatelBrand1.php" name="">Alcatel</a></li>
                </ul>
              </li>

             <!--Coolpad -->
              <li class="has-children"><a href="../coolpad/coolpad.php">Coolpad</a>
                <ul class="sub-menu">
                  <li><a href="../coolpad/model/coolpadBrand1.php" name="">Coolpad</a></li>
                </ul>
              </li>

              <!--Google -->
              <li class="has-children"><a href="../google/google.php">Google</a>
                <ul class="sub-menu">
                  <li><a href="../google/model/googleBrand1.php" name="">google</a></li>
                </ul>
              </li>

              <!--Huawei -->
              <li class="has-children"><a href="../huawei/huawei.php">Huawei</a>
                <ul class="sub-menu">
                  <li><a href="../huawei/model/huaweiBrand1.php" name="">Huawei</a></li>
                </ul>
              </li>

              <!--HTC -->
              <li class="has-children"><a href="../htc/htc.php">HTC</a>
                <ul class="sub-menu">
                  <li><a href="../htc/model/htcBrand1.php" name="">HTC</a></li>
                </ul>
              </li>
            </ul>
          </li>




          <!-- My Account Drop Link -->
          <li><a href="#"><span>My Account<i class="fas fa-user-circle" style="position:relative; right:-2.9px;"></i></span></a>
            <ul class="sub-menu">
<?php
if (isset($_SESSION['username'])) {
	echo '<li><a href="../account.php">My Account</a></li>';
	echo '<li><a href="../cart.php">My Cart</a></li>';

	echo '<li><a href="../orders.php">My Orders</a></li>';

	echo '<li><a href=".../logout.php">Log Out</a></li>';
} else {
	echo '<li><a href="../register.php"><span>Sign Up</span></a></li>';
	echo '<li><a href="../login.php"><span>Log In</span></a></li>';
}
?>
</li>
          </ul>
          </li>
    <li><a href="../index.php#contact"><span>Contact <i class="fas fa-tty"></i> </span></a></li>


        </ul>
      </nav>
    </header>

    <!-- Off-Canvas Wrapper-->
          <!-- Page Title-->
          <!-- Off-Canvas Wrapper-->
          <div class="offcanvas-wrapper">
            <div class="container padding-bottom-3x mb-1">
                   <div class="row">
                     <div class="col-lg-12 order-md-2">
                <h6 class="text-muted text-normal text-uppercase padding-top-5x mt-2" style="text-align:center;">LG Models</h6>
                   <hr class="margin-bottom-1x">
                   <ul class="nav nav-pills nav-justified">
                     <li class="nav-item"><a class="nav-link" href="../index.php">Homepage</a></li>
                     <li class="nav-item"><a class="nav-link" href="lg.php">LG Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="model/aristo.php">Aristo</a></li>
                     <li class="nav-item"><a class="nav-link"  href="model/stylo.php">Stylo</a></li>
                     <li class="nav-item"><a class="nav-link"  href="model/tribute.php">Tribute</a></li>
                     <li class="nav-item"><a class="nav-link"  href="model/xpower.php">X Power</a></li>


                   </ul>

            </div>
            </div>
            </div>


            <div class="isotope-grid cols-4 mb-4">
            <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>
