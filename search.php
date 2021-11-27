<?php
    require_once "classes/DBAccess.php";
    $title = "Product Search";
    $pageHeading = "Product Search";
    
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
    
    //display the search form
    // include "templates/searchForm.html.php";
    
    //check if the search button has been pressed
    if (isset($_GET["submitButton"]) && isset($_GET["search"]))
    {
        $search = $_GET["search"];
        $dsn = "mysql:host=localhost;dbname=SportsWH;charset=utf8";
        $username = "root";
        $password = "";
        
        //create database object
        $db = new DBAccess($dsn, $username, $password); 
        //connect to database
        $pdo = $db->connect();

        //set up query to execute search word including before and after hence %xx%
        $sql = "select photo, price, salePrice, itemName, itemId, CategoryId from item where ItemName like :itemName";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":itemName", "%$search%");
        
        //execute SQL query
        $rowsProducts = $db->executeSQL($stmt);
        
        //display products
        include "templates/productCard.html.php"; 
    }
    $output = ob_get_clean();
    
    include "templates/layoutSearch.html.php";
    
?>