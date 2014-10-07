<!DOCTYPE html>
<html>
	<head>
		<title>Sales Report</title>
	</head>

	<body>
		<table>
			<tr> 
				<td> Order ID </td>
				<td> Date of Order </td>
				<td> Server Name </td>
				<td> Total Cost </td>
			</tr>
		<?php 
			include 'database.class.php';
			define("DB_HOST", "localhost");
			define("DB_USER", "root");
			define("DB_PASS", "");
			define("DB_NAME", "greenpigs");

			$database = new Database();
			try{
			$stmt = $database->query("SELECT * FROM ordert");
			while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) { ?>
				<tr> 
					<td> <?php print $row[0] ?> </td>
					<td> <?php print $row[1] ?> </td>
					<td> <?php print $row[2] ?> </td>
					<td> <?php print $row[3] ?> </td>
				</tr>				
			<?php }
			$stmt = null;
			}
			catch (PDOException $e) {
				print $e->getMessage();
			}
			$database->closeConnection();
			$database = null;
		?>

		</table>
	</body>	
</html>