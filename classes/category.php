<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
	/**
	 * 
	 */
	class category
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function show_category(){
			$query = "SELECT * FROM categories WHERE category_parent_id = 0 order by category_id";
			$result = $this->db->select($query);
			return $result;
		}

		public function show_category_child($category_id){
			$query = "SELECT * FROM categories WHERE category_parent_id ='$category_id'  order by category_id";
			$result = $this->db->select($query);
			return $result;
		}

	}
?>