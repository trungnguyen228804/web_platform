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

			$query2 = "SELECT * FROM product_images WHERE product_images.product_id='$id' ";

			$product_images_by_id = $this->db->select($query2);

			$result = [
					'product_by_id'=> $product_by_id,
					'product_images_by_id' => $product_images_by_id ];

			return $result;
		}

	}
?>