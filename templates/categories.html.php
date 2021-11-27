   	<ul class="categories-list" id="buttons">
		<?php foreach ($rows as $row):
			$id = $row["categoryId"];
			$CategoryName = $row["categoryName"];
			?>

			<li><a href="displayCategories.php?id=<?= $id ?>"><?=  $CategoryName ?><span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
					
		<?php endforeach; ?>
	</ul>			

