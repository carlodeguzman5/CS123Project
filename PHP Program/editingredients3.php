
<!DOCTYPE html>
<html>
	<head>
		<title>Sales Report</title>
	</head>

	<body>
		
		
		<?php 
			include 'database.class.php';
			define("DB_HOST", "localhost");
			define("DB_USER", "root");
			define("DB_PASS", "");
			define("DB_NAME", "greenpigs");

			$database = new Database();
			try{
				$id = $_POST['ingredient_id2'];
				$name = $_POST['ingredient_name'];
				$stock = $_POST['ingredient_stock'];
				$replenish = $_POST['ingredient_replenish'];
				$price = $_POST['ingredient_price'];
				$supplier = $_POST['ingredient_supplier'];
				$stmt = $database->query("UPDATE ingredients SET Name='{$name}', Stock='{$stock}', Replenish='{$replenish}', Price='{$price}', Supplier='{$supplier}' WHERE Ingredient_ID = '{$id}' ");
				$stmt = null;
			}
			catch (PDOException $e) {
				print $e->getMessage();
			}		
			$database->closeConnection();
			$database = null;
		?>	

		<h5> Ingredient Information Updated</h5>

		<a href="admin.php"> <input type="button" value="Go Back to Admin Page"> </a>

				
	</body>	
</html>