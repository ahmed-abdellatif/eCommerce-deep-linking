<?php
require('header.php');

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


    <div class="col-md-6" style="margin:0 auto;">
      <!-- Form Class -->
      <form class="login-box" action="verify.php" method="post">

<!-- Login Title-->
        <h4 class="margin-bottom-1x">Login</h4>
        <div class="form-group input-group">
          <!--Email -->
          <input class="form-control" type="email" placeholder="Email" name="username"><span class="input-group-addon"><i class="icon-mail"></i></span>
        </div>

        <!-- Password -->
        <div class="form-group input-group">
          <input class="form-control" type="password" placeholder="Password" name="pwd"><span class="input-group-addon"><i class="icon-lock"></i></span>
        </div>

          <button class="btn btn-primary margin-bottom-none" value="Login" type="submit">Login</button>
        </div>
      </form>

    </div>
</div>
</div>


<!--
******************************************************************************************
*
* END verification
*
*
*
******************************************************************************************
-->
<?php
require('footer.php');

?>
