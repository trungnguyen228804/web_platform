<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	/**
	 * 
	 */
	class product
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		
		public function show_slider(){
			$query = "SELECT * FROM sliders where slider_active='1' order by slider_id";
			$result = $this->db->select($query);
			return $result;
		}
		
		public function getproductbyId($id){
			$query = "SELECT * FROM tbl_product where productId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}

		public function get_details($id){
			$query1 = "SELECT * FROM products WHERE products.product_id='$id' LIMIT 1";

			$product_by_id = $this->db->select($query1);

			$query2 = "

			SELECT * FROM product_images INNER JOIN styles ON product_images.style_id = styles.style_id 

 			INNER JOIN colors ON product_images.color_id = colors.color_id WHERE product_images.product_id='$id'";

			$product_images_by_id = $this->db->select($query2);

			$result = [
					'product_by_id'=> $product_by_id,
					'product_images_by_id' => $product_images_by_id ];

			return $result;
		}

		public function get_list_color_by_product_id($id, $style){
			$query = "
			SELECT colors.* FROM product_images  INNER JOIN colors ON product_images.color_id = colors.color_id 

			INNER JOIN styles ON product_images.style_id = styles.style_id WHERE product_images.product_id='$id' AND styles.style_name='$style'";

			$color_by_pro_id = $this->db->select($query);

			$list_color=[];
			foreach ($color_by_pro_id as $key) {
				array_push($list_color, $key );
			}
			$result = array_unique($list_color, 0);
			return $result;
		}

		public function get_list_size($id, $style){
			
			$query = "
			SELECT * FROM product_style_size_itemest  INNER JOIN styles ON product_style_size_itemest.style_id = styles.style_id 

			INNER JOIN sizes ON product_style_size_itemest.size_id = sizes.size_id WHERE product_style_size_itemest.product_id='$id' AND styles.style_name='$style'";

			$list_size = $this->db->select($query);

			return $list_size;
		}

	}
?>