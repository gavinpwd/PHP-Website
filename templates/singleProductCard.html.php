<?php foreach ($rows as $row):
$photo = "images/" . $row["photo"];
$price = sprintf("%1.2f", $row["price"]);
$salePrice = sprintf("%1.2f", $row["salePrice"]);
$itemName = $row["itemName"];
$itemId = $row["itemId"];
$description = $row["description"];

?>
    <div class="product-card-single">
        <p class="product-name"><?= $itemName ?></p>
        <img class="photo" src="<?= $photo ?>" width="180" height="180" alt="Photo of product">
        
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
        <p class="product-desc"><?= $description ?></p>
    </div>
<?php endforeach; ?>



