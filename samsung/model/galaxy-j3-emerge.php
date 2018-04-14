<?php
require 'samsung-header.php';
require '../../config.php';
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
$i = 0;
//create an array for product id
$product_id = array();
//create an array for qty
$product_quantity = array();
//sql query to select all products from products table
$sql = $mysqli->query("SELECT id, product_name, product_img_name, product_desc, price, qty
                                 FROM products, categories WHERE categories.cat_name ='emerge' AND products.cat_id = categories.cat_id LIMIT 5");

//if there are not products available then we dont have to run this
if ($sql) {

	while ($obj = $sql->fetch_object()) {

		echo '<div class="grid-item" style="padding:10px;">';
		echo '<div class="product-card" style="border:1px groove #90caf9;box-shadow: 5px 5px 2px 1px rgba(192, 192, 192, 0.68);">';
		echo '<a class="product-thumb"><img src="'.$obj->product_img_name.'"></a>';
		echo '<h4 class="product-title">Title: '.$obj->product_name.'</h4>';
		echo '<h4 class="product-price">Price: '.$currency.$obj->price.'</h4>';
		echo '<div class="card-body text-center">';

		//finally button

		if ($obj->qty > 0) {

			echo '<a class="category btn-outline-primary btn-sm" value="Add To Cart" href="../../update-cart.php?action=add&id='.$obj->id.'">Add to Cart <i class="fas fa-cart-plus"></i></a>';
			echo '</div>';

		} else {
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
