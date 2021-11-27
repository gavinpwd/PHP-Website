<?php
  require_once "classes/DBAccess.php";
  $title = "Single Product";
  $pageHeading = "Single Product";
  
  //get database settings
  include "settings/db.php"; 

  //create database object
  $db = new DBAccess($dsn, $username, $password); 

  //connect to database
  $pdo = $db->connect();


  // if(isset($_GET["id"]))
  // {
  //   $prodId = $_GET["id"];
  // }
  // elseif (isset($_POST["itemId"]))
  // {
  //   $prodId = $_POST["itemId"];
  // }
  // else
  // {
  //   $prodId = 0;
  // }
  $prodId = $_GET["id"];
  $sql = "SELECT photo, price, salePrice, itemName, description, itemId, category.categoryName, item.categoryId FROM item
  LEFT JOIN category ON category.categoryId = item.categoryId WHERE itemID = :itemId";      

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":itemId" , $prodId, PDO::PARAM_INT);
  $rows = $db->executeSQL($stmt);

  //start buffer
  ob_start();

  //display products
  include "templates/singleProductCard.html.php";

  $output = ob_get_clean();

  include "templates/layoutProductPage.html.php";

  $db->disconnect();
?>

    