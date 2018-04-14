<?php
require 'header.php';
?>
<!--
************************************************************************************************************
* END NAVIGATION MENU
*
* BEGIN PRODUCTS
*
************************************************************************************************************
-->
    <!-- Page Content-->
        <!-- Products-->

            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="model/moto-e4.php">
                  <img src="lg-aristo.jpg" alt="Product"></a>
                <h3 class="product-title">Moto E4<a href="model/moto-e4.php"></a></h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/moto-e4.php">View Accessories</a>
                </div>
              </div>
            </div>


            <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="model/moto-e4-plus.php"><img src="lg-tribute.jpg" alt="Product"></a>
                <h3 class="product-title">Moto E4 Plus<a href="model/moto-e4-plus.php"></a></h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/moto-e4-plus.php">View Accessories</a>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="model/z2-play.php"><img src="lg-stylo.jpg" alt="Product"></a>
                <h3 class="product-title">Z2 Play<a href="model/stylo.php"></a></h3>
                <div class="card-body text-center">
                  <a class="category btn-outline-primary btn-sm" href="model/z2-play.php">View Accessories</a>
                </div>
              </div>
            </div>




      </div>



<!--


END PRODUCTS

-->
<!--


Footer


-->




<!-- Site Footer-->

<!-- Sidebar -->
 <!--div class="col-md-3 order-md-0">
            <aside class="sidebar">
              <div class="padding-top-1x hidden-md-up"></div>
< Widget Categories-->
<!--section class="widget widget-categories">
  <h3 class="category-title">Shop Categories <i class="fas fa-mobile-alt"></i></h3>
  <ul>
    <li class=""><a href="../iphone/iphone.php">iPhone</a></li>
    <li class=""><a href="../samsung/samsung.php">Samsung</a></li>
    <li class=""><a href="../motorola/motorola.php">Motorola</a></li>
    <li class=""><a href="lg.html">LG</a></li>
    <li class=""><a href="../zte/zte.php">ZTE</a></li>
    <li class=""><a href="../alcatel/alcatel.php">Alcatel</a></li>
    <li class=""><a href="../google/google.php">Google</a></li>
    <li class=""><a href="../huawei/huawei.php">Huawei</a></li>
    <li class=""><a href="../htc/htc.php">HTC</a></li>
    <li class=""><a href="../coolpad/coolpad.php">Coolpad</a></li>
    <li class=""><a href="../accessories/chargers.php">Chargers</a></li>
    <li class=""><a href="../accessories/headphones.html">Headphones</a></li>
    <li class=""><a href="../accessories/holders.php">Holders</a></li>
    <li class=""><a href="../accessories/lcds.php">LCDs</a></li>
    <li class=""><a href="../accessories/pouches.php">Pouches</a></li>
  </ul>
</section>
</aside>
</div>
</div>
</div-->


  <!-- Site Footer-->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- Contact Info-->
          <section class="widget widget-light-skin">
            <h3 class="widget-title">Get In Touch With Us</h3>
            <p class="text-white">Phone: 803-760-9696</p>
            <p class="text-white">Phone: 803-760-9711</p>
            <p class="text-white">Phone: 803-518-0159</p>


          </section>
        </div>

        <div class="col-md-4">
          <!-- Account / Shipping Info-->
          <section class="widget widget-links widget-light-skin">
            <h3 class="widget-title">Account &amp; Shipping Info</h3>
            <ul>
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
          </section>
        </div>


      <div class="col-md-4">
        <!-- Account / Shipping Info-->
        <section class="widget widget-links widget-light-skin">
          <h3 class="widget-title">We Also Open On Demand!</h3>
          <p class="text-white">Please Call 30 minutes before arrival 1421 Broad River Rd, Columbia SC 29210</p>
        </section>
      </div>
    </div>




      <!-- Copyright-->
      <p class="footer-copyright">© All rights reserved.  &nbsp;
<i class="fas fa-mobile"></i><a href="https://aacellusa.com" target="_blank"> &nbsp;
AA Accessories</a></p>
    </div>
  </footer>
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="../assets/js/vendor.min.js"></script>
<script src="../assets/js/scripts.min.js"></script>
</body>
</html>
