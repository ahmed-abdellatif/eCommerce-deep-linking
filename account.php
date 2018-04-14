<!--
******************************************************************************************
*
* account.php: This is where we will display the 'My Account' nav link option for users
*
* conditions that must be met:
* -user must be registered
* -user must be log in to view my 'account'
*
* If login/registration is successful:
* User can update personal information
*
******************************************************************************************
-->
<?php

require 'header.php';

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}

include 'config.php';

?>


  <!--************************************************************************************************************ -->
    <!-- Page Title-->


    <!--
   ******************************************************************************************
   *
   * Account Detail Begin:
   *
   *
   * <-?php echo '<h3>Hi ' .$_SESSION['fname'] .'</h3>'; ?></p> : Greets user by name
   * session_name() returns the name of the current session.
   ******************************************************************************************
   -->
   <!-- Off-Canvas Wrapper-->
   <div class="offcanvas-wrapper">
     <!-- Page Title-->
     <div class="sub-title">
       <div class="container">
         <div class="column">
           <h1>iPhones</h1>
         </div>
         <div class="column">
           <h1 style="margin:0 auto;text-align:center;">My Account</h1>

         </div>
       </div>
     </div>

    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <div class="col-lg-4">
          <aside class="user-info-wrapper">
            <div class="user-info">

   <!-- User's name will display here and date joined will show -->
              <div class="user-data">
                <h5><p><?php echo '<h3>Hello ' .$_SESSION['fname'] .'</h3>';
                             echo "<p> Joined on ".date('H:i, jS F Y')."</p>";
                    ?></p></h5>

              </div>
            </div>
          </aside>
          <nav class="list-group"><a class="list-group-item with-badge" href="orders.php"><i class="icon-bag"></i>Orders<span class="badge badge-default badge-pill">6</span></a></nav>
        </div>
<!--
******************************************************************************************
* USER UPDATE FORM BEGINS : update.php
*
* The following values are being appended to objects directly using the form's placeholders.
*
* $obj->fname
* $obj->lname
* $obj->address
* $obj->city
* $obj->email
* $obj->pin
******************************************************************************************
-->




        <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>


          <!-- Here is the form where we call update.php to update -->
          <form class="row" method="POST" action="update.php">
            <div class="col-md-6">
              <div class="form-group">

                <!--label for first name -->
                <label for="account-fn">First Name</label>


                <?php
                   /*
                      select all the users from our database, where the user id
                      is equal to the session user id
                   */
                 $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                    if($result === FALSE){
                    die(mysql_error());
                   }

                   /*
***************************************************************************
if we are succesfull in finding the user
we will retrieve the account information
 for the registered user
***************************************************************************
                   */
                   if($result) {
                   $obj = $result->fetch_object();

                   // grab the user's first name from our database
                   echo '<input class="form-control" type="text" placeholder="'. $obj->fname. '" name="fname">';
                   echo'</div>';
                   echo'</div>';

                   //get the users last name
                   echo'<div class="col-md-6">';
                   echo'<div class="form-group">';
                   echo'<label for="account-ln">Last Name</label>';
                   echo'<input class="form-control" placeholder="'. $obj->lname. '" name="lname">';
                   echo'</div>';
                   echo'</div>';


                   //get the users address
                   echo'<div class="col-md-6">';
                   echo'<div class="form-group">';
                   echo'<label for="account-email">Address</label>';
                   echo'<input class="form-control" placeholder="'. $obj->address. '" name="address">';
                   echo'</div>';
                   echo'</div>';

                   //get the users city
                   echo'<div class="col-md-6">';
                   echo'<div class="form-group">';
                   echo'<label for="account-phone">City</label>';
                   echo'<input class="form-control" type="text" placeholder="'. $obj->city. '" name="city">';
                   echo'</div>';
                   echo'</div>';


                   //get the users zip code
                   echo'<div class="col-md-6">';
                   echo'<div class="form-group">';
                   echo'<label for="account-pass">Zip Code</label>';
                   echo'<input type="text" class="form-control" placeholder="'. $obj->pin. '" name="pin">';
                   echo'</div>';
                   echo'</div>';


                   //get the users email
                   echo'<div class="col-md-6">';
                   echo'<div class="form-group">';
                   echo'<label for="account-pass">Email</label>';
                   echo'<input class="form-control" type="email" placeholder="'. $obj->email. '" name="email">';
                   echo'</div>';
                   echo'</div>';
}

                   //get the users password
                   echo'<div class="col-md-6">';
                   echo'<div class="form-group">';
                   echo'<label for="account-pass">New Password</label>';
                   echo'<input class="form-control" type="password" name="pwd">';
                   echo'</div>';
                   echo'</div>';

                ?>

                   <button class="btn btn-primary margin-right-none" type="submit" value="Update" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>

<!--************************************************************************************************************************************************************************************ -->


<!--
******************************************************************************************
* END USER UPDATE FORM : NOW SUBMIT
******************************************************************************************
-->


            </div>
          </form>
        </div>
      </div>
    </div>
<?php

require 'footer.php';
?>
