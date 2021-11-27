<?php
	require_once "classes/DBAccess.php";

	$title = "Display Products";
	$pageHeading = "Display Products";

	//get database settings
    include "settings/db.php";

	//create database object
	$db = new DBAccess($dsn, $username, $password);

	//connect to database
    $pdo = $db->connect();

	$sql = "select categoryName, categoryId from category";
    $stmt = $pdo->prepare($sql);

    $rows = $db->executeSQL($stmt); 

	//start buffer
	ob_start();

	
	//set up query to execute
	$sql = "select photo, price, salePrice, itemName, itemId from item where featured = 1";
    $stmt = $pdo->prepare($sql);

	//execute SQL query
    $rowsProducts = $db->executeSQL($stmt);

	
	
			
	//display products
    include "templates/productCard.html.php";
    
	$output = ob_get_clean();

	include "templates/layout.html.php";

    $pdo = null;

?>