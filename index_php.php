<?php 
	include('recipe.class.php');
	include('recipe.data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Din Din</title>
</head>

<body>

<?php


// Recipe instances
	
$basil_pomodoro = new Recipe(1, "Basil Pomodoro Zucchini Pasta with Chicken", false, $ingredients_basil_pomodoro, 120, 45, $recipe_list[0], $recipe_texts[0]);

/*
$butternut_squash = new Recipe(2, "Butternut Squash Noodles with Shredded Brussels Sprouts, Walnuts and Caramelized Onions Yields", true, $ingredients_butternut_squash, 90, 30);
*/

?>

<h1><?php echo($basil_pomodoro->name); ?></h1>


<ul>
	<h3>Ingredients:</h3>
	<?php foreach($basil_pomodoro->ingredients as $ingredient) {
	echo "<li>" . $ingredient[0] . ", " . $ingredient[1] . "</li>";
} ?>
</ul>

<p>Vegetarian: <?php echo $basil_pomodoro->vegetarian; ?></p>

<p>Total calories: <?php echo $basil_pomodoro->calories; ?></p>

<p>Total cost: <?php echo $basil_pomodoro->cost; ?></p>

<p>Time to cook: <?php echo $basil_pomodoro->time; ?> </p>

<p>Filename: <?php echo $basil_pomodoro->filename; ?></p>

<p>Description: <?php echo $basil_pomodoro->text; ?></p>


<!--
<?php 
	echo json_encode($basil_pomodoro);
?>
-->

</body>
</html>