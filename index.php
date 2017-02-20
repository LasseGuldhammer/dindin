<?php 
	include('recipe.class.php');
	include('recipe.data.php');
?>
<!DOCTYPE html>
<html>
	<head>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i" rel="stylesheet"> 

		<link rel="stylesheet" media="all" type="text/css" href="css/stylesheet.css">
		
        <title>this needs a title</title>
<link rel="icon" type="image/png" href="images/dindinlogofav.png">
	</head>

<header>
	<?php include('header.php') ?>
</header>

<body>

<div class="flex-container">
	<h1>Plan your dinner for the week with one click</h1>
	<button class="button1" onclick="loadDoc()">GENERATE</button>
</div>

<!-- week generator -->

<div class="section group">

    <div id="demo"></div>
   
    <script src="ajax/generator.js"></script>


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


<?php include('footer.php') ?>
</body>
   

</html>