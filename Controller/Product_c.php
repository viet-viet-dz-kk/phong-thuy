<?php 
	include_once 'model/Product_m.php';

	class Product_c extends Product_m
	{
		private $pro;
		
		function __construct()
		{
			$this->pro = new Product_m();
		}

		public function Product(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'index';
			}

			switch ($method) {
				case 'remove':
					if (isset($_GET['id_product'])) {
						$id = (int)$_GET['id_product'];
						$pro = $this->pro->remove($id);

					}else{
						header("Location: index.php");
					}
					break;

				default:
					$pro = $this->pro->getProduct();
					echo "<pre>";
					print_r($pro);
					echo "</pre>";
					include_once 'views/list_product.php';
					
					break;
			}
		}

	}
 ?>