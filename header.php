<?php
if (session_id() == '' || !isset($_SESSION)) {session_start();}
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
  <title> 
  </title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Mobile Store in Columbia, South Carolina. We sell phones, cases, accessories, and much more.">
  <meta name="keywords" content="AA Accessories, Columbia, South Carolina, Phone Accessories, Mobile, iPhone, Samsung, Alcatel, Headphones, Bluetooth, AA, LG Phone Cases, Ahmed Abdellatif, Mobile Business, eCommerce Developer, Shopify, Wholesale Phones, Cheap Cases, Online Business, Business, Online Store">
  <meta name="author" content="Ahmed Abdellatif">
  <!-- Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <!-- Favicon and Apple Icons-->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" media="screen" href="assets/fonts/KronaOne-Regular.ttf">
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
        <a class="site-logo" href="index.php">
          <img src="assets/img/logo/logo.png" alt="AA Cell Mobile Accessories Columbia South Carolina" style="position:relative; bottom:-1em; margin:0 auto;"></a>

      </div>
      <!--Break off canvas menu-->

      <nav class="offcanvas-menu" style="position:relative;">
        <ul class="menu">


      <!-- Home -->
        <li><a href="index.php">Home</a></li>

           <!-- Mobile Cases Begin -->
          <li class="has-children"><span>
            <a href="iphone/iphone.php">Mobile Brands</a>
            <span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="iphone/iphone.php">iPhones</a></li>
              <li><a href="samsung/samsung.php">Samsung</a></li>
              <li><a href="motorola/motorola.php">Motorola</a></li>
              <li><a href="lg/lg.php">LG</a></li>
              <li><a href="zte/zte.php">ZTE</a></li>
              <li><a href="alcatel/alcatel.php">Alcatel</a></li>
              <li><a href="google/google.php">Google</a></li>
              <li><a href="huawei/huawei.php">Huawei</a></li>
              <li><a href="htc/htc.php">HTC</a></li>
              <li><a href="coolpad/coolpad.php">Coolpad</a></li>
            </ul>
          </li>


          <!-- Contact -->
          <li><a href="#contact">Contact</a></li>

          <!--Register/Login -->
<?php
if (isset($_SESSION['username'])) {
	echo '<li><a href="account.php">My Account</a></li>';
	echo '<li><a href="orders.php">My Orders</a></li>';
	echo '<li><a href="logout.php">Log Out</a></li>';
	echo '<li><a href="cart.php">My Cart</a></li>';
} else {
	echo '<li><a href="register.php"><span>Sign Up</span></a></li>';
	echo '<li><a href="login.php"><span>Log In</span></a></li>';
}
?>
</ul>
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
          <li class="has-children"><span>
            <a href="iphone/iphone.php">Mobile Cases</a><span class="sub-menu-toggle">
            </span></span>

            <ul class="offcanvas-submenu">
              <li><a href="iphone/iphone.php">iPhones</a></li>
              <li><a href="samsung/samsung.php">Samsung</a></li>
              <li><a href="motorola/motorola.php">Motorola</a></li>
              <li><a href="lg/lg.php">LG</a></li>
              <li><a href="zte/zte.php">ZTE</a></li>
              <li><a href="alcatel/alcatel.php">Alcatel</a></li>
              <li><a href="google/google.php">Google</a></li>
              <li><a href="huawei/huawei.php">Huawei</a></li>
              <li><a href="htc/htc.php">HTC</a></li>
              <li><a href="coolpad/coolpad.php">Coolpad</a></li>
            </ul>
          </li>
<li><a href="#contact">Contact</a></li>

<?php

