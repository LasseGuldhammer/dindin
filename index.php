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
	
$basil_pomodoro = new Recipe("Basil Pomodoro Zucchini Pasta with Chicken", false, $ingredients_basil_pomodoro, 120, 45);
	
$butternut_squash = new Recipe("Butternut Squash Noodles with Shredded Brussels Sprouts, Walnuts and Caramelized Onions Yields", true, $ingredients_butternut_squash, 90, 30);
	
?>

<h1><?php echo($basil_pomodoro->name); ?></h1>


<ul>
	<h3>Ingredients:</h3>
	<?php foreach($basil_pomodoro->ingredients as $ingredient) {
	echo "<li>" . $ingredient[0] . ", " . $ingredient[1] . "</li>";
} ?>
</ul>

<p>Total calories: <?php echo $basil_pomodoro->calories; ?></p>

<p>Total cost: </p>

<p>Time to cook:</p>

<h1><?php echo($butternut_squash->name); ?></h1>


<ul>
	<h3>Ingredients:</h3>
	<?php foreach($butternut_squash->ingredients as $ingredient) {
	echo "<li>" . $ingredient[0] . ", " . $ingredient[1] . "</li>";
} ?>
</ul>

<p>Total calories: <?php echo $butternut_squash->calories; ?></p>

<p>Total cost: </p>

<p>Time to cook:</p>

</body>
</html>