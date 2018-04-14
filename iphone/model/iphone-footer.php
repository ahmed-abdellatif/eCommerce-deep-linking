
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

      if(isset($_SESSION['username'])){
        echo '<li><a href="../../account.php">My Account</a></li>';
        echo '<li><a href="../../orders.php">My Orders</a></li>';
        echo '<li><a href="../../logout.php">Log Out</a></li>';
        echo '<li><a href="../../cart.php">My Cart</a></li>';
      }
      else{
        echo '<li><a href="../../register.php"><span>Sign Up</span></a></li>';
        echo '<li><a href="../../login.php"><span>Log In</span></a></li>';
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
      <p class="footer-copyright">© All rights reserved.  &nbsp;<i class="fas fa-mobile"></i><a href="https://aacellusa.com" target="_blank"> &nbsp;AA Accessories</a></p>
    </div>
  </footer>
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="../../assets/js/vendor.min.js"></script>
<script src="../../assets/js/scripts.min.js"></script>
</body>
</html>
