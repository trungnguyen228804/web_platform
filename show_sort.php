
<?php

	 function show_sort_product_ajax($q, $id){
	 	$con = mysqli_connect('localhost','root','','database_theme1');
		if (!$con) {
		  die('Could not connect: ' . mysqli_error($con));
		}

			switch ($q) {
				case 'name-by-asc':
					$type_sort = "products.product_name asc";
					break;
				case 'name-by-desc':
					$type_sort = "products.product_name desc";
					break;
				case 'price-by-asc':
					$type_sort = "products.product_price_sale asc";
					break;
				case 'price-by-asc':
					$type_sort = "products.product_price_sale desc";
					break;
				
				default:
					$type_sort = "products.product_name desc";
					break;
			}

			$query = "SELECT * FROM products INNER JOIN product_images WHERE products.category_id='$id' AND product_images.product_image_avatar='1' order by ".$type_sort." LIMIT 12";

			$product_sorted = mysqli_query($con,$query);

			if($product_sorted){
            while($result = $product_sorted->fetch_assoc()){
                echo "<a href='details.php?pro_id='".$result['product_id']."' class='collectios-product-item'>
                <div class='collectios-product-item-image-out'>
                    <div class='collectios-product-item-image'>
                        <img src='admin/uploads/".$result['product_image_url'] ."' alt='".$result['product_name']."' class='contrast'>
                    </div>
                </div>  
                <div class='collectios-product-info'>
                    <p>".$result['product_name'] ."</p>
                    <div class='collectios-product-price-out'>
                        <span class='collectios-product-price'>$".$result['product_price_sale']."</span>
                        <span class='collectios-product-price-old'>$".$result['product_price_cost']."</span>
                    </div>
                </div>
                <div class='collectios-product-sale'>

                    </div>
                </a>";

                }

            }else{
                echo 'Current this category haven not product! ';
            }

			return;
		}

$q = $_GET['q'];

show_sort_product_ajax($q, 1);

?>