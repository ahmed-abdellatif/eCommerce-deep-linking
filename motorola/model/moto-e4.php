<!--
******************************************************************************************
* header.php : index.php
******************************************************************************************
-->

<?php
require 'header.php';
require '../../config.php';
?>



<?php

$i = 0;

//create an array for product id
$product_id = array();
$brand      = array();

//create an array for qty
$product_quantity = array();

$sql = $mysqli->query("SELECT id,product_name,product_img_name, product_desc, price, qty
                            FROM products, categories WHERE categories.cat_name='moto-e4' AND products.cat_id = categories.cat_id");

if ($sql) {

	while ($obj = $sql->fetch_object()) {

		echo '<div class="grid-item">';
		echo '<div class="product-card" style="box-shadow: 5px 5px 2px 1px rgba(192, 192, 192, 0.68);">';
		echo '<a class="product-thumb"><img src="e4/'.$obj->product_img_name.'"></a>';
		echo '<h4 class="product-title">Title: '.$obj->product_name.'</h4>';
		echo '<h4 class="product-price">Price: '.$currency.$obj->price.'</h4>';
		//finally button

		if ($obj->qty > 0) {

			echo '<div class="product-buttons">';
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
</div><br>




<?php
require 'footer.php';

?>
