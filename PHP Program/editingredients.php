<!DOCTYPE html>
<html>
	<head>
		<title>Sales Report</title>
	</head>

	<body>
		<h5> Select Ingredient to Edit </h5>
		<form action="editingredients2.php" method="post">
			<select name="ingredient_id">
			<?php 
				include 'database.class.php';
				define("DB_HOST", "localhost");
				define("DB_USER", "root");
				define("DB_PASS", "");
				define("DB_NAME", "greenpigs");

				$database = new Database();
				try{
					$stmt = $database->query("SELECT * FROM ingredients");
					while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) { ?>
						<option value=<?php echo $row[0]?>> <?php echo $row[0] . " - " . $row[1] ?> </option>		
					<?php } 
					$stmt = null;
				}
				catch (PDOException $e) {
					print $e->getMessage();
				}
				?>

			</select>	
			<input type="submit">
		</form>	
	</body>	
</html>