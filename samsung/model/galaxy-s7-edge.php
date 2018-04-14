<?php require 'samsung-header.php';

?>





<!--
************************************************************************************************************
* END NAVIGATION MENU
*
* BEGIN PRODUCTS
*
************************************************************************************************************
-->





          <?php
          $i=0;

          //create an array for product id
          $product_id = array();

          //create an array for qty
          $product_quantity = array();

          //sql query to select all products from products table
          $result = $mysqli->query("SELECT * FROM products WHERE brand='galaxy8plus'");

          //if there are not products available then we dont have to run this
          if($result) {

            while ($obj = $result->fetch_object()) {


              echo '<div class="grid-item">';
              echo '<div class="product-card">';
              echo '<a class="product-thumb"><img src="iphone/'.$obj->product_img_name.'"></a>';
              echo '<h4 class="product-title">Title: '.$obj->product_name.'</h4>';
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
require 'samsung-footer.php';

?>
