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
		public function search_product($tukhoa){
			$tukhoa = $this->fm->validation($tukhoa);
			$query = "SELECT * FROM tbl_product WHERE productName LIKE '%$tukhoa%'";
			$result = $this->db->select($query);
			return $result;
		}
		
		public function show_slider(){
			$query = "SELECT * FROM sliders where slider_active='1' order by slider_id";
			$result = $this->db->select($query);
			return $result;
		}
		
		// public function show_product(){
		// 	// $query = "

		// 	// SELECT p.*,c.catName, b.brandName

		// 	// FROM tbl_product as p,tbl_category as c, tbl_brand as b where p.catId = c.catId 

		// 	// AND p.brandId = b.brandId 

		// 	// order by p.productId desc";

		// 	$query = "

		// 	SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName 

		// 	FROM tbl_product INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId 

		// 	INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId 

		// 	order by tbl_product.productId desc";

		// 	// $query = "SELECT * FROM tbl_product order by productId desc";

		// 	$result = $this->db->select($query);
		// 	return $result;
		// }
		
		public function getproductbyId($id){
			$query = "SELECT * FROM tbl_product where productId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function getproduct_new(){
			$sp_tungtrang = 4;
			if(!isset($_GET['trang'])){
				$trang = 1;
			}else{
				$trang = $_GET['trang'];
			}
			$tung_trang = ($trang-1)*$sp_tungtrang;
			$query = "SELECT * FROM tbl_product order by productId desc LIMIT $tung_trang,$sp_tungtrang";
			$result = $this->db->select($query);
			return $result;
		} 
		public function get_all_product(){
			$query = "SELECT * FROM tbl_product";
			$result = $this->db->select($query);
			return $result;
		} 

	}
?>