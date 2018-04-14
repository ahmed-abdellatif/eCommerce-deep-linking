<!--
******************************************************************************************
* header.php : index.php
******************************************************************************************
-->

<?php
require 'zte-header.php';
?>
    <!-- Off-Canvas Wrapper-->
      <!-- Page Title-->
      <!-- Off-Canvas Wrapper-->
      <div class="offcanvas-wrapper">
        <div class="container padding-bottom-3x mb-1">
               <div class="row">
                 <div class="col-lg-12 order-md-2">
            <h6 class="text-muted text-normal text-uppercase padding-top-5x mt-2" style="text-align:center;">ZTE Phone Models</h6>
               <hr class="margin-bottom-1x">
               <ul class="nav nav-pills nav-justified">
                 <li class="nav-item"><a class="nav-link" href="../../index.php">Homepage</a></li>
                 <li class="nav-item"><a class="nav-link" href="../zte.php">ZTE Home</a></li>
              
               </ul>

        </div>
        </div>
        </div>


    <div class="isotope-grid cols-4 mb-2">
    <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>



          <?php
          $i=0;

          //create an array for product id
          $product_id = array();
          $brand = array();

          //create an array for qty
          $product_quantity = array();

          //sql query to select all products from products table
          $result = $mysqli->query("SELECT * FROM products WHERE brand='aristo'");

          //if there are not products available then we dont have to run this
          if($result) {

            while ($obj = $result->fetch_object()) {


              echo '<div class="grid-item">';
              echo '<div class="product-card">';
              echo '<a class="product-thumb"><img src="../../images/lg/aristo/'.$obj->product_img_name.'"></a>';
              echo '<h4 class="product-title">Title: '.$obj->product_name.'</h4>';
              echo '<h4 class="product-title">Title: '.$obj->brand.'</h4>';
              echo '<h4 class="product-price">Price: '.$currency.$obj->price.'</h4>';

              //finally button


              if($obj->qty >0){

              echo '<div class="product-buttons">';
              echo '<a class="btn btn-outline-primary btn-sm" type="submit" value="Add To Cart" href="../../update-cart.php?action=add&id='.$obj->id.'">Add to Cart</a>';
              echo '</div>';

              }

               else {
                echo 'Out of Stock';
               }

               echo '</div>';
               echo '</div>';
              $i++;
            }
           }

    $_SESSION['product_id'] = $product_id;
   /*<!--End Product-->*/

   ?>
</div>
</div>




<?php
require 'zte-footer.php';

?>
