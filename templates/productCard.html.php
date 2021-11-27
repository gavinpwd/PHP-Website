<?php foreach ($rowsProducts as $row):
$photo = "images/" . $row["photo"];
$price = sprintf("%1.2f", $row["price"]);
$salePrice = sprintf("%1.2f", $row["salePrice"]);
$itemName = $row["itemName"];
$itemId = $row["itemId"];


?>
    <div class="product-card">
        <a href="singleProduct.php?id=<?= $itemId ?>">  
        <img class="photo" src="<?= $photo ?>" width="180" height="180" alt="Photo of product"></a>
        
        <?php
        if($salePrice > 0) {?>
          <p class="was-product-price"><small>WAS</small> <s>$<?=
           $price; ?></s>
          </p>

          <p class="sale-price">$<?= $salePrice ?>
          </p><?php
          }
          else {?>
          <p>$
            <?= $price ?>
          </p><?php
          } ?>
        <p class="product-name"><?= $itemName ?></p>
    </div>
<?php endforeach; ?>



