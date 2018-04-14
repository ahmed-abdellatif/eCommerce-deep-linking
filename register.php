<?php
require 'header.php';
?>
<!--
******************************************************************************************
*
*  Begin verify.php
*
*
******************************************************************************************
-->
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
  <!-- Page Title-->
  <div class="page-title">
    <div class="container">
      <div class="column">
        <br><br><br>
        <h1>Login / Register Account</h1>
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
<!-- Page Content-->


<!--
******************************************************************************************
* Registration Form:
*
* Here we will allow users/customer to register
*
*******************************************************************************************
* insert.php -> this is the file that will insert our registered users into the database
*
*
*
******************************************************************************************
-->

    <div class="container padding-bottom-3x mb-2">
        <div class="row">
          <div class="col-md-6" style="margin:0 auto;">
            <div class="padding-top-3x hidden-md-up"></div>
            <h3 class="margin-bottom-1x">No Account? Register</h3>
            <p>Registration takes less than a minute but gives you full control over your orders.</p>
            <!-- Form-->
            <form class="row" method="post" action="insert.php">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">First Name</label>
                  <!--First Name -->
                  <input class="form-control" type="text" id="reg-fn" name="fname">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln">Last Name</label>
                  <!--Last Name -->
                  <input class="form-control" type="text" id="reg-ln" name="lname">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">E-mail Address</label>

                  <!--Email -->
                  <input class="form-control" type="email" id="reg-email" name="email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-address">Company Address</label>
                  <!--Address -->
                  <input class="form-control" type="text" id="reg-phone" name="address">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">City</label>
                  <!--Zip Code -->
                  <input class="form-control" type="text" id="reg-pass" name="city">
                </div>
              </div>

               <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">Zip Code</label>
                  <!--Zip Code -->
                  <input class="form-control" type="number" id="reg-pass" name="pin">
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-pass">Password</label>
                  <input class="form-control" type="password" id="reg-pass" name="pwd">
                </div>
              </div>

              <div class="col-12 text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit" value="Register">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>




      <?php
      require 'footer.php';

      ?>
