<?php
    require_once "classes/DBAccess.php";
    $title = "Display Categories";
    $pageHeading = "Display Categories";

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
    

    //get the category id from the query string 
    if(isset($_GET["id"]))
    {
        $catId = $_GET["id"];
        $sql = "SELECT photo, price, salePrice, itemName, description, itemId, category.categoryName, item.categoryId FROM item
        LEFT JOIN category ON category.categoryId = item.categoryId WHERE category.categoryId = :categoryId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":categoryId" , $catId, PDO::PARAM_INT);
        $rowsProducts = $db->executeSQL($stmt);
        
        include "templates/productCard.html.php";
    }
    
    $output = ob_get_clean();
    
    include "templates/layoutCategories.html.php"; 
?>