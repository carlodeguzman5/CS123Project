
<!DOCTYPE html>
<html>
	<head>
		<title>Sales Report</title>
	</head>

	<body>
		<h5> Select Ingredient to Edit </h5>
		<form action="editingredients3.php" method="post">
			<table>
				<tr> 
					<td> Attribute </td>
					<td> Value </td>
				</tr>
			<?php 
				include 'database.class.php';
				define("DB_HOST", "localhost");
				define("DB_USER", "root");
				define("DB_PASS", "");
				define("DB_NAME", "greenpigs");

				$database = new Database();
				try {
					$ingredient_id = $_POST['ingredient_id'];
					$stmt = $database->query("SELECT * FROM ingredients WHERE Ingredient_ID = {$ingredient_id}");
					$row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);	
					$stmt = null;
				}
				catch (PDOException $e) {
					print $e->getMessage();
				}	
			?>	

				<tr> 
					<td> Ingredient ID</td>
					<td> <?php echo $row[0] ?> <input name="ingredient_id2" type="hidden" value=<?php echo $row[0]?>> </td>
				</tr>
				<tr>
					<td> Name </td>
					<td> <input name="ingredient_name" type="text" value=<?php echo $row[1]?>> </td>
				<tr>
				<tr>
					<td> Stock </td>
					<td> <input name="ingredient_stock" type="text" value=<?php echo $row[2]?>> </td>
				<tr>	
				<tr>
					<td> Replenish? </td>
					<td> <input name="ingredient_replenish" type="text" value=<?php echo $row[3]?>> </td>
				<tr>	
				<tr>
					<td> Price </td>
					<td> <input name="ingredient_price" type="text" value=<?php echo $row[4]?>> </td>
				<tr>
				<tr>
					<td> Supplier </td>
					<td> <input name="ingredient_supplier" type="text" value=<?php echo $row[5]?>> </td>
				<tr>			

			</table>
			<input type="submit">
		</form>	
	</body>	
</html>