<!-- All Recipies section starts here -->

<?php
	// Function that echoes out a recipe's name and filename inside HTML elements
	function displayRecipe($recipe) {
		echo '<div id="' . $recipe->filename . '" class="col span_1_of_4 ' . $recipe->filename . '_bg weekstyle" onclick="assignRecipe()"><h3 class="green_bg">' . $recipe->name . '</h3></div>';
	}	
?>

<h2 class="text-center">ALL RECIPES</h2>
<hr>

<!-- Row of four recipes -->
<section>	
	<div class="section group">
	<?php
		
		for($i = 0; $i < 4; $i++) {
			displayRecipe($recipe_objects[$i]);
		}
		
	?>
	</div>
</section>

<!-- Row of four recipes -->
<section>
	<div class="section group">
	<?php
		
		for($i = 4; $i < 8; $i++) {
			displayRecipe($recipe_objects[$i]);
		}
		
	?>
	</div>
</section>

<!-- Row of four recipes -->
<section>
	<div class="section group">
	<?php
		
		for($i = 8; $i < 12; $i++) {
			displayRecipe($recipe_objects[$i]);
		}
		
	?>
	</div>
</section>

<!-- Row of four recipes -->
<section>
	<div class="section group">
	<?php
		
		for($i = 12; $i < 14; $i++) {
			displayRecipe($recipe_objects[$i]);
		}
		
	?>
	</div>
</section>