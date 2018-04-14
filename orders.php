<?php

require 'header.php';

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!--
************************************************************************************************************
Header End
************************************************************************************************************
-->

<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
  <!-- Page Title-->
  <div class="sub-title">
    <div class="container">
      <div class="column">

      </div>
      <div class="column"><br><br><br>
        <h1 style="margin:0 auto;text-align:center;">My Orders</h1>

      </div>
    </div>
  </div>


<!--
******************************************************************************************
*
* My Orders History Begin :
*
* If a user makes a purchase order then they will the following values attributed to
* their username:
*
* $obj->id
* $obj->date
* $obj->product_code
* $obj->product_name
* $obj->price
* $obj->units
* $currency.$obj->total
*
*
*
******************************************************************************************
-->

<div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <div class="table-responsive">

        <h3>Order History</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {

              echo '<div class="table-responsive text-sm">';
              echo '<table class="table table-hover margin-bottom-none">';
              echo '<thead>';
              echo '<tr>';
              echo '<th><h4>Order ID: '.$obj->id.'</h4></th>';
              echo '<th><strong>Date of Purchase: </strong>: '.$obj->date.'</th>';
              echo '<th><strong>Product Code</strong>: '.$obj->product_code.'</th>';
              echo '<th><strong>Product Name</strong>: '.$obj->product_name.'</th>';
              echo '<th><strong>Price Per Unit</strong>: '.$obj->price.'</th>';
              echo '<th><strong>Units Bought</strong>: '.$obj->units.'</th>';
              echo '<th><strong>Total Cost</strong>: '.$currency.$obj->total.'</th>';
              echo '</thead>';
              echo '</tbody>';


              echo '</table>';
              echo '</div>';


            }
          }
        ?>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>



<?php
require 'footer.php';

?>