if (isset($_SESSION['username'])) {
	echo '<li><a href="account.php">My Account</a></li>';
	echo '<li><a href="orders.php">My Orders</a></li>';
	echo '<li><a href="logout.php">Log Out</a></li>';
	echo '<li><a href="cart.php">My Cart</a></li>';

} else {
	echo '<li><a href="register.php"><span>Sign Up</span></a></li>';
	echo '<li><a href="login.php"><span>Log In</span></a></li>';
}
?>
</ul>
        </li>
        </ul>
      </nav>
    </div>

        <header class="navbar navbar-sticky">
          <div class="site-branding">
            <div class="inner">
              <!-- Off-Canvas Toggle (#shop-categories)-->
              <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
              <!-- Off-Canvas Toggle (#mobile-menu)-->
              <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
              <!-- Site Logo-->
              <a class="site-logo" href="index.php"><img src="../assets/img/logo/logo.png" alt="AA Wholesale Mobile Accessories Columbia South Carolina"></a>
            </div>
          </div>

      <nav class="site-menu">
        <ul>
          <li><a href="index.php"><span>Home <i class="fas fa-home" style="position: relative;margin:0 auto;top:-1px;"></i></span></a>
          </li>

          <li><a href="iphone/model/iphone5.php"><span>Mobile Brands <i class="fas fa-mobile-alt"></i> </span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="iphone/iphone.php" title="iPhone Accessory Products Page">iPhones</a>
                <ul class="sub-menu">
                 <li><a href="iphone/model/iphone5.php">iPhone 5</a></li>
                  <li><a href="iphone/model/iphone6.php">iPhone 6</a>
                  </li>
                  <li><a href="iphone/model/iphone7.php">iPhone 7</a>
                  </li>
                  <li><a href="iphone/model/iphone7-plus.php">iPhone 7 Plus</a>
                  </li>
                  <li><a href="iphone/model/iphone8.php">iPhone 8</a>
                  </li>
                  <li><a href="iphone/model/iphone8-plus.php">iPhone 8 Plus</a>
                  </li>
                  <li><a href="iphone/model/iphonex.php">iPhone X</a>
                  </li>
                </ul>
              </li>

              <!--Samsung-->
              <li class="has-children"><a href="samsung/samsung.php" title="Samsung Accessory Products Page">Samsung</a>
                <ul class="sub-menu">
                  <li>
                    <a href="samsung/model/galaxy-8.php">Galaxy S8</a>
                  </li>
                  <li>
                    <a href="samsung/model/galaxy-8-plus.php" name="i5s" />Galaxy S8 Plus</a>
                  </li>
                  <li>
                    <a href="samsung/model/galaxy-s7-edge.php">Galaxy S7 Edge</a>
                  </li>
                  <li>
                    <a href="samsung/model/galaxy-j3-emerge.php">Galaxy J3 Emerge</a>
                  </li>
                </ul>
              </li>

              <!--Motorola -->
              <li class="has-children"><a href="motorola/motorola.php" title="Motorola Mobile Accessory Products Page">Motorola</a>
                <ul class="sub-menu">
                  <li><a href="motorola/model/motorolaBrand1.html" name="i5">Moto G55 Play</a></li>
                </ul>
              </li>

              <!--LG -->
              <li class="has-children"><a href="lg/lg.php" title="LG Phone Accessory Products Page">LG</a>
                <ul class="sub-menu">
                  <li><a href="lg/model/aristo.php">Aristo</a></li>
                  <li><a href="lg/model/stylo.php">Stylo</a></li>
                  <li><a href="lg/model/tribute.php">Tribute</a></li>
                  <li><a href="lg/model/xpower.php">X Power</a></li>

                </ul>
              </li>

              <!--ZTE -->
              <li class="has-children"><a href="zte/zte.php" title="ZTE Phone Cases Product Page">ZTE</a>
                <ul class="sub-menu">
                  <li><a href="zte/model/zte-brand.php">ZTE</a></li>
                </ul>
              </li>

              <!--Alcatel -->
              <li class="has-children"><a href="alcatel/alcatel.php" title="Alcatel Phone Brands Accessory Page">Alcatel</a>
                <ul class="sub-menu">
                  <li><a href="alcatel/model/alcatel-brand.php">Alcatel</a></li>
                </ul>
              </li>

             <!--Coolpad -->
              <li class="has-children"><a href="coolpad/coolpad.php" title="Coolpad Mobile Cases and Accessories">Coolpad</a>
                <ul class="sub-menu">
                  <li><a href="coolpad/model/coolpadBrand1.php">Coolpad</a></li>
                </ul>
              </li>

              <!--Google -->
              <li class="has-children"><a href="google/google.php" title="Google Mobile Cases and Accessories">Google</a>
                <ul class="sub-menu">
                  <li><a href="google/model/googleModel-1.php">google</a></li>
                </ul>
              </li>

              <!--Huawei -->
              <li class="has-children"><a href="huawei/huawei.php" title="Huawei Phone Cases, Pouches, Accessories">Huawei</a>
                <ul class="sub-menu">
                  <li><a href="huawei/model/huaweiBrand1.php">Huawei</a></li>
                </ul>
              </li>

              <!--HTC -->
              <li class="has-children"><a href="htc/htc.php" title="HTC Phone Cases Product Page">HTC</a>
                <ul class="sub-menu">
                  <li><a href="htc/model/htcBrand1.php">HTC</a></li>
                </ul>
              </li>
            </ul>
          </li>


          <!-- My Account Drop Link -->
          <li><a href="#"><span>My Account<i class="fas fa-user-circle" style="position:relative; right:-2.9px;"></i></span></a>
            <ul class="sub-menu">
<?php
if (isset($_SESSION['username'])) {
	echo '<li><a href="account.php">My Account</a></li>';
	echo '<li><a href="cart.php">My Cart</a></li>';

	echo '<li><a href="orders.php">My Orders</a></li>';

	echo '<li><a href="logout.php">Log Out</a></li>';
} else {
	echo '<li><a href="register.php"><span>Sign Up</span></a></li>';
	echo '<li><a href="login.php"><span>Log In</span></a></li>';
}
?>
</li>



          </ul>

          </li>
          <li><a href="#contact"><span>Contact <i class="fas fa-tty"></i> </span></a></li>

        </ul>
      </nav>
    </header>
