<?php 
	include 'database.class.php';
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "greenpigs");

	$database = new Database();

	//Query
	$database->query("INSERT INTO persons (LastName, FirstName, Address, City) VALUES ('Aldecimo', 'Mark', 'Yolo', 'Yolo city')"
	);

	/** Queries
		SELECT * FROM ordert;
		SELECT * FROM ingredients;
		SELECT * FROM ingredients WHERE Ingredient_ID = yolo;
		SELECT * FROM item WHERE isGift = 1;



	*/

	$database->debugDumpParams();
?>