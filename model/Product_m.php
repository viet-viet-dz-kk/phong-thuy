<?php 
include_once 'config/myConfig.php';

	class Product_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct(); // Tự động chạy, kết nối csdl... luôn tồn tại biến kết nối csdl $conn;
		}
		public function getProduct(){
			$sql = "SELECT *FROM tbl_cate,tbl_product WHERE tbl_cate.id_cate = tbl_product.id_cate ORDER BY tbl_product.id_product DESC";
			$pre = $this->pdo->prepare($sql);
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	
	}
 ?>